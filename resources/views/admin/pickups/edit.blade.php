<x-admin-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Update Status Pickup</h1>
            <a href="{{ route('admin.pickups.index') }}"
                class="text-gray-500 hover:text-primary transition flex items-center gap-2 font-medium">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>

        <!-- Penampil pesan error jika validasi gagal -->
        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
                <p class="font-bold">Oops! Ada kesalahan input:</p>
                <ul class="list-disc pl-5 text-sm mt-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8">
            <form action="{{ route('admin.pickups.update', $pickup->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div
                    class="bg-gray-50 p-6 rounded-xl border border-gray-200 mb-8 grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Pilihan Status -->
                    <div class="space-y-2">
                        <h2 class="text-lg font-bold text-gray-800 mb-2">
                            <i class="fa-solid fa-truck-fast text-primary mr-2"></i> Update Status
                        </h2>
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

                    <!-- Input Nama Kurir -->
                    <div class="space-y-2">
                        <h2 class="text-lg font-bold text-gray-800 mb-2">
                            <i class="fa-solid fa-user-helmet-safety text-primary"></i> Petugas Kurir
                        </h2>
                        <input type="text" name="kurir" value="{{ old('kurir', $pickup->kurir) }}"
                            placeholder="Ketik nama kurir yang bertugas..."
                            class="w-full border border-gray-300 px-4 py-3 rounded-lg outline-none focus:border-primary transition text-lg">
                    </div>

                </div>

                <h2 class="text-lg font-bold text-gray-800 border-b pb-2">Data Pickup (Bisa Diedit Jika Ada Typo)</h2>

                <!-- BARIS 1: DATA PENGIRIM -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Nama Pengirim</label>
                        <input type="text" name="nama" value="{{ old('nama', $pickup->nama) }}" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none focus:border-primary">
                    </div>
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">No. WA Pengirim</label>
                        <input type="text" name="nomer_wa" value="{{ old('nomer_wa', $pickup->nomer_wa) }}" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none focus:border-primary">
                    </div>
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Kecamatan (Asal)</label>
                        <input type="text" name="kecamatan" value="{{ old('kecamatan', $pickup->kecamatan) }}"
                            required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none focus:border-primary">
                    </div>
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Kelurahan (Asal)</label>
                        <input type="text" name="kelurahan" value="{{ old('kelurahan', $pickup->kelurahan) }}"
                            required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none focus:border-primary">
                    </div>
                    <div class="space-y-2 md:col-span-2">
                        <label class="font-medium text-gray-700">Titik Maps / Koordinat (Opsional)</label>
                        <input type="text" name="koordinat" value="{{ old('koordinat', $pickup->koordinat) }}"
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none focus:border-primary">
                    </div>
                </div>

                <!-- BARIS 2: DETAIL PAKET & TUJUAN -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Jenis Paket</label>
                        <input type="text" name="jenis" value="{{ old('jenis', $pickup->jenis) }}" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none focus:border-primary">
                    </div>
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Berat (Kg)</label>
                        <input type="number" name="berat" value="{{ old('berat', $pickup->berat) }}" min="1"
                            required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none focus:border-primary">
                    </div>
                    <div class="space-y-2 md:col-span-2">
                        <label class="font-medium text-gray-700">Alamat Lengkap Tujuan (Penerima)</label>
                        <textarea name="alamat" rows="3" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg outline-none transition focus:border-primary">{{ old('alamat', $pickup->alamat) }}</textarea>
                    </div>
                </div>

                <div class="flex justify-end pt-6 border-t mt-8">
                    <button type="submit"
                        class="bg-primary hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg flex items-center gap-2 transition">
                        <i class="fa-solid fa-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
