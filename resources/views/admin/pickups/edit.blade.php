<x-admin-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Update Status Pickup</h1>
            <a href="{{ route('admin.pickups.index') }}"
                class="text-gray-500 hover:text-primary transition flex items-center gap-2 font-medium">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8">
            <form action="{{ route('admin.pickups.update', $pickup->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- KOTAK UPDATE STATUS KHUSUS -->
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 mb-8">
                    <h2 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2"><i
                            class="fa-solid fa-truck-fast text-primary mr-2"></i> Update Status Penjemputan</h2>
                    <div class="space-y-2">
                        <select name="status"
                            class="w-full border border-gray-300 px-4 py-3 rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition text-lg font-bold">
                            @php
                                $statuses = ['Menunggu', 'Kurir Menuju Lokasi', 'Selesai / Paket Diambil', 'Batal'];
                            @endphp
                            @foreach ($statuses as $status)
                                <option value="{{ $status }}"
                                    {{ old('status', $pickup->status) == $status ? 'selected' : '' }}>
                                    {{ $status }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <h2 class="text-lg font-bold text-gray-800 border-b pb-2">Data Pickup (Bisa Diedit Jika Ada Typo)</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Kota Pengambilan (Asal)</label>
                        <input type="text" name="kota_pengambilan"
                            value="{{ old('kota_pengambilan', $pickup->kota_pengambilan) }}" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none transition">
                    </div>
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Kecamatan / Kelurahan Asal</label>
                        <div class="flex gap-2">
                            <input type="text" name="kecamatan_pengambilan"
                                value="{{ old('kecamatan_pengambilan', $pickup->kecamatan_pengambilan) }}"
                                class="w-1/2 border border-gray-300 px-4 py-2.5 rounded-lg outline-none">
                            <input type="text" name="kelurahan_pengambilan"
                                value="{{ old('kelurahan_pengambilan', $pickup->kelurahan_pengambilan) }}"
                                class="w-1/2 border border-gray-300 px-4 py-2.5 rounded-lg outline-none">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Alamat Lengkap Pickup</label>
                        <textarea name="alamat_pickup" rows="3" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none transition">{{ old('alamat_pickup', $pickup->alamat_pickup) }}</textarea>
                    </div>
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Alamat Lengkap Penerima</label>
                        <textarea name="alamat_penerima" rows="3" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none transition">{{ old('alamat_penerima', $pickup->alamat_penerima) }}</textarea>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">No. WA Pengirim</label>
                        <input type="text" name="wa_pengirim" value="{{ old('wa_pengirim', $pickup->wa_pengirim) }}"
                            required class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none">
                    </div>
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Jenis Paket</label>
                        <input type="text" name="jenis_paket" value="{{ old('jenis_paket', $pickup->jenis_paket) }}"
                            required class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none">
                    </div>
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Berat (Kg)</label>
                        <input type="number" name="berat" value="{{ old('berat', $pickup->berat) }}" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none">
                    </div>
                </div>

                <input type="hidden" name="panjang" value="{{ $pickup->panjang }}">
                <input type="hidden" name="lebar" value="{{ $pickup->lebar }}">
                <input type="hidden" name="tinggi" value="{{ $pickup->tinggi }}">

                <div class="flex justify-end pt-4 border-t">
                    <button type="submit"
                        class="bg-primary hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg flex items-center gap-2 transition">
                        <i class="fa-solid fa-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
