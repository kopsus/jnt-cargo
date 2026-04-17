<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VoucherController extends Controller
{
    public function index()
    {
        $vouchers = Voucher::latest()->get();
        return view('admin.vouchers.index', compact('vouchers'));
    }

    public function create()
    {
        return view('admin.vouchers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'whatsapp_number' => 'required|string', 
            'whatsapp_text' => 'required|string',
            'duration_minutes' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        Voucher::create($data);

        return redirect('/admin/vouchers')->with('success', 'Hore! Voucher baru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $voucher = Voucher::findOrFail($id);
        return view('admin.vouchers.edit', compact('voucher'));
    }

    public function update(Request $request, $id)
    {
        $voucher = Voucher::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'whatsapp_number' => 'required|string',
            'whatsapp_text' => 'required|string',
            'duration_minutes' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        $voucher->update($data);

        return redirect('/admin/vouchers')->with('success', 'Sip! Voucher berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $voucher = Voucher::findOrFail($id);

        if ($voucher->thumbnail) {
            Storage::disk('public')->delete($voucher->thumbnail);
        }

        $voucher->delete();

        return redirect('/admin/vouchers')->with('success', 'Voucher telah berhasil dihapus selamanya.');
    }
}