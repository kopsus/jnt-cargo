<x-layout>
    <main class="grow max-w-4xl mx-auto w-full px-4 py-10 md:py-16 h-screen">

        <div class="text-center mb-32" style="margin-bottom: 20px;">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Lacak Kiriman Anda</h1>
            <p class="text-gray-500 mb-8">Masukkan nomor resi untuk mengetahui status paket Anda saat ini.</p>

            <form action="/cek-resi" method="GET" class="max-w-2xl mx-auto space-y-6">
                <input type="text" name="resi" value="{{ $resi }}" placeholder="Contoh: JNT12345678" required
                    class="w-full px-4 py-2 rounded-full border">
                <button type="submit"
                    class="bg-primary hover:bg-green-700 text-white font-bold px-6 py-2 rounded-full transition shadow-md flex items-center gap-2">
                    <i class="fa-solid fa-magnifying-glass"></i> Lacak
                </button>
            </form>
        </div>

        @if(isset($trackings))
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-10 max-w-2xl mx-auto">

            <h2 class="text-xl font-bold border-b pb-4 mb-6">
                Hasil Pencarian: <span class="text-primary">{{ $resi }}</span>
            </h2>

            @if($trackings->isEmpty())
            <div class="text-center py-10">
                <div class="text-gray-300 mb-4 text-6xl">
                    <i class="fa-solid fa-box-open"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-700">Resi Tidak Ditemukan</h3>
                <p class="text-gray-500 mt-2">Pastikan nomor resi yang Anda masukkan sudah benar.</p>
            </div>
            @else
            <div class="relative border-l-2 border-gray-200 ml-4 md:ml-6 mt-8 space-y-8">
                @foreach($trackings as $index => $track)
                <div class="relative pl-8 md:pl-10">
                    <div class="absolute w-5 h-5 rounded-full border-4 border-white -left-2.75 top-1 shadow-sm 
                                    {{ $index === 0 ? 'bg-primary scale-125' : 'bg-gray-300' }}">
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100 {{ $index === 0 ? 'ring-1 ring-primary/30' : '' }}">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2 gap-1">
                            <h3 class="font-bold text-lg {{ $index === 0 ? 'text-primary' : 'text-gray-700' }}">
                                {{ $track->status }}
                            </h3>
                            <span class="text-xs font-semibold text-gray-500 bg-white px-2 py-1 rounded border">
                                {{ $track->created_at->format('d M Y - H:i') }}
                            </span>
                        </div>

                        @if($track->catatan)
                        <p class="text-gray-600 text-sm mt-1">
                            <i class="fa-solid fa-location-dot text-gray-400 mr-1"></i> {{ $track->catatan }}
                        </p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            @endif

        </div>
        @endif

    </main>
</x-layout>