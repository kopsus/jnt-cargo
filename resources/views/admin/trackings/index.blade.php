<x-admin-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Manajemen Tracking Resi</h1>
            <a href="{{ route('admin.trackings.create') }}" class="bg-primary hover:bg-green-700 text-white font-bold py-2.5 px-5 rounded-lg transition flex items-center gap-2 shadow-md">
                <i class="fa-solid fa-plus"></i> Input Status Resi
            </a>
        </div>

        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex items-center gap-3">
            <i class="fa-solid fa-circle-check text-xl"></i>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
        @endif

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase">No Resi</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase">Catatan</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase">Update Terakhir</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach($trackings as $track)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 whitespace-nowrap font-bold text-primary">{{ $track->no_resi }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @php
                            $colors = [
                            'Menunggu Penjemputan' => 'bg-gray-100 text-gray-600',
                            'Paket Diproses' => 'bg-blue-100 text-blue-600',
                            'Dalam Perjalanan (Transit)' => 'bg-indigo-100 text-indigo-600',
                            'Dibawa Kurir' => 'bg-orange-100 text-orange-600',
                            'Paket Diterima' => 'bg-green-100 text-green-600',
                            'Gagal Kirim' => 'bg-red-100 text-red-600',
                            'Dikembalikan (Retur)' => 'bg-red-200 text-red-800',
                            ];
                            @endphp
                            <span class="px-3 py-1 rounded-full text-xs font-bold {{ $colors[$track->status] ?? 'bg-gray-100' }}">
                                {{ $track->status }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $track->catatan }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $track->created_at->format('d M Y, H:i') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <div class="flex justify-center gap-3">
                                <a href="{{ route('admin.trackings.edit', $track->id) }}" class="text-blue-600 hover:text-blue-900"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('admin.trackings.destroy', $track->id) }}" method="POST" onsubmit="return confirm('Hapus riwayat ini?')">
                                    @csrf @method('DELETE')
                                    <button class="text-red-600 hover:text-red-900"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-4">
                {{ $trackings->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>