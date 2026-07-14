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
                        <i class="fa-solid fa-truck-pickup text-primary"></i> Layanan Pick Up
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- end hero --}}

    {{-- cek ongkos --}}
    {{-- <section id="cek-ongkir" class="py-12 md:py-20 px-4 md:px-6 bg-primary">
        <div class="w-full md:w-10/12 max-w-7xl mx-auto">

            <div class="text-center text-white space-y-2 md:space-y-4">
                <h2 class="text-3xl md:text-5xl font-bold text-center">Cek Ongkos Pengiriman</h2>
                <p class="text-sm md:text-base px-2">Isi form berikut untuk mendapatkan penawaran harga terbaik dari
                    kami</p>
            </div>

            <form class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 text-white mt-8 md:mt-12">

                <div class="space-y-2">
                    <label class="text-lg md:text-xl font-medium">Kota Pengambilan</label>
                    <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                        <select class="w-full text-black outline-none bg-transparent">
                            <option value="0">Yogyakarta</option>
                            <option value="1">Bali</option>
                            <option value="2">Jakarta</option>
                        </select>
                    </div>
                    <p class="text-xs md:text-sm text-gray-200">kami melayani pickup dari seluruh area jogja</p>
                </div>

                <div class="space-y-2">
                    <label class="text-lg md:text-xl font-medium">Nomor WhatsApp</label>
                    <input type="number" placeholder="08xx xxxx xxxx"
                        class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                    <p class="text-xs md:text-sm text-gray-200">Tim kami akan menghubungi via Whatsapp</p>
                </div>

                <div class="space-y-2">
                    <label class="text-lg md:text-xl font-medium">Kecamatan</label>
                    <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                        <select class="w-full text-black outline-none bg-transparent">
                            <option value="0">Kotagede</option>
                            <option value="1">Danurejan</option>
                            <option value="2">Gedongtengen</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-lg md:text-xl font-medium">Kelurahan</label>
                    <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                        <select class="w-full text-black outline-none bg-transparent">
                            <option value="0">Bausasran</option>
                            <option value="1">Tegalpanggung</option>
                            <option value="2">Suryatmajan</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 w-full md:w-10/12 mx-auto h-px md:h-0.5 bg-white/50 my-2 md:my-0">
                </div>

                <div class="space-y-2">
                    <label class="text-lg md:text-xl font-medium">Kota Tujuan</label>
                    <input type="text" placeholder="Misal : Jakarta, Surabaya, Bandung"
                        class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                    <p class="text-xs md:text-sm text-gray-200">Untuk kalkulasi biaya yang akurat</p>
                </div>

                <div class="space-y-2">
                    <label class="text-lg md:text-xl font-medium">Jenis Paket</label>
                    <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                        <select class="w-full text-black outline-none bg-transparent">
                            <option value="0">Motor</option>
                            <option value="1">Laptop</option>
                            <option value="2">Baju</option>
                        </select>
                    </div>
                    <p class="text-xs md:text-sm text-gray-200">Pilih jenis paket anda</p>
                </div>

                <div class="space-y-2 col-span-1 md:col-span-2">
                    <label class="text-lg md:text-xl font-medium">Alamat Detail Penerima</label>
                    <textarea name="" id="" cols="30" rows="4" placeholder="Kecamatan + Detail alamat lengkap"
                        class="bg-white text-black rounded-xl text-lg md:text-xl w-full p-3 outline-none mt-1 md:mt-2"></textarea>
                    <p class="text-xs md:text-sm text-gray-200">Penting untuk estimasi pengiriman yang tepat</p>
                </div>

                <button type="button"
                    class="p-4 mt-2 rounded-xl col-span-1 md:col-span-2 bg-secondary hover:bg-yellow-400 transition text-primary font-bold text-xl md:text-3xl shadow-lg">
                    Dapatkan Harga Terbaik!
                </button>
            </form>
        </div>
    </section> --}}
    {{-- end cek ongkos --}}

    {{-- specialist --}}
    <section class="py-20 px-6 bg-gray-50">
        <div class="flex flex-col md:flex-row items-center gap-5 uppercase">
            <div class="md:text-3xl font-bold text-nowrap">
                <p class="text-primary">Kenapa Memilih</p>
                <p>J&T CARGO JOGJA</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-6 gap-4">
                <div class="bg-white flex flex-col justify-center items-center text-center p-4 shadow rounded-2xl">
                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-clock text-primary"></i>
                    </div>
                    <p class="font-semibold mt-2">Cepat</p>
                    <p class="text-gray-600 text-sm">Pengiriman ke seluruh jogja dengan waktu tercepat</p>
                </div>
                <div class="bg-white flex flex-col justify-center items-center text-center p-4 shadow rounded-2xl">
                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-shield-alt text-primary"></i>
                    </div>
                    <p class="font-semibold mt-2">Aman</p>
                    <p class="text-gray-600 text-sm">Pengiriman barang dengan proteksi maksimal</p>
                </div>
                <div class="bg-white flex flex-col justify-center items-center text-center p-4 shadow rounded-2xl">
                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-tag text-primary"></i>
                    </div>
                    <p class="font-semibold mt-2">Tarif Kompetitif</p>
                    <p class="text-gray-600 text-sm">Pengiriman barang dengan tarif yang kompetitif</p>
                </div>
                <div class="bg-white flex flex-col justify-center items-center text-center p-4 shadow rounded-2xl">
                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-binoculars text-primary"></i>
                    </div>
                    <p class="font-semibold mt-2">Tracking Real Time</p>
                    <p class="text-gray-600 text-sm">Anda dapat melacak posisi paket Anda kapan saja dan di mana saja
                    </p>
                </div>
                <div class="bg-white flex flex-col justify-center items-center text-center p-4 shadow rounded-2xl">
                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-headset text-primary"></i>
                    </div>
                    <p class="font-semibold mt-2">CS Responsif</p>
                    <p class="text-gray-600 text-sm">Tim customer service kami siap membantu Anda kapan saja</p>
                </div>
                <div class="bg-white flex flex-col justify-center items-center text-center p-4 shadow rounded-2xl">
                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-clone text-primary"></i>
                    </div>
                    <p class="font-semibold mt-2">Banyak Pilihan </p>
                    <p class="text-gray-600 text-sm">Kami menawarkan berbagai opsi pengiriman untuk memenuhi kebutuhan
                        Anda</p>
                </div>
            </div>
        </div>
    </section>
    {{-- end specialist --}}

    {{-- excellence --}}
    <section class="relative py-20 px-6 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/bg-excellence.jpg') }}')">
        <div class="absolute top-0 left-0 w-full h-full bg-white/70"></div>
        <div class="relative w-full max-w-7xl mx-auto">
            <p class="text-3xl md:text-5xl font-bold text-primary mb-12 text-center">Keunggulan Layanan Kami
            </p>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white text-primary p-6 shadow rounded-xl space-y-2">
                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-truck text-primary"></i>
                    </div>
                    <p class="text-2xl font-bold">Layanan Pickup</p>
                    <p>Tidak sempat antar barang ke gudang? Kami siap jemput langsung ke lokasi Anda!</p>
                </div>
                <div class="bg-white text-primary p-6 shadow rounded-xl space-y-2">
                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-bolt text-primary"></i>
                    </div>
                    <p class="text-2xl font-bold">Pengiriman Cepat</p>
                    <p>Dengan layanan one day service kita dapat mengirim dengan jaminan 1 hari sampai</p>
                </div>
                <div class="bg-white text-primary p-6 shadow rounded-xl space-y-2">
                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-tags text-primary"></i>
                    </div>
                    <p class="text-2xl font-bold">Harga Murah</p>
                    <p>Pengiriman cargo termurah dengan layanan prima</p>
                </div>
            </div>
        </div>
    </section>
    {{-- end excellence --}}

    {{-- about us --}}
    <section id="tentang-kami" class="relative overflow-hidden bg-cover bg-center py-12 md:pt-20 md:pb-0 px-6"
        style="background-image: url('{{ asset('images/bg-net.jpg') }}')">

        <div class="absolute top-0 left-0 w-full h-full bg-white/70"></div>

        <div class="relative grid md:grid-cols-2 items-center gap-10 max-w-7xl mx-auto">
            <div class="">
                <div class="w-full h-full bg-primary rounded-full flex items-center justify-center">
                    <img src="/images/person-aboutus.png" alt="">
                </div>
            </div>
            <div class=" text-primary space-y-6">
                <p class="text-3xl md:text-5xl font-bold">Tentang Kami</p>
                <div class="space-y-4">
                    <p>Kami adalah mitra resmi J&T Cargo di wilayah Daerah Istimewa Yogyakarta, yang menyediakan layanan
                        pengiriman kargo untuk kebutuhan personal maupun bisnis.</p>
                    <p>Tidak hanya fokus pada pengiriman motor, kami juga melayani berbagai jenis pengiriman kargo
                        lainnya dengan sistem yang aman, profesional, dan harga kompetitif.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- end about us --}}

    {{-- services --}}
    <section id="layanan" class="py-12 md:py-20 px-6 bg-primary">
        <div class="w-full max-w-7xl mx-auto">
            <div class="space-y-4 text-center text-white">
                <p class="text-3xl md:text-5xl font-bold text-center">Layanan Kami</p>
                <p>Sebagai mitra operasional J&T Cargo di area Jogjakarta dan sekitarnya, kami menangani:</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6 mt-12">

                <!-- Layanan 1: Kirim Motor -->
                <a href="{{ url('/layanan/kirim-motor') }}"
                    class="block relative rounded-xl overflow-hidden h-52 md:h-full hover:scale-105 hover:shadow-2xl transition-all duration-300 cursor-pointer group">
                    <img src="/images/service1.jpg" alt="Kirim Motor" class="w-full h-full object-cover block" />
                    <!-- Efek gradient gelap opsional agar teks putih lebih terbaca -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-opacity">
                    </div>
                    <p class="absolute left-5 bottom-5 text-white text-3xl md:text-5xl font-bold">Kirim Motor</p>
                </a>

                <!-- Layanan 2: Cargo Besar -->
                <a href="{{ url('/layanan/cargo-besar') }}"
                    class="block relative rounded-xl overflow-hidden h-52 md:h-full hover:scale-105 hover:shadow-2xl transition-all duration-300 cursor-pointer group">
                    <img src="/images/service2.png" alt="Cargo Besar" class="w-full h-full object-cover block" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-opacity">
                    </div>
                    <p class="absolute left-5 bottom-5 text-white text-3xl md:text-5xl font-bold">Cargo Besar</p>
                </a>

                <!-- Layanan 3: 1 Day Service -->
                <a href="{{ url('/layanan/one-day-service') }}"
                    class="block relative rounded-xl overflow-hidden h-52 md:h-full hover:scale-105 hover:shadow-2xl transition-all duration-300 cursor-pointer group">
                    <img src="/images/service3.png" alt="1 Day Service" class="w-full h-full object-cover block" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-opacity">
                    </div>
                    <p class="absolute left-5 bottom-5 text-white text-3xl md:text-5xl font-bold">1 Day Service</p>
                </a>

            </div>
        </div>
    </section>
    {{-- end services --}}

    {{-- outlet location --}}
    <section class="py-12 px-6 md:py-20 h-full">
        <div class="w-full max-w-7xl mx-auto">

            <p class="text-3xl md:text-5xl font-bold text-primary text-center">Lokasi Outlet</p>
            <div class="grid lg:grid-cols-2 gap-8 mt-10">
                <div class="w-full space-y-4">
                    <div class="w-full h-52 lg:h-96 rounded-2xl overflow-hidden shadow-lg border border-gray-200">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8971281994645!2d110.37797839999999!3d-7.8007149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57f56ab42d0b%3A0x7300f64e0fe3214b!2sJ%26T%20Cargo%20Pakualaman!5e0!3m2!1sid!2sid!4v1776431730206!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="space-y-4 text-primary flex items-start flex-col">
                        <p class="text-xl font-semibold">Kantor Utama</p>
                        <div class="flex items-start gap-4">
                            <i class="fa-solid fa-location-dot text-primary text-xl"></i>
                            <p class="text-lg">Jl. Suryopranoto No.5D, Gunungketur, Pakualaman, Kota Yogyakarta,
                                Daerah Istimewa Yogyakarta 55111</p>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="fa-solid fa-phone text-primary text-xl"></i>
                            <p class="text-lg">Wa/Telp : 082147259393</p>
                        </div>
                        <a href="https://wa.me/6282147259393" target="_blank"
                            class="mt-4 bg-[#25D366] hover:bg-green-600 transition text-white font-bold py-3 px-6 rounded-full flex items-center gap-2 shadow-lg">
                            <i class="fa-brands fa-whatsapp text-2xl"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                <div class="w-full space-y-4">
                    <div class="w-full h-52 lg:h-96 rounded-2xl overflow-hidden shadow-lg border border-gray-200">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.7224208458047!2d110.3432938!3d-7.7129048000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5f82e51ac881%3A0x68a33dfeb847fba2!2sLion%20Parcel%20-%20Purbaya%202!5e0!3m2!1sid!2sid!4v1776431783610!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="space-y-4 text-primary items-start flex flex-col">
                        <p class="text-xl font-semibold">Kantor Cabang</p>

                        <div class="flex items-start gap-4">
                            <i class="fa-solid fa-location-dot text-primary text-xl"></i>
                            <p class="text-lg">Tikungan Jl. Purbaya, Paten, Tridadi, Kec. Sleman, Kabupaten Sleman,
                                Daerah Istimewa Yogyakarta 55511, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55111</p>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="fa-solid fa-phone text-primary text-xl"></i>
                            <p class="text-lg">Wa/Telp : 628137902309</p>
                        </div>
                        <a href="https://wa.me/628137902309" target="_blank"
                            class="mt-4 bg-[#25D366] hover:bg-green-600 transition text-white font-bold py-3 px-6 rounded-full flex items-center gap-2 shadow-lg">
                            <i class="fa-brands fa-whatsapp text-2xl"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end outlet location --}}



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".motorSlider", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            effect: "fade",
            fadeEffect: {
                crossFade: true
            }
        });
    </script>
</x-layout>
