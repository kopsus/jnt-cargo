<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use Illuminate\Http\Request;
use App\Models\Ongkir;

class PickupController extends Controller
{
    public function index()
    {
        return view('pickup');
    }

    public function store(Request $request)
    {
        // 1. Validasi Data (Tanpa dimensi dan alamat_pickup)
        $validated = $request->validate([
            'nama'          => 'required|string|max:255',
            'alamat'        => 'required|string',
            'kecamatan'     => 'required|string',
            'kelurahan'     => 'required|string',
            'nomer_wa'      => 'required|string',
            'jenis'         => 'required|string',
            'berat'         => 'required|integer|min:1',
            'koordinat'     => 'nullable|string', // Boleh kosong jika user tidak membagikan lokasi
        ]);

        // 2. Simpan ke Database
        $pickup = Pickup::create($validated);

        // 3. Format Pesan WhatsApp yang Baru
        $adminWhatsApp = "6282137372800"; // Nomor admin

        $textWa = "Halo Admin J&T Cargo, saya ingin request *Pickup Paket*. Berikut detailnya:\n\n";
        
        $textWa .= "*[INFORMASI PENGIRIM (PICKUP)]*\n";
        $textWa .= "- Nama: {$pickup->nama}\n";
        $textWa .= "- No. WA: {$pickup->nomer_wa}\n";
        $textWa .= "- Kecamatan: {$pickup->kecamatan}\n";
        $textWa .= "- Kelurahan: {$pickup->kelurahan}\n";
        
        // Hanya tampilkan koordinat jika user mengisinya
        if ($pickup->koordinat) {
            $textWa .= "- Titik Maps (Koordinat): {$pickup->koordinat}\n";
        }

        $textWa .= "\n*[INFORMASI PENERIMA (TUJUAN)]*\n";
        $textWa .= "- Alamat Lengkap: {$pickup->alamat}\n\n";

        $textWa .= "*[DETAIL PAKET]*\n";
        $textWa .= "- Jenis: {$pickup->jenis}\n";
        $textWa .= "- Berat: {$pickup->berat} Kg\n";

        $textWa .= "\nMohon segera diproses ya min, terima kasih! 🙏 (ID Request: #{$pickup->id})";

        // 4. Encode text dan Redirect ke Web WhatsApp
        $encodedText = urlencode($textWa);
        $waLink = "https://wa.me/{$adminWhatsApp}?text={$encodedText}";

        return redirect()->away($waLink);
    }
}
