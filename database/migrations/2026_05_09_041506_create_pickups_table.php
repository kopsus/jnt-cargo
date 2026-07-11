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
            
            // Kolom teks biasa
            $table->string('nama');
            $table->text('alamat');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('nomer_wa');
            $table->string('jenis');
            
            // Kolom angka
            $table->integer('berat');
            
            // Kolom yang boleh dikosongkan (nullable)
            $table->string('koordinat')->nullable();
            
            // Kolom dengan nilai default
            $table->string('status')->default('Menunggu');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pickups');
    }
};
