<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use App\Models\Ongkir;
use Illuminate\Http\Request;

class PickupController extends Controller
{
    // Menampilkan halaman form pickup
    public function index()
    {
        $kabupatens = Ongkir::select('kabupaten')->distinct()->orderBy('kabupaten')->get();
        $ongkirs = Ongkir::all();

        return view('pickup', compact('kabupatens', 'ongkirs'));
    }

    // Memproses data form dan redirect ke WA
    public function store(Request $request)
    {
        // 1. Validasi Data
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

        // 2. Simpan ke Database (status otomatis 'Menunggu' berkat default di migration)
        $pickup = Pickup::create($validated);

        // 3. Format Pesan WhatsApp
        // Ganti nomor ini dengan nomor WA Admin J&T Cargo milikmu (Gunakan awalan 62)
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

        // 4. Encode text agar aman untuk URL
        $encodedText = urlencode($textWa);

        // 5. Buat Link WA dan Redirect User
        $waLink = "https://wa.me/{$adminWhatsApp}?text={$encodedText}";

        return redirect()->away($waLink);
    }
}
