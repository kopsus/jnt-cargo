<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use App\Models\Ongkir;
use Illuminate\Http\Request;

class PickupController extends Controller
{
    public function index()
    {
        $kabupatens = Ongkir::select('kabupaten')->distinct()->orderBy('kabupaten')->get();
        $ongkirs = Ongkir::all();

        return view('pickup', compact('kabupatens', 'ongkirs'));
    }

    public function store(Request $request)
    {
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
        ]);

        $pickup = Pickup::create($validated);

        $adminWhatsApp = "62882005090497";

        $textWa = "Halo Admin J&T Cargo, saya ingin request *Pickup Paket*. Berikut detailnya:\n\n";
        $textWa .= "*[INFORMASI PENGIRIM]*\n";
        $textWa .= "- No. WA: {$pickup->wa_pengirim}\n";
        $textWa .= "- Kota Pickup: {$pickup->kota_pengambilan}\n";
        $textWa .= "- Kec/Kel: {$pickup->kecamatan_pengambilan} / {$pickup->kelurahan_pengambilan}\n";
        $textWa .= "- Alamat Lengkap: {$pickup->alamat_pickup}\n\n";

        $textWa .= "*[INFORMASI PENERIMA]*\n";
        $textWa .= "- Kota Tujuan: {$pickup->kota_tujuan}\n";
        $textWa .= "- Kecamatan: {$pickup->kecamatan_tujuan}\n";
        $textWa .= "- Alamat Lengkap: {$pickup->alamat_penerima}\n\n";

        $textWa .= "*[DETAIL PAKET]*\n";
        $textWa .= "- Jenis: {$pickup->jenis_paket}\n";
        $textWa .= "- Berat: {$pickup->berat} Kg\n";

        if ($pickup->panjang && $pickup->lebar && $pickup->tinggi) {
            $textWa .= "- Dimensi: {$pickup->panjang} x {$pickup->lebar} x {$pickup->tinggi} cm\n";
        }

        $textWa .= "\nMohon segera diproses ya min, terima kasih! 🙏 (ID Request: #{$pickup->id})";

        $encodedText = urlencode($textWa);

        $waLink = "https://wa.me/{$adminWhatsApp}?text={$encodedText}";

        return redirect()->away($waLink);
    }
}
