<x-admin-layout>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

    @if (session('success'))
        <div
            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex items-center gap-3 shadow-sm">
            <i class="fa-solid fa-circle-check text-xl"></i>
            <span class="block sm:inline font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <div class="space-y-6 max-w-5xl mx-auto pb-12">

        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Tambah Artikel Baru</h1>
            <a href="/admin/articles"
                class="text-gray-500 hover:text-primary transition flex items-center gap-2 font-medium">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden p-6 md:p-8">
            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-r-lg">
                    <div class="flex items-center">
                        <i class="fa-solid fa-circle-exclamation text-red-500 mr-3 text-lg"></i>
                        <p class="text-red-700 font-bold">Oops! Ada kesalahan pada inputanmu:</p>
                    </div>
                    <ul class="list-disc pl-8 mt-2 text-red-600 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form id="article-form" action="/admin/articles" method="POST" enctype="multipart/form-data"
                class="space-y-6">

                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="title" class="font-medium text-gray-700">Judul Artikel <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="title" name="title" placeholder="Masukkan judul..." required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                    </div>

                    <div class="space-y-2">
                        <label for="slug" class="font-medium text-gray-700">Slug (URL) <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="slug" name="slug" placeholder="otomatis-terisi-seperti-ini"
                            required readonly
                            class="w-full border border-gray-200 bg-gray-50 text-gray-500 px-4 py-2.5 rounded-lg focus:outline-none cursor-not-allowed">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="category" class="font-medium text-gray-700">Kategori <span
                                class="text-red-500">*</span></label>
                        <div
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary transition bg-white">

                            <select id="category" name="category" required class="w-full focus:outline-none">
                                <option value="">Pilih Kategori...</option>
                                <option value="Activities">Activities</option>
                                <option value="Promo">Promo</option>
                                <option value="Tips & Trik">Tips & Trik</option>
                                <option value="Pengumuman">Pengumuman</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="thumbnail" class="font-medium text-gray-700">Gambar Utama (Thumbnail)</label>
                        <input type="file" id="thumbnail" name="thumbnail" accept="image/*"
                            class="w-full border border-gray-300 px-4 py-1 rounded-lg focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-primary hover:file:bg-green-100 transition">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700">Isi Artikel <span class="text-red-500">*</span></label>

                    <div class="bg-white rounded-b-lg">
                        <div id="quill-editor" style="height: 400px; font-size: 16px;"></div>
                    </div>

                    <textarea id="content" name="content" class="hidden"></textarea>
                </div>

                <div class="pt-4 flex justify-end">
                    <button type="submit"
                        class="bg-primary hover:bg-green-700 transition text-white font-bold py-3 px-8 rounded-lg shadow-lg flex items-center gap-2">
                        <i class="fa-solid fa-save"></i> Simpan Artikel
                    </button>
                </div>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    <script>
        // 1. Script Pembuat Slug Otomatis
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');

        titleInput.addEventListener('keyup', function() {
            let titleText = titleInput.value;
            let slugText = titleText.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
            slugInput.value = slugText;
        });

        // 2. Inisialisasi Editor Quill.js
        const quill = new Quill('#quill-editor', {
            theme: 'snow',
            placeholder: 'Mulai menulis artikel yang luar biasa di sini...',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, 3, false]
                    }], // Pilihan Heading
                    ['bold', 'italic', 'underline', 'strike'], // Format Teks
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }], // List angka & titik
                    ['link', 'image', 'video'], // Link, Gambar, Video
                    ['clean'] // Tombol hapus format
                ]
            }
        });

        // 3. Script untuk menyalin isi Quill ke Textarea rahasia saat form dikirim
        const form = document.getElementById('article-form');
        const contentInput = document.getElementById('content');

        form.addEventListener('submit', function(e) {
            // Mengambil isi HTML lengkap dari editor Quill
            const htmlContent = quill.root.innerHTML;

            // Memasukkannya ke dalam textarea yang disembunyikan
            contentInput.value = htmlContent;

            // Form akan otomatis melanjutkan pengiriman ke Laravel
        });
    </script>
</x-admin-layout>
