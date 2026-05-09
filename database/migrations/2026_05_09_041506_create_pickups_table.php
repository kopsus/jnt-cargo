<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pickups', function (Blueprint $table) {
            $table->id();

            // Informasi Penerima
            $table->string('kota_tujuan');
            $table->string('kecamatan_tujuan');
            $table->text('alamat_penerima');

            // Informasi Pengirim (Pickup)
            $table->string('kota_pengambilan');
            $table->string('wa_pengirim');
            $table->string('kecamatan_pengambilan');
            $table->string('kelurahan_pengambilan');
            $table->text('alamat_pickup');

            // Informasi Paket
            $table->string('jenis_paket');
            $table->integer('berat');
            $table->integer('panjang')->nullable();
            $table->integer('lebar')->nullable();
            $table->integer('tinggi')->nullable();

            // Status Sistem (Poin 1 yang kita diskusikan)
            $table->enum('status', [
                'Menunggu',
                'Kurir Menuju Lokasi',
                'Selesai / Paket Diambil',
                'Batal'
            ])->default('Menunggu');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pickups');
    }
};
