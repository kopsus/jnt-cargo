<x-layout>
    {{-- hero --}}
    <section id="home" class="relative overflow-hidden bg-white py-16 md:py-24 px-4 md:px-8">
        <div class="absolute top-0 right-0 w-full md:w-[53%] h-full bg-cover bg-center bg-no-repeat hidden md:block"
            style="background-image: url('{{ asset('images/hero.png') }}');">
        </div>
        <div
            class="w-full max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-12 relative z-10">

            <!-- BAGIAN KIRI: Teks & Tombol -->
            <div class="flex flex-col items-start gap-6 w-full md:w-3/5 lg:w-1/2">

                <!-- Headline -->
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                    Kirim Kargo, Motor & <br class="hidden md:block">
                    Dokumen Lebih Mudah <br class="hidden md:block">
                    <span class="text-primary">dari Jogja ke Seluruh <br class="hidden md:block"> Indonesia</span>
                </h1>

                <!-- Deskripsi -->
                <p class="text-gray-600 font-medium text-base md:text-lg max-w-lg leading-relaxed">
                    Solusi pengiriman terpercaya untuk kebutuhan bisnis maupun pribadi. Barang besar, motor, dokumen
                    penting, semua bisa kami kirim dengan aman dan cepat.
                </p>

                <!-- Tombol Aksi (CTA) -->
                <div class="flex flex-col sm:flex-row items-center gap-4 mt-2 w-full sm:w-auto">
                    <a href="/cek-ongkir"
                        class="w-full sm:w-auto bg-primary hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg flex items-center justify-center gap-2 shadow-lg transition transform hover:-translate-y-1">
                        <i class="fa-solid fa-calculator text-lg"></i> Cek Tarif Sekarang
                    </a>
                    <a href="https://wa.me/6282147259393" target="_blank"
                        class="w-full sm:w-auto border-2 border-primary text-primary hover:bg-primary/10 font-bold py-3 px-6 rounded-lg flex items-center justify-center gap-2 transition transform hover:-translate-y-1">
                        <i class="fa-brands fa-whatsapp text-xl"></i> Chat via WhatsApp
                    </a>
                </div>

                <!-- 4 Poin Keunggulan -->
                <div
                    class="grid grid-cols-2 md:flex md:flex-wrap items-center gap-4 md:gap-6 mt-6 md:mt-8 pt-4 border-t border-gray-100 w-full">
                    <div class="flex items-center gap-2 text-sm font-semibold text-gray-700">
                        <i class="fa-solid fa-shield-halved text-primary"></i> Aman & Terpercaya
                    </div>
                    <div class="flex items-center gap-2 text-sm font-semibold text-gray-700">
                        <i class="fa-solid fa-circle-nodes text-primary"></i> Tarif Kompetitif
                    </div>
                    <div class="flex items-center gap-2 text-sm font-semibold text-gray-700">
                        <i class="fa-solid fa-location-crosshairs text-primary"></i> Tracking Real Time
                    </div>
                    <div class="flex items-center gap-2 text-sm font-semibold text-gray-700">
                        <i class="fa-solid fa-truck-pickup text-primary"></i> Layanan Pick Up
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- end hero --}}

    {{-- kenapa memilih --}}
    <section id="kenapa-kami" class="py-12 md:py-20 px-4 md:px-6 bg-gray-50">
        <div class="w-full max-w-7xl mx-auto">
            <div class="text-center uppercase mb-10">
                <p class="text-primary text-sm font-bold tracking-wide">Kenapa Memilih</p>
                <p class="text-2xl md:text-4xl font-extrabold text-gray-900">J&T Cargo Jogja?</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <div class="bg-white flex flex-col justify-center items-center text-center p-5 shadow-sm rounded-2xl">
                    <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-clock text-primary"></i>
                    </div>
                    <p class="font-bold mt-3 text-sm">Cepat</p>
                    <p class="text-gray-500 text-xs mt-1">Pengiriman ke seluruh Indonesia dengan jaringan luas</p>
                </div>
                <div class="bg-white flex flex-col justify-center items-center text-center p-5 shadow-sm rounded-2xl">
                    <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-shield-alt text-primary"></i>
                    </div>
                    <p class="font-bold mt-3 text-sm">Aman</p>
                    <p class="text-gray-500 text-xs mt-1">Packing profesional dan penanganan sesuai standar</p>
                </div>
                <div class="bg-white flex flex-col justify-center items-center text-center p-5 shadow-sm rounded-2xl">
                    <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-sack-dollar text-primary"></i>
                    </div>
                    <p class="font-bold mt-3 text-sm">Tarif Kompetitif</p>
                    <p class="text-gray-500 text-xs mt-1">Harga lebih hemat untuk barang besar dibanding ekspedisi
                        reguler</p>
                </div>
                <div class="bg-white flex flex-col justify-center items-center text-center p-5 shadow-sm rounded-2xl">
                    <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-location-crosshairs text-primary"></i>
                    </div>
                    <p class="font-bold mt-3 text-sm">Tracking Real Time</p>
                    <p class="text-gray-500 text-xs mt-1">Pantau status kiriman kapan saja dan di mana saja</p>
                </div>
                <div class="bg-white flex flex-col justify-center items-center text-center p-5 shadow-sm rounded-2xl">
                    <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-headset text-primary"></i>
                    </div>
                    <p class="font-bold mt-3 text-sm">CS Responsif</p>
                    <p class="text-gray-500 text-xs mt-1">Konsultasi gratis sebelum pengiriman</p>
                </div>
                <div class="bg-white flex flex-col justify-center items-center text-center p-5 shadow-sm rounded-2xl">
                    <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-layer-group text-primary"></i>
                    </div>
                    <p class="font-bold mt-3 text-sm">Banyak Pilihan</p>
                    <p class="text-gray-500 text-xs mt-1">Satu tempat untuk semua kebutuhan pengiriman</p>
                </div>
            </div>
        </div>
    </section>
    {{-- end kenapa memilih --}}

    {{-- layanan kami --}}
    <section id="layanan" class="py-12 md:py-20 px-4 md:px-6 bg-white">
        <div class="w-full max-w-7xl mx-auto">
            <p class="text-2xl md:text-4xl font-extrabold text-gray-900 text-center uppercase">Layanan Kami</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">

                @php
                $layanan = [
                [
                'no' => 1,
                'title' => 'Pengiriman Kargo',
                'image' => 'https://loremflickr.com/600/400/cargo,warehouse,boxes',
                'items' => ['Mesin', 'Elektronik', 'Material Bangunan', 'Peralatan Kantor', 'Furniture', 'Produk UMKM', 'Barang Grosir', 'Peralatan Industri'],
                'button' => 'Kirim Kargo Sekarang',
                'url' => '/cek-ongkir'
                ],
                [
                'no' => 2,
                'title' => 'Kirim Motor',
                'image' => 'https://loremflickr.com/600/400/motorcycle',
                'items' => ['Motor Baru', 'Motor Bekas', 'Motor Matic', 'Motor Sport', 'Motor Touring', 'Motor Listrik'],
                'button' => 'Cek Ongkir Motor',
                'url' => '/cek-ongkir'
                ],
                [
                'no' => 3,
                'title' => 'Pengiriman Dokumen',
                'image' => 'https://loremflickr.com/600/400/documents,paperwork',
                'items' => ['Ijasah', 'Sertifikat', 'Kontrak Kerja', 'Berkas Tender', 'Dokumen Perusahaan', 'Surat Penting'],
                'button' => 'Kirim Dokumen',
                'url' => '/cek-ongkir'
                ],
                [
                'no' => 4,
                'title' => 'Barang Pindahan',
                'image' => 'https://loremflickr.com/600/400/moving,house,boxes',
                'items' => ['Rumah', 'Kos', 'Apartemen', 'Kantor', 'Gudang', 'Ruko'],
                'button' => 'Kirim Barang Pindahan',
                'url' => '/cek-ongkir'
                ],
                [
                'no' => 5,
                'title' => 'Pengiriman Mesin',
                'image' => 'https://loremflickr.com/600/400/industrial,machine',
                'items' => ['Mesin Produksi', 'Mesin Industri', 'Generator', 'Compressor', 'Mesin Pertanian'],
                'button' => 'Kirim Mesin',
                'url' => '/cek-ongkir'
                ],
                [
                'no' => 6,
                'title' => 'Pengiriman Furniture',
                'image' => 'https://loremflickr.com/600/400/furniture,sofa',
                'items' => ['Sofa', 'Lemari', 'Meja', 'Kursi', 'Kasur', 'Kitchen Set'],
                'button' => 'Kirim Furniture',
                'url' => '/cek-ongkir'
                ],
                [
                'no' => 7,
                'title' => 'Elektronik',
                'image' => 'https://loremflickr.com/600/400/electronics,appliance',
                'items' => ['TV', 'Kulkas', 'AC', 'Mesin Cuci', 'Komputer', 'Printer'],
                'button' => 'Kirim Elektronik',
                'url' => '/cek-ongkir'
                ],
                [
                'no' => 8,
                'title' => 'Material Bangunan',
                'image' => 'https://loremflickr.com/600/400/construction,building,material',
                'items' => ['Semen', 'Keramik', 'Pipa', 'Cat', 'Besi', 'Genteng'],
                'button' => 'Kirim Material',
                'url' => '/cek-ongkir'
                ],
                [
                'no' => 9,
                'title' => 'Pengiriman UMKM',
                'image' => 'https://loremflickr.com/600/400/smallbusiness,product',
                'items' => ['Fashion', 'Makanan', 'Minuman', 'Kosmetik', 'Kerajinan', 'Oleh-oleh', 'Frozen Food'],
                'button' => 'Kirim Produk UMKM',
                'url' => '/cek-ongkir'
                ],
                [
                'no' => 10,
                'title' => 'Pengiriman Perusahaan',
                'image' => 'https://loremflickr.com/600/400/logistics,warehouse',
                'items' => ['Distribusi Cabang', 'Pengiriman Proyek', 'Logistik Gudang', 'Pengiriman Sparepart', 'Pengiriman Mesin'],
                'button' => 'Kirim untuk Perusahaan',
                'url' => '/cek-ongkir'
                ],
                ];
                @endphp

                @foreach ($layanan as $item)
                <div class="border border-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition flex flex-col">
                    <div class="h-36 w-full overflow-hidden">
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" loading="lazy"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 flex flex-col flex-1">
                        <p class="text-primary font-extrabold uppercase text-sm mb-3">{{ $item['no'] }}.
                            {{ $item['title'] }}
                        </p>
                        <ul class="grid grid-cols-2 gap-x-2 gap-y-1 text-xs text-gray-600 mb-4 flex-1">
                            @foreach ($item['items'] as $point)
                            <li class="flex items-start gap-1">
                                <span class="mt-1 w-1 h-1 rounded-full bg-primary shrink-0"></span>
                                {{ $point }}
                            </li>
                            @endforeach
                        </ul>
                        <a href="{{ url($item['url']) }}"
                            class="mt-auto bg-primary hover:bg-green-700 text-white text-xs font-bold text-center py-2.5 rounded-lg transition">
                            {{ $item['button'] }}
                        </a>
                    </div>
                </div>
                @endforeach

                <!-- CTA: Butuh Layanan Lain -->
                <div class="bg-primary rounded-2xl overflow-hidden relative flex flex-col justify-center p-6 sm:col-span-2">
                    <div class="relative z-10 text-white space-y-3 max-w-[60%]">
                        <p class="text-xl font-extrabold">Butuh Layanan Lain?</p>
                        <p class="text-sm text-white/90">Kami siap bantu kebutuhan pengiriman Anda!</p>
                        <a href="https://wa.me/6282147259393" target="_blank"
                            class="inline-flex items-center gap-2 bg-white text-primary font-bold text-sm py-2.5 px-4 rounded-lg mt-2">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Konsultasi Gratis
                        </a>
                    </div>
                    <img src="{{ asset('images/person-aboutus.png') }}" alt="Konsultasi Gratis"
                        class="absolute right-0 bottom-0 h-full object-contain hidden sm:block">
                </div>
            </div>
        </div>
    </section>
    {{-- end layanan kami --}}

    {{-- berbagai produk --}}
    <section id="produk" class="py-12 md:py-20 px-4 md:px-6 bg-gray-50">
        <div class="w-full max-w-7xl mx-auto">
            <p class="text-2xl md:text-4xl font-extrabold text-gray-900 text-center uppercase">Berbagai Produk Yang
                Bisa Dikirim</p>

            <div class="grid grid-cols-3 sm:grid-cols-5 lg:grid-cols-10 gap-3 mt-10">
                @php
                $produk = [
                ['fa-motorcycle', 'Motor'], ['fa-bicycle', 'Sepeda'], ['fa-tv', 'TV'], ['fa-wind', 'AC'],
                ['fa-couch', 'Sofa'], ['fa-box-archive', 'Lemari'], ['fa-bed', 'Kasur'], ['fa-snowflake', 'Kulkas'],
                ['fa-gear', 'Mesin'], ['fa-computer', 'Komputer'],
                ['fa-print', 'Printer'], ['fa-table', 'Meja'], ['fa-chair', 'Kursi'], ['fa-store', 'Barang UMKM'],
                ['fa-boxes-stacked', 'Produk Grosir'], ['fa-music', 'Alat Musik'], ['fa-utensils', 'Peralatan Catering'],
                ['fa-champagne-glasses', 'Peralatan Event'], ['fa-screwdriver-wrench', 'Sparepart'], ['fa-file-lines', 'Dokumen'],
                ['fa-industry', 'Barang Industri'], ['fa-tractor', 'Alat Pertanian'], ['fa-truck-moving', 'Barang Pindahan'],
                ['fa-box', 'Paket Besar'], ['fa-weight-hanging', 'Paket Berat'], ['fa-shop', 'Barang Retail'],
                ];
                @endphp

                @foreach ($produk as [$icon, $label])
                <div
                    class="bg-white rounded-xl border border-gray-100 shadow-sm flex flex-col items-center justify-center text-center p-3 gap-2 hover:shadow-md transition">
                    <i class="fa-solid {{ $icon }} text-primary text-lg"></i>
                    <p class="text-[11px] font-semibold text-gray-700 leading-tight">{{ $label }}</p>
                </div>
                @endforeach

                <!-- CTA: produk tidak ditemukan -->
                <div
                    class="col-span-3 sm:col-span-5 lg:col-span-4 bg-primary rounded-xl relative overflow-hidden flex items-center justify-between gap-3 p-4">
                    <div class="text-white relative z-10">
                        <p class="font-bold text-sm md:text-base">Tidak menemukan produk Anda?</p>
                        <p class="text-xs md:text-sm text-white/90 mt-1">Hubungi kami, kami siap membantu.</p>
                        <a href="https://wa.me/6282147259393" target="_blank"
                            class="inline-flex items-center gap-2 bg-white text-primary font-bold text-xs py-2 px-3 rounded-lg mt-3">
                            <i class="fa-brands fa-whatsapp"></i> Chat via WhatsApp
                        </a>
                    </div>
                    <i class="fa-solid fa-truck-fast text-white/20 text-6xl hidden md:block"></i>
                </div>
            </div>
        </div>
    </section>
    {{-- end berbagai produk --}}

    {{-- cara pengiriman --}}
    <section id="tracking" class="py-12 md:py-20 px-4 md:px-6 bg-white">
        <div class="w-full max-w-7xl mx-auto">
            <p class="text-2xl md:text-4xl font-extrabold text-gray-900 text-center uppercase mb-10">Cara Pengiriman
            </p>

            @php
            $steps = [
            ['fa-headset', 'Hubungi Admin'],
            ['fa-comments', 'Konsultasi Barang'],
            ['fa-calculator', 'Cek Tarif'],
            ['fa-truck', 'Jemput / Antar ke Drop Point'],
            ['fa-box', 'Packing (Opsional)'],
            ['fa-truck-fast', 'Pengiriman'],
            ['fa-location-dot', 'Tracking'],
            ['fa-circle-check', 'Barang Sampai'],
            ];
            $stepsCount = count($steps);
            @endphp

            <div class="flex flex-col md:flex-row items-center md:items-start justify-between gap-6 md:gap-2">
                @foreach ($steps as $index => [$icon, $label])
                <div class="flex md:flex-1 flex-row md:flex-col items-center gap-4 md:gap-3 w-full md:w-auto">
                    <div
                        class="w-14 h-14 shrink-0 rounded-full border-2 border-primary text-primary flex items-center justify-center">
                        <i class="fa-solid {{ $icon }} text-xl"></i>
                    </div>
                    <p class="text-sm font-semibold text-gray-700 text-left md:text-center">{{ $label }}</p>
                </div>
                @if (!$loop->last)
                <i class="fa-solid fa-arrow-right md:fa-arrow-right text-primary/40 hidden md:block mt-5"></i>
                @endif
                @endforeach
            </div>
        </div>
    </section>
    {{-- end cara pengiriman --}}

    {{-- area & tujuan --}}
    <section id="area" class="py-12 md:py-20 px-4 md:px-6 bg-gray-50">
        <div class="w-full max-w-7xl mx-auto grid md:grid-cols-3 gap-6">

            <div class="bg-white rounded-2xl shadow-sm p-6">
                <p class="font-extrabold text-gray-900 uppercase mb-4">Area Penjemputan Jogja</p>
                <div class="h-40 rounded-xl bg-primary/5 flex items-center justify-center mb-4">
                    <i class="fa-solid fa-map-location-dot text-primary text-4xl"></i>
                </div>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-primary text-xs"></i>
                        Kota Yogyakarta</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-primary text-xs"></i>
                        Sleman</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-primary text-xs"></i>
                        Bantul</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-primary text-xs"></i>
                        Kulon Progo</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-primary text-xs"></i>
                        Gunungkidul</li>
                </ul>
                <p class="text-xs text-gray-400 mt-4">Layanan pick up untuk area tertentu.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6">
                <p class="font-extrabold text-gray-900 uppercase mb-4">Tujuan Pengiriman Seluruh Indonesia</p>
                <div class="h-40 rounded-xl bg-primary/5 flex items-center justify-center mb-4">
                    <i class="fa-solid fa-earth-asia text-primary text-4xl"></i>
                </div>
                <div class="grid grid-cols-2 gap-x-4 gap-y-2 text-sm text-gray-600">
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Aceh</li>
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Medan</li>
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Pekanbaru</li>
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Palembang</li>
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Jakarta</li>
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Bandung</li>
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Semarang</li>
                    </ul>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Solo</li>
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Surabaya</li>
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Malang</li>
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Bali</li>
                        <li class="flex items-center gap-2"><i
                                class="fa-solid fa-location-dot text-primary text-xs"></i> Makassar</li>
                        <li class="flex items-center gap-2 text-gray-400"><i
                                class="fa-solid fa-ellipsis text-primary text-xs"></i> dan ratusan kota lainnya</li>
                    </ul>
                </div>
            </div>

            <div class="bg-primary rounded-2xl shadow-sm p-6 text-white">
                <p class="font-extrabold uppercase mb-4">Kenapa Bisnis Memilih J&T Cargo?</p>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-secondary mt-0.5"></i> Tarif
                        hemat untuk volume besar</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-secondary mt-0.5"></i>
                        Pengiriman rutin</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-secondary mt-0.5"></i>
                        Mendukung reseller & distributor</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-secondary mt-0.5"></i> Cocok
                        untuk supplier & proyek</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-secondary mt-0.5"></i> Bisa
                        kirim pallet atau partai besar</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-secondary mt-0.5"></i>
                        Tracking online</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-secondary mt-0.5"></i>
                        Customer service profesional</li>
                </ul>
            </div>
        </div>
    </section>
    {{-- end area & tujuan --}}

    {{-- testimoni --}}
    <section class="py-12 md:py-20 px-4 md:px-6 bg-white">
        <div class="w-full max-w-5xl mx-auto">
            <p class="text-2xl md:text-4xl font-extrabold text-gray-900 text-center uppercase mb-10">Apa Kata Mereka
            </p>

            <div class="grid md:grid-cols-3 gap-6">
                @php
                $testimoni = [
                ['Andi', 'Owner Pabrik', 'Sekarang kirim mesin jadi lebih hemat.'],
                ['Rudi', 'Pengirim Motor', 'Motor sampai dengan aman dan packing rapi.'],
                ['Siti', 'Owner UMKM', 'Barang UMKM kami dikirim setiap minggu tanpa kendala.'],
                ];
                @endphp
                @foreach ($testimoni as [$name, $role, $quote])
                <div class="bg-gray-50 rounded-2xl p-6 space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center">
                            <i class="fa-solid fa-user text-primary"></i>
                        </div>
                        <div>
                            <p class="font-bold text-sm text-gray-900">{{ $name }}</p>
                            <p class="text-xs text-gray-500">{{ $role }}</p>
                        </div>
                    </div>
                    <div class="text-secondary text-sm">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-sm text-gray-600 italic">"{{ $quote }}"</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- end testimoni --}}

    {{-- faq --}}
    <section id="faq" class="py-12 md:py-20 px-4 md:px-6 bg-gray-50">
        <div class="w-full max-w-7xl mx-auto">
            <p class="text-2xl md:text-4xl font-extrabold text-gray-900 text-center uppercase mb-10">Pertanyaan Yang
                Sering Ditanyakan</p>

            <div class="grid lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 grid md:grid-cols-2 gap-4">
                    @php
                    $faqs = [
                    ['Berapa maksimal berat barang yang bisa dikirim?', 'Kami melayani pengiriman untuk barang besar maupun berat, mulai dari beberapa kilogram hingga muatan dalam skala pallet/partai besar. Hubungi kami untuk konsultasi detail.'],
                    ['Bisa dijemput?', 'Bisa. Kami menyediakan layanan pick up untuk area Yogyakarta, Sleman, Bantul, Kulon Progo, dan Gunungkidul.'],
                    ['Apakah bisa kirim motor?', 'Bisa. Kami melayani pengiriman motor baru, bekas, matic, sport, hingga motor touring ke seluruh Indonesia.'],
                    ['Apakah ada tracking?', 'Ada. Anda bisa memantau status kiriman secara real time kapan saja dan di mana saja.'],
                    ['Apakah barang tersedia packing?', 'Tersedia layanan packing profesional dan sesuai standar untuk menjaga keamanan barang Anda.'],
                    ['Apakah barang diasuransikan?', 'Barang Anda ditangani dengan proteksi maksimal, silakan konsultasikan opsi asuransi dengan tim kami.'],
                    ];
                    @endphp
                    @foreach ($faqs as [$question, $answer])
                    <details class="bg-white rounded-xl p-4 group">
                        <summary
                            class="flex items-center justify-between cursor-pointer list-none font-semibold text-sm text-gray-800">
                            {{ $question }}
                            <i class="fa-solid fa-chevron-down text-primary text-xs transition group-open:rotate-180"></i>
                        </summary>
                        <p class="text-xs text-gray-500 mt-3 leading-relaxed">{{ $answer }}</p>
                    </details>
                    @endforeach
                </div>

                <div class="bg-primary rounded-2xl p-6 flex flex-col justify-center text-white relative overflow-hidden">
                    <div class="relative z-10 space-y-3">
                        <p class="font-extrabold text-lg">Masih ada pertanyaan?</p>
                        <p class="text-sm text-white/90">Tim kami siap membantu Anda.</p>
                        <a href="https://wa.me/6282147259393" target="_blank"
                            class="inline-flex items-center gap-2 bg-white text-primary font-bold text-sm py-2.5 px-4 rounded-lg mt-2">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Chat via WhatsApp
                        </a>
                    </div>
                    <img src="{{ asset('images/cs-faq.png') }}" alt="Masih ada pertanyaan"
                        class="absolute right-0 bottom-0 h-full object-contain hidden sm:block opacity-90">
                </div>
            </div>
        </div>
    </section>
    {{-- end faq --}}

    {{-- bottom cta --}}
    <section id="kontak" class="bg-primary py-8 px-4 md:px-8">
        <div
            class="w-full max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 text-white">
            <div class="flex items-center gap-4">
                <i class="fa-solid fa-truck-fast text-4xl md:text-5xl text-white/80 hidden sm:block"></i>
                <div>
                    <p class="text-lg md:text-2xl font-extrabold">Siap Kirim Barang Besar, Motor, atau Dokumen?</p>
                    <p class="text-sm text-white/80 mt-1">Tim kami siap membantu merencanakan pengiriman yang aman
                        dan solusi pengiriman yang sesuai kebutuhan Anda.</p>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0">
                <a href="/cek-ongkir"
                    class="w-full sm:w-auto text-center bg-white text-primary font-bold py-2.5 px-5 rounded-lg hover:bg-gray-100 transition">
                    Cek Tarif Pengiriman
                </a>
                <a href="https://wa.me/6282147259393" target="_blank"
                    class="w-full sm:w-auto text-center border-2 border-white text-white font-bold py-2.5 px-5 rounded-lg hover:bg-white/10 transition">
                    Chat Admin via WhatsApp
                </a>
                <a href="/minta-penjemputan"
                    class="w-full sm:w-auto text-center border-2 border-white text-white font-bold py-2.5 px-5 rounded-lg hover:bg-white/10 transition">
                    Minta Penjemputan
                </a>
            </div>
        </div>
    </section>
    {{-- end bottom cta --}}
</x-layout>