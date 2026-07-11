<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pickup;
use Illuminate\Http\Request;

class PickupController extends Controller
{
    public function index()
    {
        // Mengambil data pickup terbaru
        $pickups = Pickup::latest()->paginate(10);
        return view('admin.pickups.index', compact('pickups'));
    }

    public function edit($id)
    {
        $pickup = Pickup::findOrFail($id);
        return view('admin.pickups.edit', compact('pickup'));
    }

    public function update(Request $request, $id)
    {
        $pickup = Pickup::findOrFail($id);

        // Validasi bersih tanpa kelurahan_pengambilan
        $validated = $request->validate([
            'alamat_penerima' => 'required|string',
            'kota_pengambilan' => 'required|string',
            'wa_pengirim' => 'required|string',
            'kecamatan_pengambilan' => 'required|string',
            'alamat_pickup' => 'required|string',
            'jenis_paket' => 'required|string',
            'berat' => 'required|integer|min:1',
            'panjang' => 'nullable|integer',
            'lebar' => 'nullable|integer',
            'tinggi' => 'nullable|integer',
            'status' => 'required|in:Menunggu,Kurir Menuju Lokasi,Selesai / Paket Diambil,Batal',
        ]);

        // Suntikkan nilai default untuk kolom yang sudah tidak dipakai
        $validated['kota_tujuan'] = '-';
        $validated['kecamatan_tujuan'] = '-';
        $validated['kelurahan_pengambilan'] = '-';

        $pickup->update($validated);

        return redirect()->route('admin.pickups.index')->with('success', 'Data & Status Pickup berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pickup = Pickup::findOrFail($id);
        $pickup->delete();

        return redirect()->route('admin.pickups.index')->with('success', 'Data Pickup berhasil dihapus!');
    }

    public function exportCsv()
    {
        // 1. Ambil semua data pickup, diurutkan dari yang terbaru
        $pickups = \App\Models\Pickup::orderBy('created_at', 'desc')->get();

        // 2. Buat nama file dinamis beserta tanggal hari ini
        $filename = "Data_Pickup_Cargo_" . date('Y-m-d_H-i-s') . ".csv";

        // 3. Siapkan header (aturan) agar browser tahu ini adalah file CSV yang harus didownload
        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        // 4. Tentukan judul kolom (baris paling atas di Excel/CSV)
        $columns = [
            'ID Request',
            'Waktu Request',
            'No WhatsApp',
            'Kota Asal',
            'Kecamatan Asal',
            'Alamat Lengkap Asal',
            'Alamat Penerima',
            'Jenis Paket',
            'Berat (Kg)',
            'Dimensi (P x L x T)',
            'Status'
        ];

        // 5. Fungsi utama untuk menulis data ke dalam file CSV
        $callback = function () use ($pickups, $columns) {
            $file = fopen('php://output', 'w');

            // Masukkan baris judul kolom
            fputcsv($file, $columns);

            // Looping dan masukkan data masing-masing baris
            foreach ($pickups as $pickup) {
                // Atur format dimensi jika ada isinya
                $dimensi = ($pickup->panjang && $pickup->lebar && $pickup->tinggi)
                    ? "{$pickup->panjang}x{$pickup->lebar}x{$pickup->tinggi} cm"
                    : "-";

                // Susun data agar sejajar dengan urutan kolom di atas
                $row = [
                    $pickup->id,
                    $pickup->created_at->format('Y-m-d H:i:s'),
                    $pickup->wa_pengirim,
                    $pickup->kota_pengambilan,
                    $pickup->kecamatan_pengambilan,
                    $pickup->alamat_pickup,
                    $pickup->alamat_penerima,
                    $pickup->jenis_paket,
                    $pickup->berat,
                    $dimensi,
                    $pickup->status
                ];

                fputcsv($file, $row);
            }

            fclose($file);
        };

        // 6. Kembalikan balasan berupa stream file ke browser
        return response()->stream($callback, 200, $headers);
    }
}
