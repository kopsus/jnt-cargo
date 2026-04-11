<x-admin-layout>
    <div class="space-y-6">

        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <h1 class="text-3xl font-bold text-gray-800">Manajemen Artikel</h1>

            <a href="/admin/articles/create"
                class="bg-primary hover:bg-green-700 transition text-white px-5 py-2.5 rounded-lg font-medium flex items-center gap-2">
                <i class="fa-solid fa-plus"></i> Tambah Artikel Baru
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-600 text-sm border-b border-gray-200">
                            <th class="p-4 font-medium">No</th>
                            <th class="p-4 font-medium">Thumbnail</th>
                            <th class="p-4 font-medium">Judul Artikel</th>
                            <th class="p-4 font-medium">Kategori</th>
                            <th class="p-4 font-medium">Tanggal Dibuat</th>
                            <th class="p-4 font-medium text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm">

                        @forelse ($articles as $article)
                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                                <td class="p-4">{{ $loop->iteration }}</td>

                                <td class="p-4">
                                    @if ($article->thumbnail)
                                        <img src="{{ Storage::url($article->thumbnail) }}" alt="Thumbnail"
                                            class="w-16 h-12 rounded object-cover shadow-sm">
                                    @else
                                        <div
                                            class="w-16 h-12 bg-gray-200 rounded flex items-center justify-center text-gray-400 text-xs">
                                            No Img</div>
                                    @endif
                                </td>

                                <td class="p-4 font-medium text-gray-900">{{ $article->title }}</td>

                                <td class="p-4">
                                    <span
                                        class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold">{{ $article->category }}</span>
                                </td>

                                <td class="p-4">{{ $article->created_at->format('d M Y') }}</td>

                                <td class="p-4 flex justify-center gap-2">
                                    <a href="/admin/articles/{{ $article->id }}/edit"
                                        class="w-8 h-8 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex items-center justify-center"
                                        title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <form action="/admin/articles/{{ $article->id }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus artikel ini? Tindakan ini tidak bisa dibatalkan!');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="w-8 h-8 rounded bg-red-100 text-red-600 hover:bg-red-200 flex items-center justify-center"
                                            title="Hapus">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-8 text-center text-gray-500">
                                    Belum ada artikel yang ditulis. <br>
                                    <a href="/admin/articles/create"
                                        class="text-primary font-bold hover:underline mt-2 inline-block">Buat Artikel
                                        Pertamamu Sekarang!</a>
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

            <div class="p-4 border-t border-gray-100 text-sm text-gray-500 flex justify-between items-center">
                <span>Menampilkan 1 hingga 2 dari 2 artikel</span>
                <div class="flex gap-1">
                    <button class="px-3 py-1 border rounded hover:bg-gray-50">Sebelumnya</button>
                    <button class="px-3 py-1 border rounded hover:bg-gray-50 bg-primary text-white">1</button>
                    <button class="px-3 py-1 border rounded hover:bg-gray-50">Selanjutnya</button>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>
