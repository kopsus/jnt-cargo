<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    protected $fillable = [
        'kota_tujuan',
        'kecamatan_tujuan',
        'alamat_penerima',
        'kota_pengambilan',
        'wa_pengirim',
        'kecamatan_pengambilan',
        'kelurahan_pengambilan',
        'alamat_pickup',
        'jenis_paket',
        'berat',
        'panjang',
        'lebar',
        'tinggi',
        'status'
    ];
}
