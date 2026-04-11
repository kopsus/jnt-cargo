<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'J&T Cargo') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    {{-- header --}}
    <div class="bg-primary py-3 md:py-4">
        <div
            class="w-full max-w-7xl px-4 md:px-6 mx-auto flex flex-col md:flex-row items-center justify-between gap-3 md:gap-0">
            <p class="text-white text-sm md:text-base text-center">Hubungi Sekarang Untuk Diskon 30% Spesial Ramadhan!
            </p>

            <div class="flex items-center gap-4">
                <button
                    class="bg-secondary text-primary font-bold py-1.5 px-3 md:py-2 md:px-4 rounded text-sm md:text-base">Klaim
                    Sekarang</button>
                <p class="text-secondary font-bold text-xl md:text-3xl">00:09:21</p>
            </div>
        </div>
    </div>

    <header class="bg-white py-4 shadow z-50 relative">
        <div class="w-full max-w-7xl px-4 md:px-6 mx-auto flex items-center justify-between">

            <div class="w-32 md:w-auto h-10 md:h-16">
                <img src="/images/logo.png" alt="Logo" class="w-full h-full object-contain">
            </div>

            <nav class="hidden lg:block">
                <ul class="flex space-x-8">
                    <li>
                        <a href="/" class="nav-link hover:text-primary transition" data-target="home">Home</a>
                    </li>
                    <li>
                        <a href="/#layanan" class="nav-link hover:text-primary transition"
                            data-target="layanan">Layanan</a>
                    </li>
                    <li>
                        <a href="/#tentang-kami" class="nav-link hover:text-primary transition"
                            data-target="tentang-kami">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="/#cek-ongkir" class="nav-link hover:text-primary transition"
                            data-target="cek-ongkir">Cek Ongkir</a>
                    </li>

                    <li>
                        <a href="/article"
                            class="{{ request()->is('article') ? 'font-bold text-primary' : 'hover:text-primary transition' }}">Artikel</a>
                    </li>
                </ul>
            </nav>

            <button
                class="hidden lg:flex bg-[#25D366] hover:bg-green-600 transition text-white font-bold py-3 px-6 rounded-full items-center gap-2 shadow-lg">
                <i class="fa-brands fa-whatsapp text-2xl"></i>
                Hubungi Kami
            </button>

            <button id="btn-mobile-menu" class="block lg:hidden text-primary text-2xl focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <div id="mobile-menu"
            class="hidden absolute top-full left-0 w-full bg-white shadow-xl border-t border-gray-100">
            <nav class="flex flex-col px-6 py-4 space-y-4">
                <a href="/"
                    class="{{ request()->is('/') ? 'font-bold text-primary' : 'text-gray-700 hover:text-primary transition' }}">
                    Home
                </a>
                <a href="#" class="text-gray-700 hover:text-primary border-b border-gray-100 pb-2">Layanan</a>
                <a href="#" class="text-gray-700 hover:text-primary border-b border-gray-100 pb-2">Tentang
                    Kami</a>
                <a href="/article"
                    class="{{ request()->is('article') ? 'font-bold text-primary' : 'text-gray-700 hover:text-primary transition' }}">
                    Artikel
                </a>
                <a href="#" class="text-gray-700 hover:text-primary border-b border-gray-100 pb-2">Cek Ongkir</a>

                <button
                    class="mt-2 w-full bg-[#25D366] hover:bg-green-600 transition text-white font-bold py-3 px-6 rounded-full flex justify-center items-center gap-2 shadow-lg">
                    <i class="fa-brands fa-whatsapp text-2xl"></i>
                    Hubungi Kami
                </button>
            </nav>
        </div>
    </header>
    {{-- end header --}}

    <main>
        {{ $slot }}
    </main>

    {{-- footer --}}
    <footer class="bg-footer py-10 px-6">
        <div class="w-full max-w-7xl mx-auto text-center text-white grid md:grid-cols-3 lg:grid-cols-4 gap-10">
            <div class="lg:col-span-2 space-y-8 text-start">
                <img src="/images/logo-primary.png" alt="" class="w-1/2">
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
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Layanan</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Artikel</a></li>
                    <li><a href="#">Cek Ongkir</a></li>
                </ul>
            </div>
            <div class="col-span-1 h-full w-full rounded-xl overflow-hidden shadow-lg border border-gray-200">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126485.49891295245!2d110.315516!3d-7.778841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5840695079a7%3A0xc3ce1e4288b835e!2sJl.%20Magelang%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </footer>
    {{-- end footer --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const btnMobileMenu = document.getElementById('btn-mobile-menu');
        const mobileMenu = document.getElementById('mobile-menu');

        btnMobileMenu.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
