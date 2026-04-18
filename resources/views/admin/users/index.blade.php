<x-admin-layout>
    <div class="space-y-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <h1 class="text-3xl font-bold text-gray-800">Manajemen user</h1>

            <a href="/admin/users/create"
                class="bg-primary hover:bg-green-700 transition text-white px-5 py-2.5 rounded-lg font-medium flex items-center gap-2">
                <i class="fa-solid fa-plus"></i> Tambah user Baru
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-600 text-sm border-b border-gray-200">
                            <th class="p-4 font-medium">No</th>
                            <th class="p-4 font-medium">Nama</th>
                            <th class="p-4 font-medium">Email</th>
                            <th class="p-4 font-medium">Tanggal dibuat</th>
                            <th class="p-4 font-medium text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm">

                        @forelse ($users as $user)
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                            <td class="p-4">{{ $loop->iteration }}</td>

                            <td class="p-4 font-medium text-gray-900">{{ $user->name }}</td>
                            <td class="p-4 font-medium text-gray-900">{{ $user->email }}</td>
                            <td class="p-4">
                                <p class="text-gray-900 whitespace-no-wrap">{{ $user->created_at->format('d M Y') }}</p>
                            </td>
                            <td class="p-4 flex justify-center gap-2">
                                <a href="/admin/users/{{ $user->id }}/edit"
                                    class="w-8 h-8 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 flex items-center justify-center"
                                    title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form action="/admin/users/{{ $user->id }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus user ini? Tindakan ini tidak bisa dibatalkan!');">
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
                                Belum ada user yang ditulis. <br>
                                <a href="/admin/users/create"
                                    class="text-primary font-bold hover:underline mt-2 inline-block">Buat user
                                    Pertamamu Sekarang!</a>
                            </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>