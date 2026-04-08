<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    {{-- header --}}
    <div class="bg-primary py-4">
        <div class="w-full max-w-7xl px-6 mx-auto flex items-center justify-between">
            <p class="text-white">Hubungi Sekarang Untuk Diskon 30% Spesial Ramadhan!</p>
            <button class="bg-secondary text-primary font-bold py-2 px-4 rounded">Klaim Sekarang</button>
            <p class="text-secondary font-bold text-3xl">00:09:21</p>
        </div>
    </div>

    <header class="bg-white py-4 shadow z-50 relative">
        <div class="w-full max-w-7xl px-6 mx-auto flex items-center justify-between">
            <div class="w-auto h-16">
                <img src="/images/logo.png" alt="" class="w-full h-full black object-cover">
            </div>
            <nav>
                <ul class="flex space-x-8">
                    <li><a href="#" class="font-bold text-primary">Home</a></li>
                    <li><a href="#" class="hover:text-primary">Layanan</a></li>
                    <li><a href="#" class="hover:text-primary">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-primary">Artikel</a></li>
                    <li><a href="#" class="hover:text-primary">Cek Ongkir</a></li>
                </ul>
            </nav>
            <button
                class="mt-4 bg-[#25D366] hover:bg-green-600 transition text-white font-bold py-3 px-6 rounded-full flex items-center gap-2 shadow-lg">
                <i class="fa-brands fa-whatsapp text-2xl"></i>
                Hubungi Kami
            </button>
        </div>
    </header>
    {{-- end header --}}

    {{-- hero --}}
    <section class="relative overflow-hidden bg-cover bg-center py-20 px-6"
        style="background-image: url('{{ asset('images/bg-net.jpg') }}')">
        <div class="absolute top-0 left-0 w-full h-full bg-white/80"></div>
        <div class="absolute top-0 bottom-0 right-0 w-1/2 bg-primary rounded-l-full z-0">
        </div>
        <div class="w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 relative z-10">


            <div class="flex flex-col items-start gap-4 text-primary">
                <p class="font-bold tracking-wide">Pengiriman Reguler Dari Jogja ke Seluruh Indonesia</p>
                <div class="flex flex-col gap-2">
                    <p class="text-4xl md:text-5xl font-extrabold leading-tight">
                        Spesial Ramadhan <br>
                        Kirim Motor & Paket Besar <br>
                        Murah, Aman & Cepat!
                    </p>
                    <p class="font-medium text-gray-800 mt-2 max-w-md">
                        Kirim motor antar kota & antar pulau dengan harga lebih hemat!
                        Nikmati voucher diskon spesial untuk setiap pengiriman motor melalui layanan J&T Cargo Jogja.
                    </p>
                </div>

                <button
                    class="mt-4 bg-[#25D366] hover:bg-green-600 transition text-white font-bold py-3 px-6 rounded-full flex items-center gap-2 shadow-lg">
                    <i class="fa-brands fa-whatsapp text-2xl"></i>
                    Hubungi Kami
                </button>
            </div>

            <div class="relative flex justify-center items-center w-full max-w-md mx-auto">

                <div class="swiper motorSlider w-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('images/motor.png') }}" alt="Motor J&T 1"
                                class="w-full drop-shadow-2xl object-contain">
                        </div>

                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('images/motor2.png') }}" alt="Motor J&T 2"
                                class="w-full drop-shadow-2xl object-contain">
                        </div>

                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('images/motor.png') }}" alt="Motor J&T 3"
                                class="w-full drop-shadow-2xl object-contain">
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    {{-- end hero --}}

    {{-- cek ongkos --}}
    <section class="py-20 px-6 bg-primary">
        <div class="w-10/12 max-w-7xl mx-auto">
            <div class="text-center text-white space-y-4">
                <h2 class="text-5xl font-bold text-center">Cek Ongkos Pengiriman</h2>
                <p>Isi form berikut untuk mendapatkan penawaran harga terbaik dari kami</p>
            </div>
            <form class="grid grid-cols-2 gap-8 text-white mt-12">
                <div class="space-y-2">
                    <label class="text-xl">Kota Pengambilan</label>
                    <div class="bg-white mt-2 p-3 rounded-xl text-xl">
                        <select class="w-full text-black">
                            <option value="0">Yogyakarta</option>
                            <option value="1">Bali</option>
                            <option value="2">Jakarta</option>
                        </select>
                    </div>
                    <p>kami melayani pickup dari seluruh area jogja</p>
                </div>
                <div class="space-y-2">
                    <label class="text-xl">Nomor WhatsApp</label>
                    <input type="number" placeholder="08xx xxxx xxxx"
                        class="bg-white w-full p-3 rounded-xl text-xl text-black mt-2">
                    <p>Tim kami akan menghubungi via Whatsapp</p>
                </div>
                <div class="space-y-2">
                    <label class="text-xl">Kecamatan</label>
                    <div class="bg-white mt-2 p-3 rounded-xl text-xl">
                        <select class="w-full text-black">
                            <option value="0">Kotagede</option>
                            <option value="1">Danurejan</option>
                            <option value="2">Gedongtengen</option>
                        </select>
                    </div>

                </div>
                <div class="space-y-2">
                    <label class="text-xl">Kelurahan</label>
                    <div class="bg-white mt-2 p-3 rounded-xl text-xl">
                        <select class="w-full text-black">
                            <option value="0">Bausasran</option>
                            <option value="1">Tegalpanggung</option>
                            <option value="2">Suryatmajan</option>
                        </select>
                    </div>
                </div>
                <div class="lg:col-span-2 w-10/12 mx-auto h-0.5 bg-white"></div>
                <div class="space-y-2">
                    <label class="text-xl">Kota Tujuan</label>
                    <input type="number" placeholder="Misal : Jakarta, Surabaya, Bandung"
                        class="bg-white w-full p-3 rounded-xl text-xl text-black mt-2">
                    <p>Untuk kalkulasi biaya yang akurat</p>
                </div>
                <div class="space-y-2">
                    <label class="text-xl">Jenis Paket</label>
                    <div class="bg-white mt-2 p-3 rounded-xl text-xl">
                        <select class="w-full text-black">
                            <option value="0">Motor</option>
                            <option value="1">Laptop</option>
                            <option value="2">Baju</option>
                        </select>
                    </div>
                    <p>Pilih jenis paket anda</p>
                </div>
                <div class="space-y-2 lg:col-span-2">
                    <label class="text-xl">Alamat Detail Penerima</label>
                    <textarea type="number" placeholder="Kecamatan + Detail alamat lengkap"
                        class="bg-white w-full p-3 rounded-xl text-xl text-black mt-2" rows="4">
                    </textarea>
                    <p>Penting untuk estimasi pengiriman yang tepat</p>
                </div>
                <button class="p-3 rounded-xl col-span-2 bg-white text-primary font-bold text-3xl">Dapatkan Harga
                    Terbaik!</button>
            </form>
        </div>
    </section>
    {{-- end cek ongkos --}}

    {{-- specialist --}}
    <section class="relative py-20 px-6 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/bg-specialist.png') }}')">
        <div class="absolute top-0 left-0 w-full h-full bg-white/70"></div>
        <div class="grid grid-cols-2 gap-10 relative w-full max-w-7xl mx-auto items-center">
            <div class="text-primary space-y-2">
                <p class="text-5xl font-bold leading-tight">Spesialis Pengiriman Motor</p>
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
            <p class="text-5xl font-bold text-primary mb-12 text-center">Keunggulan Layanan Kami</p>
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white text-primary p-6 shadow rounded-xl space-y-2">
                    <div class="w-10 h-10 rounded-full bg-primary"></div>
                    <p class="text-2xl font-bold">Layanan Pickup</p>
                    <p>Tidak sempat antar barang ke gudang? Kami siap jemput langsung ke lokasi Anda!</p>
                </div>
                <div class="bg-white text-primary p-6 shadow rounded-xl space-y-2">
                    <div class="w-10 h-10 rounded-full bg-primary"></div>
                    <p class="text-2xl font-bold">Pengiriman Cepat</p>
                    <p>Dengan layanan one day service kita dapat mengirim dengan jaminan 1 hari sampai</p>
                </div>
                <div class="bg-white text-primary p-6 shadow rounded-xl space-y-2">
                    <div class="w-10 h-10 rounded-full bg-primary"></div>
                    <p class="text-2xl font-bold">Harga Murah</p>
                    <p>Pengiriman cargo termurah dengan layanan prima</p>
                </div>
            </div>
        </div>
    </section>
    {{-- end excellence --}}

    {{-- about us --}}
    <section class="relative overflow-hidden bg-cover bg-center pt-20 px-6"
        style="background-image: url('{{ asset('images/bg-net.jpg') }}')">

        <div class="absolute top-0 left-0 w-full h-full bg-white/70"></div>

        <div class="relative grid grid-cols-2 items-center gap-10">
            <div class="">
                <div class="w-full h-full bg-primary rounded-full flex items-center justify-center">
                    <img src="/images/person-aboutus.png" alt="">
                </div>
            </div>
            <div class=" text-primary space-y-6">
                <p class="text-5xl font-bold">Tentang Kami</p>
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
    <section class="py-20 px-6 bg-primary">
        <div class="w-full max-w-7xl mx-auto">
            <div class="space-y-4 text-center text-white">
                <p class="text-5xl font-bold text-center">Layanan Kami</p>
                <p>Sebagai mitra operasional J&T Cargo di area Jogjakarta dan sekitarnya, kami menangani:</p>
            </div>
            <div class="grid grid-cols-3 gap-6 mt-12">
                <div class="relative h-full">
                    <img src="/images/service1.jpg" alt="" class="w-full h-full object-cover block" />
                    <p class="absolute left-5 bottom-5 text-white text-5xl font-bold">Kirim Motor</p>
                </div>
                <div class="relative h-full">
                    <img src="/images/service2.png" alt="" class="w-full h-full object-cover block" />
                    <p class="absolute left-5 bottom-5 text-white text-5xl font-bold">Cargo
                        Besar</p>
                </div>
                <div class="relative h-full">
                    <img src="/images/service3.png" alt="" class="w-full h-full object-cover block" />
                    <p class="absolute left-5 bottom-5 text-white text-5xl font-bold">1 Day
                        Service</p>
                </div>

            </div>
        </div>
    </section>
    {{-- end services --}}

    {{-- outlet location --}}
    <section class="py-20">
        <div class="w-full max-w-7xl mx-auto">

            <p class="text-5xl font-bold text-primary text-center">Lokasi Outlet</p>
            <div class="w-9/12 mx-auto grid grid-cols-2 gap-10 mt-12">
                <div class="w-full h-full bg-primary"></div>
                <div class="space-y-6 text-primary">
                    <p class="text-3xl font-bold">PT Sudaya Logistik Indonesia</p>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-location-dot text-primary text-2xl"></i>
                        <p class="text-xl">Jl. Magelang No. 123, Yogyakarta</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-phone text-primary text-2xl"></i>
                        <p class="text-xl">Wa/Telp : 0821-3737-2800</p>
                    </div>
                    <button
                        class="mt-4 bg-[#25D366] hover:bg-green-600 transition text-white font-bold py-3 px-6 rounded-full flex items-center gap-2 shadow-lg">
                        <i class="fa-brands fa-whatsapp text-2xl"></i>
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- end outlet location --}}

    {{-- footer --}}
    <footer class="bg-primary py-10 px-6">
        <div class="w-full max-w-7xl mx-auto text-center text-white grid grid-cols-4 gap-10">
            <div class="col-span-2 space-y-8 text-start">
                <img src="/images/logo.png" alt="" class="w-1/2">
                <p>J&T Cargo Yogyakarta siap membantu Anda mengirim barang besar maupun motor dari Jogja ke seluruh
                    Indonesia dengan lebih mudah.</p>
                <div class="flex items-center gap-4">
                    <i class="fa-brands fa-instagram text-2xl"></i>
                    <i class="fa-brands fa-tiktok text-2xl"></i>
                    <i class="fa-brands fa-whatsapp text-2xl"></i>
                </div>
            </div>
            <div class="col-span-1 text-start">
                <p class="text-xl font-bold">J&T Cargo Dayalog</p>
                <ul class="space-y-2 mt-4">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Layanan</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Artikel</a></li>
                    <li><a href="#">Cek Ongkir</a></li>
                </ul>
            </div>
            <div class="col-span-1 bg-white h-full w-full">

            </div>
        </div>
    </footer>
    {{-- end footer --}}

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
</body>

</html>
