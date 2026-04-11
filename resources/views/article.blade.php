<x-layout>
    {{-- Semua kode di dalam tag ini akan otomatis masuk ke bagian {{ $slot }} di layout utama --}}
    <section class="py-12 md:py-20 px-6">
        <div class="w-full max-w-7xl mx-auto space-y-8 md:space-y-16">
            <p class="text-3xl md:text-5xl text-center font-bold">Artikel</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse ($articles as $article)
                    <a href="/article/{{ $article->slug }}"
                        class="bg-white border border-gray-200 shadow-sm rounded-2xl p-5 space-y-3 hover:shadow-xl hover:-translate-y-1 transition duration-300 cursor-pointer flex flex-col h-full">

                        <div class="w-full h-52 bg-gray-100 rounded-xl overflow-hidden relative">
                            @if ($article->thumbnail)
                                <img src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->title }}"
                                    class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-gray-400 font-medium">
                                    Tanpa Gambar</div>
                            @endif

                            <span
                                class="absolute top-3 left-3 bg-secondary text-primary text-xs font-bold px-3 py-1 rounded-full shadow">
                                {{ $article->category }}
                            </span>
                        </div>

                        <p
                            class="text-2xl font-bold text-gray-800 hover:text-primary transition leading-tight mt-2 line-clamp-2">
                            {{ $article->title }}
                        </p>

                        <p class="text-gray-600 text-sm leading-relaxed">
                            {{ Str::limit(strip_tags($article->content), 120) }}
                        </p>

                        <div class="grow"></div>

                        <p class="text-sm text-gray-500 pt-4 border-t border-gray-100 mt-4">
                            <i class="fa-regular fa-calendar mr-1"></i> {{ $article->created_at->format('d M Y') }}
                        </p>
                    </a>
                @empty
                    <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-20">
                        <i class="fa-regular fa-folder-open text-6xl text-gray-300 mb-4"></i>
                        <p class="text-gray-500 text-xl font-medium">Belum ada artikel yang dipublikasikan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layout>
