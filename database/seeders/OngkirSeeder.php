<?php

namespace Database\Seeders;

use App\Models\Ongkir;
use Illuminate\Database\Seeder;

class OngkirSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Arahkan ke lokasi file CSV kamu
        $csvFile = fopen(base_path('database/Ongkirs.csv'), 'r');

        $firstline = true;

        // 2. Baca CSV baris per baris
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            
            // 3. Lewati baris pertama jika itu adalah Header (Judul Kolom)
            if (!$firstline) {
                Ongkir::create([
                    'provinsi'  => $data[0], // Kolom A di Excel
                    'kabupaten' => $data[1], // Kolom B di Excel
                    'kecamatan' => $data[2], // Kolom C di Excel
                    'harga'     => $data[3]  // Kolom D di Excel
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}