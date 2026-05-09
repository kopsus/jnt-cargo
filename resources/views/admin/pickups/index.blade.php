<x-admin-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Monitoring Pickup</h1>
        </div>

        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex items-center gap-3">
            <i class="fa-solid fa-circle-check text-xl"></i>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
        @endif

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase">Waktu Request</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase">Pengirim & Asal</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase">Tujuan</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-4 text-center text-xs font-bold text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse($pickups as $pickup)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">
                                {{ $pickup->created_at->format('d M Y') }} <br>
                                <span class="text-xs text-gray-400">{{ $pickup->created_at->format('H:i') }} WIB</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-bold text-gray-800">{{ $pickup->kota_pengambilan }}</div>
                                <div class="text-xs text-gray-500">{{ $pickup->kecamatan_pengambilan }}, {{ $pickup->kelurahan_pengambilan }}</div>

                                <!-- Tombol Chat WA Cepat -->
                                @php $waNumber = preg_replace('/^0/', '62', $pickup->wa_pengirim); @endphp
                                <a href="https://wa.me/{{ $waNumber }}" target="_blank" class="inline-flex items-center gap-1 mt-1 text-xs font-bold text-green-600 hover:text-green-800">
                                    <i class="fa-brands fa-whatsapp"></i> Hubungi WA
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-bold text-gray-800">{{ $pickup->kota_tujuan }}</div>
                                <div class="text-xs text-gray-500">{{ $pickup->kecamatan_tujuan }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                $colors = [
                                'Menunggu' => 'bg-yellow-100 text-yellow-700',
                                'Kurir Menuju Lokasi' => 'bg-blue-100 text-blue-700',
                                'Selesai / Paket Diambil' => 'bg-green-100 text-green-700',
                                'Batal' => 'bg-red-100 text-red-700',
                                ];
                                @endphp
                                <span class="px-3 py-1 rounded-full text-xs font-bold {{ $colors[$pickup->status] }}">
                                    {{ $pickup->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <div class="flex justify-center gap-3 items-center">
                                    <!-- Jika Status Selesai, Tampilkan Tombol Buat Resi -->
                                    @if($pickup->status === 'Selesai / Paket Diambil')
                                    @php
                                    // Auto-Generate Resi: JNT + TahunBulanHari + ID Pickup (Contoh: JNT2605090001)
                                    $autoResi = 'JNT' . date('ymd') . str_pad($pickup->id, 4, '0', STR_PAD_LEFT);

                                    // Auto-Generate Catatan
                                    $autoCatatan = "Paket berhasil dijemput dari {$pickup->kecamatan_pengambilan}. Tujuan: {$pickup->kota_tujuan}. (Paket: {$pickup->jenis_paket}, Berat: {$pickup->berat}Kg)";
                                    @endphp

                                    <a href="{{ route('admin.trackings.create', ['resi' => $autoResi, 'catatan' => $autoCatatan, 'status' => 'Paket Diproses']) }}"
                                        class="bg-primary hover:bg-green-700 text-white px-3 py-1.5 rounded text-xs font-bold transition shadow-sm flex items-center gap-1" title="Buat Resi">
                                        <i class="fa-solid fa-file-invoice"></i> Buat Resi
                                    </a>
                                    @endif

                                    <a href="{{ route('admin.pickups.edit', $pickup->id) }}" class="text-blue-600 hover:text-blue-900 bg-blue-50 p-2 rounded" title="Edit & Update Status">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <form action="{{ route('admin.pickups.destroy', $pickup->id) }}" method="POST" onsubmit="return confirm('Hapus data pickup ini?')">
                                        @csrf @method('DELETE')
                                        <button class="text-red-600 hover:text-red-900 bg-red-50 p-2 rounded" title="Hapus"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-gray-500 font-medium">
                                Belum ada permintaan pickup.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="p-4 border-t">
                {{ $pickups->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>