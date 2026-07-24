<x-admin-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Monitoring Pickup</h1>

            <!-- Tombol Export CSV -->
            <a href="{{ route('admin.pickups.export') }}"
                class="bg-green-600 hover:bg-green-700 text-white font-bold py-2.5 px-4 rounded-lg transition shadow-sm flex items-center gap-2 text-sm">
                <i class="fa-solid fa-file-csv text-lg"></i> Export CSV
            </a>
        </div>

        @if (session('success'))
            <div
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex items-center gap-3">
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
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase">Pengirim & Asal
                            </th>
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
                                    <span class="text-xs text-gray-400">{{ $pickup->created_at->format('H:i') }}
                                        WIB</span>
                                </td>

                                <!-- Penyesuaian Kolom Pengirim -->
                                <td class="px-6 py-4">
                                    <div class="text-sm font-bold text-gray-800">{{ $pickup->nama }}</div>
                                    <div class="text-xs text-gray-500">Kec. {{ $pickup->kecamatan }}, Kel.
                                        {{ $pickup->kelurahan }}</div>

                                    @php $waNumber = preg_replace('/^0/', '62', $pickup->nomer_wa); @endphp
                                    <div class="flex items-center gap-3 mt-1">
                                        <a href="https://wa.me/{{ $waNumber }}" target="_blank"
                                            class="inline-flex items-center gap-1 text-xs font-bold text-green-600 hover:text-green-800">
                                            <i class="fa-brands fa-whatsapp"></i> Hubungi WA
                                        </a>

                                        <!-- Menampilkan tombol Maps jika titik koordinat diisi -->
                                        @if ($pickup->koordinat)
                                            <a href="{{ Str::startsWith($pickup->koordinat, 'http') ? $pickup->koordinat : 'https://www.google.com/maps/search/?api=1&query=' . urlencode($pickup->koordinat) }}"
                                                target="_blank"
                                                class="inline-flex items-center gap-1 text-xs font-bold text-blue-600 hover:text-blue-800">
                                                <i class="fa-solid fa-map-location-dot"></i> Buka Maps
                                            </a>
                                        @endif
                                    </div>
                                </td>

                                <!-- Penyesuaian Kolom Tujuan -->
                                <td class="px-6 py-4">
                                    <div class="text-sm font-bold text-gray-800">Alamat Penerima:</div>
                                    <div class="text-xs text-gray-500 whitespace-normal line-clamp-2"
                                        title="{{ $pickup->alamat }}">
                                        {{ \Illuminate\Support\Str::limit($pickup->alamat, 60) }}
                                    </div>
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
                                    <span
                                        class="px-3 py-1 rounded-full text-xs font-bold {{ $colors[$pickup->status] ?? 'bg-gray-100 text-gray-700' }}">
                                        {{ $pickup->status }}
                                    </span>
                                    <div class="mt-3">
                                        <p class="text-[11px] text-gray-400 uppercase font-bold tracking-wider">Petugas
                                            Kurir:</p>
                                        @if ($pickup->kurir)
                                            <p class="text-sm font-bold text-gray-800"><i
                                                    class="fa-solid fa-user text-primary mr-1"></i>
                                                {{ $pickup->kurir }}</p>
                                        @else
                                            <p class="text-xs font-medium text-red-500 italic">Belum ditugaskan</p>
                                        @endif
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                    <div class="flex justify-center gap-3 items-center">

                                        @if ($pickup->status === 'Kurir Menuju Lokasi')
                                            @php
                                                $autoResi =
                                                    'JNT' . date('ymd') . str_pad($pickup->id, 4, '0', STR_PAD_LEFT);

                                                // Penyesuaian variabel untuk Auto-Generate Catatan
                                                $cuplikanAlamat = \Illuminate\Support\Str::limit($pickup->alamat, 30);
                                                $autoCatatan = "Paket dari {$pickup->nama} (Kec. {$pickup->kecamatan}). Tujuan: {$cuplikanAlamat}. (Paket: {$pickup->jenis}, Berat: {$pickup->berat}Kg)";
                                            @endphp

                                            <a href="{{ route('admin.trackings.create', ['resi' => $autoResi, 'catatan' => $autoCatatan, 'status' => 'Paket Diproses']) }}"
                                                class="bg-primary hover:bg-green-700 text-white px-3 py-1.5 rounded text-xs font-bold transition shadow-sm flex items-center gap-1"
                                                title="Buat Resi">
                                                <i class="fa-solid fa-file-invoice"></i> Buat Resi
                                            </a>
                                        @endif

                                        <a href="{{ route('admin.pickups.edit', $pickup->id) }}"
                                            class="text-blue-600 hover:text-blue-900 bg-blue-50 p-2 rounded"
                                            title="Edit & Update Status">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        <form action="{{ route('admin.pickups.destroy', $pickup->id) }}" method="POST"
                                            onsubmit="return confirm('Hapus data pickup ini?')">
                                            @csrf @method('DELETE')
                                            <button class="text-red-600 hover:text-red-900 bg-red-50 p-2 rounded"
                                                title="Hapus"><i class="fa-solid fa-trash"></i></button>
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
