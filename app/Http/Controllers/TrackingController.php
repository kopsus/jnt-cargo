<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index()
    {
        $trackings = Tracking::latest()->paginate(10);
        return view('admin.trackings.index', compact('trackings'));
    }

    public function create()
    {
        return view('admin.trackings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_resi' => 'required|string|max:50',
            'status' => 'required|in:Menunggu Penjemputan,Paket Diproses,Dalam Perjalanan (Transit),Dibawa Kurir,Paket Diterima,Gagal Kirim,Dikembalikan (Retur)',
            'catatan' => 'nullable|string',
        ]);

        Tracking::create($request->all());

        return redirect()->route('admin.trackings.index')->with('success', 'Riwayat pelacakan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $tracking = Tracking::findOrFail($id);
        return view('admin.trackings.edit', compact('tracking'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_resi' => 'required|string|max:50',
            'status' => 'required|in:Menunggu Penjemputan,Paket Diproses,Dalam Perjalanan (Transit),Dibawa Kurir,Paket Diterima,Gagal Kirim,Dikembalikan (Retur)',
            'catatan' => 'nullable|string',
        ]);

        $tracking = Tracking::findOrFail($id);
        $tracking->update($request->all());

        return redirect()->route('admin.trackings.index')->with('success', 'Data pelacakan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $tracking = Tracking::findOrFail($id);
        $tracking->delete();

        return redirect()->route('admin.trackings.index')->with('success', 'Riwayat pelacakan berhasil dihapus!');
    }
}
