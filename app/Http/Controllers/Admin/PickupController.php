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

        $validated = $request->validate([
            'kota_tujuan' => 'required|string',
            'kecamatan_tujuan' => 'required|string',
            'alamat_penerima' => 'required|string',
            'kota_pengambilan' => 'required|string',
            'wa_pengirim' => 'required|string',
            'kecamatan_pengambilan' => 'required|string',
            'kelurahan_pengambilan' => 'required|string',
            'alamat_pickup' => 'required|string',
            'jenis_paket' => 'required|string',
            'berat' => 'required|integer|min:1',
            'panjang' => 'nullable|integer',
            'lebar' => 'nullable|integer',
            'tinggi' => 'nullable|integer',
            'status' => 'required|in:Menunggu,Kurir Menuju Lokasi,Selesai / Paket Diambil,Batal',
        ]);

        $pickup->update($validated);

        return redirect()->route('admin.pickups.index')->with('success', 'Data & Status Pickup berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pickup = Pickup::findOrFail($id);
        $pickup->delete();

        return redirect()->route('admin.pickups.index')->with('success', 'Data Pickup berhasil dihapus!');
    }
}
