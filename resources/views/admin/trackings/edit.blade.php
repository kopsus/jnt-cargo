<x-admin-layout>
    @if (session('success'))
    <div
        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex items-center gap-3 shadow-sm mb-6">
        <i class="fa-solid fa-circle-check text-xl"></i>
        <span class="block sm:inline font-medium">{{ session('success') }}</span>
    </div>
    @endif

    <div class="space-y-6">

        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Edit Tracking</h1>
            <a href="{{ route('admin.trackings.index') }}"
                class="text-gray-500 hover:text-primary transition flex items-center gap-2 font-medium">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden p-6 md:p-8">
            @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-r-lg">
                <div class="flex items-center">
                    <i class="fa-solid fa-circle-exclamation text-red-500 mr-3 text-lg"></i>
                    <p class="text-red-700 font-bold">Oops! Ada kesalahan pada inputanmu:</p>
                </div>
                <ul class="list-disc pl-8 mt-2 text-red-600 text-sm">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('admin.trackings.update', $tracking) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Nomor Resi <span class="text-red-500">*</span></label>
                        <input type="text" name="no_resi" value="{{ old('no_resi', $tracking->no_resi) }}" placeholder="Contoh: JNT12345678" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition">
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
                            <option value="{{ $status }}" {{ old('status', $tracking->status) == $status ? 'selected' : '' }}>
                                {{ $status }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700">Catatan Lokasi / Keterangan</label>
                    <textarea name="catatan" rows="3" placeholder="Contoh: Paket sampai di hub Jakarta Barat"
                        class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition">{{ old('catatan', $tracking->catatan) }}</textarea>
                </div>

                <div class="pt-4 flex justify-end">
                    <button type="submit"
                        class="bg-primary hover:bg-green-700 transition text-white font-bold py-3 px-8 rounded-lg shadow-lg flex items-center gap-2">
                        <i class="fa-solid fa-save"></i> Update Tracking
                    </button>
                </div>

            </form>
        </div>

    </div>
</x-admin-layout>