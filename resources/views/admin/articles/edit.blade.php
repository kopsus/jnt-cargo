<x-admin-layout>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Edit Artikel</h1>
            <a href="/admin/articles"
                class="text-gray-500 hover:text-primary transition flex items-center gap-2 font-medium">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden p-6 md:p-8">
            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-r-lg">
                    <ul class="list-disc pl-8 text-red-600 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="article-form" action="/admin/articles/{{ $article->id }}" method="POST"
                enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Judul Artikel <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}"
                            required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary">
                    </div>

                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Slug (URL) <span class="text-red-500">*</span></label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug', $article->slug) }}"
                            required readonly
                            class="w-full border border-gray-200 bg-gray-50 text-gray-500 px-4 py-2.5 rounded-lg focus:outline-none cursor-not-allowed">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Kategori <span class="text-red-500">*</span></label>
                        <select id="category" name="category" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary bg-white">
                            <option value="Activities" {{ $article->category == 'Activities' ? 'selected' : '' }}>
                                Activities</option>
                            <option value="Promo" {{ $article->category == 'Promo' ? 'selected' : '' }}>Promo</option>
                            <option value="Tips & Trik" {{ $article->category == 'Tips & Trik' ? 'selected' : '' }}>Tips
                                & Trik</option>
                            <option value="Pengumuman" {{ $article->category == 'Pengumuman' ? 'selected' : '' }}>
                                Pengumuman</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Gambar Utama Baru (Opsional)</label>
                        <input type="file" id="thumbnail" name="thumbnail" accept="image/*"
                            class="w-full border border-gray-300 px-4 py-1 rounded-lg focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-green-50 file:text-primary">
                        <p class="text-xs text-gray-500">Biarkan kosong jika tidak ingin mengubah gambar saat ini.</p>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700">Isi Artikel <span class="text-red-500">*</span></label>
                    <div class="bg-white rounded-b-lg border border-gray-300 overflow-hidden">
                        <div id="quill-editor" style="height: 400px; font-size: 16px; border: none;">
                            {!! old('content', $article->content) !!}</div>
                    </div>
                    <textarea id="content" name="content" class="hidden"></textarea>
                </div>

                <div class="pt-4 flex justify-end">
                    <button type="submit"
                        class="bg-primary hover:bg-green-700 transition text-white font-bold py-3 px-8 rounded-lg shadow-lg flex items-center gap-2">
                        <i class="fa-solid fa-save"></i> Perbarui Artikel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <script>
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');

        titleInput.addEventListener('keyup', function() {
            let titleText = titleInput.value;
            let slugText = titleText.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
            slugInput.value = slugText;
        });

        const quill = new Quill('#quill-editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, 3, false]
                    }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    ['link', 'image', 'video'],
                    ['clean']
                ]
            }
        });

        const form = document.getElementById('article-form');
        const contentInput = document.getElementById('content');

        form.addEventListener('submit', function(e) {
            const htmlContent = quill.root.innerHTML;
            if (htmlContent === '<p><br></p>') {
                contentInput.value = '';
            } else {
                contentInput.value = htmlContent;
            }
        });
    </script>
</x-admin-layout>
