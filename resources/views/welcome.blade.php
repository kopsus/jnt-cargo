<x-layout>
    {{-- hero --}}
    <section id="home" class="relative overflow-hidden bg-cover bg-center py-12 md:py-20 px-4 md:px-6"
        style="background-image: url('{{ asset('images/bg-net.jpg') }}')">

        <div class="absolute top-0 left-0 w-full h-full bg-white/80"></div>

        <div
            class="absolute bottom-0 right-0 w-full h-[45%] md:h-full md:top-0 md:w-1/2 bg-primary rounded-t-[70px] md:rounded-t-none md:rounded-l-full z-0">
        </div>

        <div class="w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-8 relative z-10">

            <div class="flex flex-col items-start gap-4 text-primary">
                <p class="font-bold tracking-wide text-sm md:text-base">Pengiriman Reguler Dari Jogja ke Seluruh
                    Indonesia</p>
                <div class="flex flex-col gap-2">
                    <p class="text-3xl md:text-5xl font-extrabold leading-tight">
                        Spesial Ramadhan <br>
                        Kirim Motor & Paket Besar <br>
                        Murah, Aman & Cepat!
                    </p>
                    <p class="font-medium text-gray-800 mt-2 max-w-md text-sm md:text-base">
                        Kirim motor antar kota & antar pulau dengan harga lebih hemat!
                        Nikmati voucher diskon spesial untuk setiap pengiriman motor melalui layanan J&T Cargo Jogja.
                    </p>
                </div>

                <button
                    class="mt-2 md:mt-4 bg-[#25D366] hover:bg-green-600 transition text-white font-bold py-3 px-6 rounded-full flex items-center gap-2 shadow-lg text-sm md:text-base">
                    <i class="fa-brands fa-whatsapp text-xl md:text-2xl"></i>
                    Hubungi Kami
                </button>
            </div>

            <div class="relative flex justify-center items-center w-full max-w-xs md:max-w-md mx-auto mt-8 md:mt-0">

                <div class="swiper motorSlider w-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('images/motor.png') }}" alt="Motor J&T 1"
                                class="w-full h-full drop-shadow-2xl object-contain">
                        </div>

                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('images/motor2.png') }}" alt="Motor J&T 2"
                                class="w-full h-full drop-shadow-2xl object-contain">
                        </div>

                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('images/motor3.png') }}" alt="Motor J&T 2"
                                class="w-full h-full drop-shadow-2xl object-contain">
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
    {{-- end hero --}}

    {{-- cek ongkos --}}
    <section id="cek-ongkir" class="py-12 md:py-20 px-4 md:px-6 bg-primary">
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
    </section>
    {{-- end cek ongkos --}}

    {{-- specialist --}}
    <section class="relative py-20 px-6 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/bg-specialist.png') }}')">
        <div class="absolute top-0 left-0 w-full h-full bg-white/70"></div>
        <div class="grid md:grid-cols-2 gap-10 relative w-full max-w-7xl mx-auto items-center">
            <div class="text-primary space-y-2">
                <p class="text-3xl md:text-5xl font-bold leading-tight">Spesialis Pengiriman Motor</p>
                <div class="font-medium">
                    <p>Kami fokus pada pengiriman kendaraan roda dua, sehingga proses handling lebih terstandarisasi dan
                        aman.</p>
                    <p>Mulai dari motor matic, sport, klasik, hingga motor listrik semua ditangani dengan prosedur
                        khusus sehingga pengiriman lebih aman.</p>
                </div>
            </div>
            <img src="/images/specialist1.jpg" alt="" class="rounded-4xl" />
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
                <div class="relative rounded-xl overflow-hidden h-52 md:h-full">
                    <img src="/images/service1.jpg" alt="" class="w-full h-full object-cover block" />
                    <p class="absolute left-5 bottom-5 text-white text-3xl md:text-5xl font-bold">Kirim Motor</p>
                </div>
                <div class="relative rounded-xl overflow-hidden h-52 md:h-full">
                    <img src="/images/service2.png" alt="" class="w-full h-full object-cover block" />
                    <p class="absolute left-5 bottom-5 text-white text-3xl md:text-5xl font-bold">Cargo
                        Besar</p>
                </div>
                <div class="relative rounded-xl overflow-hidden h-52 md:h-full">
                    <img src="/images/service3.png" alt="" class="w-full h-full object-cover block" />
                    <p class="absolute left-5 bottom-5 text-white text-3xl md:text-5xl font-bold">1 Day
                        Service</p>
                </div>

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
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
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
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
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