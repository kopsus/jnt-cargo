<?php

namespace Database\Seeders;

use App\Models\Ongkir;
use Illuminate\Database\Seeder;

class OngkirSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Kab Bintan
            ['kabupaten' => 'Kab Bintan', 'kecamatan' => 'Bintan Pesisir', 'harga' => 16000],
            ['kabupaten' => 'Kab Bintan', 'kecamatan' => 'Bintan Timur', 'harga' => 16000],
            ['kabupaten' => 'Kab Bintan', 'kecamatan' => 'Bintan Utara', 'harga' => 16000],
            ['kabupaten' => 'Kab Bintan', 'kecamatan' => 'Gunung Kijang', 'harga' => 16000],
            ['kabupaten' => 'Kab Bintan', 'kecamatan' => 'Mantang', 'harga' => 16000],
            ['kabupaten' => 'Kab Bintan', 'kecamatan' => 'Seri Sri Kuala Lobam', 'harga' => 16000],
            ['kabupaten' => 'Kab Bintan', 'kecamatan' => 'Tambelan', 'harga' => 16000],
            ['kabupaten' => 'Kab Bintan', 'kecamatan' => 'Teluk Bintan', 'harga' => 16000],
            ['kabupaten' => 'Kab Bintan', 'kecamatan' => 'Teluk Sebong', 'harga' => 16000],
            ['kabupaten' => 'Kab Bintan', 'kecamatan' => 'Toapaya', 'harga' => 16000],

            // Kab Karimun
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Belat', 'harga' => 31000],
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Buru', 'harga' => 31000],
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Durai', 'harga' => 31000],
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Karimun', 'harga' => 31000],
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Kundur', 'harga' => 31000],
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Kundur Barat', 'harga' => 31000],
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Kundur Utara', 'harga' => 31000],
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Meral', 'harga' => 31000],
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Merat Barat', 'harga' => 31000],
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Moro', 'harga' => 31000],
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Tebing', 'harga' => 31000],
            ['kabupaten' => 'Kab Karimun', 'kecamatan' => 'Ungar', 'harga' => 31000],

            // Kab Kepulauan Anambas
            ['kabupaten' => 'Kab Kepulauan Anambas', 'kecamatan' => 'Jemaja', 'harga' => 38000],
            ['kabupaten' => 'Kab Kepulauan Anambas', 'kecamatan' => 'Jemaja Barat', 'harga' => 38000],
            ['kabupaten' => 'Kab Kepulauan Anambas', 'kecamatan' => 'Jemaja Timur', 'harga' => 38000],
            ['kabupaten' => 'Kab Kepulauan Anambas', 'kecamatan' => 'Palmatak', 'harga' => 38000],
            ['kabupaten' => 'Kab Kepulauan Anambas', 'kecamatan' => 'Siantan Selatan', 'harga' => 38000],
            ['kabupaten' => 'Kab Kepulauan Anambas', 'kecamatan' => 'Siantan Tengah', 'harga' => 38000],
            ['kabupaten' => 'Kab Kepulauan Anambas', 'kecamatan' => 'Siantan Timur', 'harga' => 38000],
            ['kabupaten' => 'Kab Kepulauan Anambas', 'kecamatan' => 'Siantan Utara', 'harga' => 38000],
            ['kabupaten' => 'Kab Kepulauan Anambas', 'kecamatan' => 'Siantan-Ana', 'harga' => 38000],

            // Kab Lingga
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Bakung Serumpun', 'harga' => 34000],
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Katang Bidare', 'harga' => 34000],
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Kepulauan Posek', 'harga' => 34000],
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Lingga', 'harga' => 34000],
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Lingga Timur', 'harga' => 34000],
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Lingga Utara', 'harga' => 34000],
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Selayar', 'harga' => 34000],
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Senayang', 'harga' => 34000],
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Singkep', 'harga' => 34000],
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Singkep Barat', 'harga' => 34000],
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Singkep Pesisir', 'harga' => 34000],
            ['kabupaten' => 'Kab Lingga', 'kecamatan' => 'Singkep Selatan', 'harga' => 34000],

            // Kab Natuna
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Bunguran Barat', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Bunguran Batubi', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Bungaran Selatan', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Bungaran Tengah', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Bunguran Timur', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Bunguran Timur Laut', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Bungaran Utara', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Midau', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Pulau Laut', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Pulau Tiga Barat', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Pulau Tiga-Rai', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Serasan', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Serasan Timur', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Suak Midai', 'harga' => 17000],
            ['kabupaten' => 'Kab Natuna', 'kecamatan' => 'Subi', 'harga' => 17000],

            // Kota Batam
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Batam Kota', 'harga' => 15500],
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Batu Aji', 'harga' => 15500],
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Batu Ampar-Bth', 'harga' => 15500],
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Di belakang Padang', 'harga' => 15500],
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Bengkong', 'harga' => 15500],
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Bulang', 'harga' => 15500],
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Galang-Bth', 'harga' => 15500],
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Lubuk Baja', 'harga' => 15500],
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Nongsa', 'harga' => 15500],
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Sagulung', 'harga' => 15500],
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Sekupang', 'harga' => 15500],
            ['kabupaten' => 'Kota Batam', 'kecamatan' => 'Sungai Beduk', 'harga' => 15500],

            // Kota Tanjung Pinang
            ['kabupaten' => 'Kota Tanjung Pinang', 'kecamatan' => 'Bukit Bestari', 'harga' => 15000],
            ['kabupaten' => 'Kota Tanjung Pinang', 'kecamatan' => 'Tanjung Pinang Barat', 'harga' => 15000],
            ['kabupaten' => 'Kota Tanjung Pinang', 'kecamatan' => 'Tanjung Pinang Kota', 'harga' => 15000],
            ['kabupaten' => 'Kota Tanjung Pinang', 'kecamatan' => 'Tanjung Pinang Timur', 'harga' => 15000],
        ];

        foreach ($data as $item) {
            Ongkir::create($item);
        }
    }
}
