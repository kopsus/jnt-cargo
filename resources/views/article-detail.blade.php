<x-layout>
    <section class="py-12 md:py-20 px-6">
        <div class="w-full max-w-4xl mx-auto space-y-8">

            <a href="/article"
                class="inline-flex items-center gap-2 text-primary hover:text-green-700 font-medium transition">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Artikel
            </a>

            <div class="space-y-4">
                <span
                    class="bg-secondary text-primary px-3 py-1 rounded-full text-sm font-bold inline-block">{{ $article->category }}</span>
                <h1 class="text-3xl md:text-5xl font-extrabold leading-tight text-gray-900">
                    {{ $article->title }}
                </h1>
                <div class="flex items-center gap-4 text-gray-500 text-sm">
                    <span><i class="fa-regular fa-calendar mr-1"></i> {{ $article->created_at->format('d M Y') }}</span>
                    <span><i class="fa-regular fa-user mr-1"></i> Admin J&T Cargo</span>
                </div>
            </div>

            @if ($article->thumbnail)
            <div class="w-full h-64 md:h-112.5 bg-gray-100 rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->title }}"
                    class="w-full h-full object-cover">
            </div>
            @endif

            <div class="text-gray-800 text-lg leading-relaxed space-y-6">
                {!! $article->content !!}
            </div>

        </div>
    </section>
</x-layout>