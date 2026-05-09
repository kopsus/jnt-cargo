<x-admin-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Input Status Perjalanan</h1>
            <a href="{{ route('admin.trackings.index') }}" class="text-gray-500 hover:text-primary transition flex items-center gap-2 font-medium">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8">
            <form action="{{ route('admin.trackings.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Nomor Resi <span class="text-red-500">*</span></label>
                        <!-- Menangkap data 'resi' dari URL jika ada -->
                        <input type="text" name="no_resi" value="{{ old('no_resi', request('resi')) }}" placeholder="Contoh: JNT12345678" required class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition font-bold text-primary">
                    </div>
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Status Pengiriman <span class="text-red-500">*</span></label>
                        <select name="status" required class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition">
                            @php
                            $statuses = [
                            'Menunggu Penjemputan',
                            'Paket Diproses',
                            'Dalam Perjalanan (Transit)',
                            'Dibawa Kurir',
                            'Paket Diterima',
                            'Gagal Kirim',
                            'Dikembalikan (Retur)'
                            ];
                            @endphp

                            @foreach($statuses as $status)
                            <!-- Menangkap data 'status' dari URL jika ada -->
                            <option value="{{ $status }}" {{ old('status', request('status')) == $status ? 'selected' : '' }}>
                                {{ $status }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700">Catatan Lokasi / Keterangan</label>
                    <!-- Menangkap data 'catatan' dari URL jika ada -->
                    <textarea name="catatan" rows="3" placeholder="Contoh: Paket sampai di hub Jakarta Barat" class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition">{{ old('catatan', request('catatan')) }}</textarea>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" class="bg-primary hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg flex items-center gap-2 transition">
                        <i class="fa-solid fa-save"></i> Simpan Status
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>