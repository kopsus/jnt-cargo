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

    public function update(Request $request, string $id)
    {
        // 1. Validasi data menggunakan nama kolom yang BARU
        $validated = $request->validate([
            'status'    => 'required|string',
            'kurir'     => 'nullable|string|max:255',
            'nama'      => 'required|string|max:255',
            'nomer_wa'  => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'koordinat' => 'nullable|string',
            'jenis'     => 'required|string',
            'berat'     => 'required|integer|min:1',
            'alamat'    => 'required|string',
        ]);

        // 2. Cari data pickup yang ingin diedit berdasarkan ID
        $pickup = \App\Models\Pickup::findOrFail($id);

        // 3. Update data yang ada di database dengan data baru dari form
        $pickup->update($validated);

        // 4. Arahkan kembali ke halaman tabel dengan pesan sukses
        return redirect()->route('admin.pickups.index')->with('success', 'Data dan status pickup berhasil diperbarui!');
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

        // 3. Siapkan header agar browser tahu ini adalah file CSV
        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        // 4. Tentukan judul kolom yang BARU (Sesuai database terbaru)
        $columns = [
            'ID Request', 
            'Waktu Request', 
            'Nama Pengirim',
            'No WhatsApp', 
            'Kecamatan', 
            'Kelurahan', 
            'Alamat Penerima', 
            'Titik Koordinat',
            'Jenis Paket', 
            'Berat (Kg)', 
            'Nama Kurir',
            'Status'
        ];

        // 5. Fungsi utama untuk menulis data ke dalam file CSV
        $callback = function() use($pickups, $columns) {
            $file = fopen('php://output', 'w');
            
            // Masukkan baris judul kolom
            fputcsv($file, $columns);

            // Looping dan masukkan data masing-masing baris menggunakan nama kolom BARU
            foreach ($pickups as $pickup) {
                $row = [
                    $pickup->id,
                    $pickup->created_at->format('Y-m-d H:i:s'),
                    $pickup->nama,
                    $pickup->nomer_wa,
                    $pickup->kecamatan,
                    $pickup->kelurahan,
                    $pickup->alamat,
                    $pickup->koordinat ?? '-', // Beri tanda strip jika koordinat kosong
                    $pickup->jenis,
                    $pickup->berat,
                    $pickup->kurir ?? 'Belum Ditugaskan',
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
