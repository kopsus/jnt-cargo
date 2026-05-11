<x-layout>
    {{-- Semua kode di dalam tag ini akan otomatis masuk ke bagian {{ $slot }} di layout utama --}}
    <section class="py-12 md:py-20 px-6 bg-primary">
        <div class="w-full max-w-7xl mx-auto space-y-8 md:space-y-16">
            <p class="text-3xl md:text-5xl text-center font-bold text-white">Layanan Pickup</p>

            <!-- Tambahkan penampil pesan error ini agar kita tahu kalau ada yang salah -->
            @if ($errors->any())
                <div
                    class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg w-full max-w-7xl mx-auto">
                    <p class="font-bold">Oops! Ada yang terlewat:</p>
                    <ul class="list-disc pl-5 text-sm mt-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pickup.store') }}" method="POST" class="space-y-6 flex flex-col justify-center">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kota Tujuan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <!-- Tambahkan name="kota_tujuan" -->
                            <select id="kabupaten" name="kota_tujuan"
                                class="w-full text-black outline-none bg-transparent">
                                <option value="">-- Pilih Kabupaten / Kota --</option>
                                @foreach ($kabupatens as $kab)
                                    <option value="{{ $kab->kabupaten }}">{{ $kab->kabupaten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <p class="text-xs md:text-sm text-gray-200">Untuk kalkulasi biaya yang akurat</p>
                    </div>
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kecamatan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <!-- Tambahkan name="kecamatan_tujuan" -->
                            <select id="kecamatan" name="kecamatan_tujuan" disabled
                                class="w-full text-black outline-none bg-transparent">
                                <option value="">-- Pilih Kecamatan --</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="space-y-2 col-span-1 md:col-span-2">
                    <label class="text-lg md:text-xl font-medium text-white">Alamat Detail Penerima</label>
                    <!-- Tambahkan name="alamat_penerima" -->
                    <textarea name="alamat_penerima" cols="30" rows="4" placeholder="Kecamatan + Detail alamat lengkap"
                        class="bg-white text-black rounded-xl text-lg md:text-xl w-full p-3 outline-none mt-1 md:mt-2"></textarea>
                    <p class="text-xs md:text-sm text-gray-200">Penting untuk estimasi pengiriman yang tepat</p>
                </div>

                <hr class="border-white/30 w-10/12 mx-auto my-8" />

                <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kota Pengambilan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <!-- Tambahkan name="kota_pengambilan" -->
                            <select id="kabupaten2" name="kota_pengambilan"
                                class="w-full text-black outline-none bg-transparent">
                                <option value="">-- Pilih Kabupaten / Kota --</option>
                                @foreach ($kabupatens as $kab)
                                    <option value="{{ $kab->kabupaten }}">{{ $kab->kabupaten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <p class="text-xs md:text-sm text-gray-200">kami melayani pickup dari seluruh area jogja</p>
                    </div>

                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Nomor WhatsApp</label>
                        <!-- Tambahkan name="wa_pengirim" -->
                        <input type="number" name="wa_pengirim" placeholder="08xx xxxx xxxx"
                            class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                        <p class="text-xs md:text-sm text-gray-200">Tim kami akan menghubungi via Whatsapp</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kecamatan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <!-- Tambahkan name="kecamatan_pengambilan" -->
                            <select id="kecamatan2" name="kecamatan_pengambilan" disabled
                                class="w-full text-black outline-none bg-transparent">
                                <option value="">-- Pilih Kecamatan --</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kelurahan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <select id="kelurahan2" name="kelurahan_pengambilan" disabled
                                class="w-full text-black outline-none bg-transparent cursor-not-allowed">
                                <option value="">-- Pilih Kelurahan --</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Jenis Paket</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <!-- Tambahkan name="jenis_paket" & Sesuaikan isinya -->
                            <select name="jenis_paket" class="w-full text-black outline-none bg-transparent">
                                <option value="Dokumen">Dokumen</option>
                                <option value="Pakaian">Pakaian</option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Barang Umum">Barang Umum</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Berat (Kg)</label>
                        <!-- Tambahkan name="berat" -->
                        <input type="number" name="berat" min="1" placeholder="Berat (Kg)"
                            class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                    </div>
                </div>

                <p class="text-3xl md:text-5xl text-center font-bold text-white my-12">Dimensi (Opsional)</p>
                <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Panjang</label>
                        <!-- Tambahkan name="panjang" -->
                        <input type="number" name="panjang" placeholder="Panjang /cm"
                            class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                    </div>
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Lebar</label>
                        <!-- Tambahkan name="lebar" -->
                        <input type="number" name="lebar" placeholder="Lebar /cm"
                            class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                    </div>
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Tinggi</label>
                        <!-- Tambahkan name="tinggi" -->
                        <input type="number" name="tinggi" placeholder="Tinggi /cm"
                            class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                    </div>
                </div>

                <div class="space-y-2 col-span-1 md:col-span-2">
                    <label class="text-lg md:text-xl font-medium text-white">Alamat Lengkap Pickup</label>
                    <!-- Tambahkan name="alamat_pickup" -->
                    <textarea name="alamat_pickup" cols="30" rows="4" placeholder="Kecamatan + Detail alamat lengkap"
                        class="bg-white text-black rounded-xl text-lg md:text-xl w-full p-3 outline-none mt-1 md:mt-2"></textarea>
                    <p class="text-xs md:text-sm text-gray-200">Penting untuk estimasi pengiriman yang tepat</p>
                </div>

                <button type="submit"
                    class="w-max mx-auto p-4 mt-2 rounded-xl col-span-1 md:col-span-2 bg-white text-primary font-bold text-xl md:text-3xl shadow-lg hover:scale-105 transition transform">
                    Request Pickup Sekarang!
                </button>
            </form>
        </div>

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Parsing data dari Laravel ke JavaScript
            const dataOngkir = @json($ongkirs);

            // --- ELEMEN UNTUK TUJUAN (Kabupaten -> Kecamatan) ---
            const selectKabTujuan = document.getElementById('kabupaten');
            const selectKecTujuan = document.getElementById('kecamatan');

            // --- ELEMEN UNTUK PICKUP/ASAL (Kabupaten -> Kecamatan -> Kelurahan) ---
            const selectKabPickup = document.getElementById('kabupaten2');
            const selectKecPickup = document.getElementById('kecamatan2');
            const selectKelPickup = document.getElementById(
                'kelurahan2'); // Pastikan ID ini sudah ditambahkan di HTML

            // ==========================================
            // 1. LOGIKA DROPDOWN KOTA TUJUAN
            // ==========================================
            selectKabTujuan.addEventListener('change', function() {
                const kab = this.value;
                selectKecTujuan.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
                selectKecTujuan.disabled = true;

                if (kab) {
                    selectKecTujuan.disabled = false;

                    // Filter data berdasarkan kabupaten
                    const filteredData = dataOngkir.filter(item => item.kabupaten === kab);

                    // Hapus duplikat nama kecamatan menggunakan Set()
                    const uniqueKecamatan = [...new Set(filteredData.map(item => item.kecamatan))];

                    uniqueKecamatan.forEach(kec => {
                        const option = document.createElement('option');
                        option.value = kec;
                        option.textContent = kec;
                        selectKecTujuan.appendChild(option);
                    });
                }
            });

            // ==========================================
            // 2. LOGIKA DROPDOWN KOTA PENGAMBILAN (PICKUP)
            // ==========================================

            // A. Saat Kabupaten Pengambilan Berubah
            selectKabPickup.addEventListener('change', function() {
                const kab = this.value;

                // Reset Kecamatan & Kelurahan
                selectKecPickup.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
                selectKelPickup.innerHTML = '<option value="">-- Pilih Kelurahan --</option>';

                selectKecPickup.disabled = true;
                selectKelPickup.disabled = true;
                selectKelPickup.classList.add('text-gray-500', 'cursor-not-allowed');

                if (kab) {
                    selectKecPickup.disabled = false;

                    // Filter dan hilangkan duplikat kecamatan
                    const filteredData = dataOngkir.filter(item => item.kabupaten === kab);
                    const uniqueKecamatan = [...new Set(filteredData.map(item => item.kecamatan))];

                    uniqueKecamatan.forEach(kec => {
                        const option = document.createElement('option');
                        option.value = kec;
                        option.textContent = kec;
                        selectKecPickup.appendChild(option);
                    });
                }
            });

            // B. Saat Kecamatan Pengambilan Berubah
            selectKecPickup.addEventListener('change', function() {
                const kab = selectKabPickup.value;
                const kec = this.value;

                // Reset Kelurahan
                selectKelPickup.innerHTML = '<option value="">-- Pilih Kelurahan --</option>';
                selectKelPickup.disabled = true;
                selectKelPickup.classList.add('text-gray-500', 'cursor-not-allowed');

                if (kec) {
                    selectKelPickup.disabled = false;
                    selectKelPickup.classList.remove('text-gray-500', 'cursor-not-allowed');

                    // Filter data kelurahan yang sesuai dengan Kabupaten DAN Kecamatan yang dipilih
                    const filteredData = dataOngkir.filter(item => item.kabupaten === kab && item
                        .kecamatan === kec);

                    // Hilangkan duplikat kelurahan (jika ada)
                    const uniqueKelurahan = [...new Set(filteredData.map(item => item.kelurahan))];

                    uniqueKelurahan.forEach(kel => {
                        const option = document.createElement('option');
                        option.value = kel; // Pastikan nama kolom di DB kamu adalah 'kelurahan'
                        option.textContent = kel;
                        selectKelPickup.appendChild(option);
                    });
                }
            });

        });
    </script>
</x-layout>
