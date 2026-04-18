<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();

            // Dibuat index agar pencarian resi di frontend jadi super cepat
            $table->string('no_resi')->index();

            // Enum status pengiriman yang umum digunakan di kargo
            $table->enum('status', [
                'Menunggu Penjemputan',
                'Paket Diproses',
                'Dalam Perjalanan (Transit)',
                'Dibawa Kurir',
                'Paket Diterima',
                'Gagal Kirim',
                'Dikembalikan (Retur)'
            ]);

            $table->text('catatan')->nullable(); // Boleh kosong, misal: "Paket tiba di DC Surabaya"
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};
