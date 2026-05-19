<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use Illuminate\Http\Request;
// use App\Models\Ongkir;

class PickupController extends Controller
{
    public function index()
    {
        return view('pickup');
    }

    public function store(Request $request)
    {
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
        ]);

        $validated['kota_tujuan'] = '-';
        $validated['kecamatan_tujuan'] = '-';
        $validated['kelurahan_pengambilan'] = '-';

        $pickup = Pickup::create($validated);

        $adminWhatsApp = "6282137372800";

        $textWa = "Halo Admin J&T Cargo, saya ingin request *Pickup Paket*. Berikut detailnya:\n\n";

        $textWa .= "*[INFORMASI PENGIRIM (PICKUP)]*\n";
        $textWa .= "- No. WA: {$pickup->wa_pengirim}\n";
        $textWa .= "- Kota/Kab: {$pickup->kota_pengambilan}\n";
        $textWa .= "- Kecamatan: {$pickup->kecamatan_pengambilan}\n";
        $textWa .= "- Alamat Lengkap: {$pickup->alamat_pickup}\n\n";

        $textWa .= "*[INFORMASI PENERIMA (TUJUAN)]*\n";
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
