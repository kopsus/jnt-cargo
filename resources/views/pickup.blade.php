<x-layout>
    <section class="py-12 md:py-20 px-6 bg-primary">
        <div class="w-full max-w-7xl mx-auto space-y-8 md:space-y-16">
            <p class="text-3xl md:text-5xl text-center font-bold text-white">Layanan Pickup</p>

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

            <form action="{{ route('pickup.store') }}" method="POST" class="space-y-8 flex flex-col justify-center">
                @csrf

                <!-- BAGIAN 1: INFORMASI PENGIRIM (PICKUP) -->
                <div class="bg-white/10 p-6 md:p-8 rounded-2xl border border-white/20">
                    <p class="text-2xl font-bold text-white mb-6 border-b border-white/30 pb-2">1. Data Pengirim (Lokasi
                        Pickup)</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6">
                        <!-- Nama Pengirim -->
                        <div class="space-y-2">
                            <label class="text-lg font-medium text-white">Nama Pengirim</label>
                            <input type="text" name="nama" placeholder="Masukkan nama Anda..." required
                                class="bg-white w-full p-3 rounded-xl text-lg text-black outline-none">
                        </div>

                        <!-- No WhatsApp -->
                        <div class="space-y-2">
                            <label class="text-lg font-medium text-white">Nomor WhatsApp</label>
                            <input type="number" name="nomer_wa" placeholder="Contoh: 08123456789" required
                                class="bg-white w-full p-3 rounded-xl text-lg text-black outline-none">
                        </div>

                        <!-- Kota (Hanya untuk trigger JS, tidak dikirim ke DB) -->
                        <div class="space-y-2">
                            <label class="text-lg font-medium text-white">Kota / Kabupaten</label>
                            <div class="bg-white p-3 rounded-xl text-lg">
                                <select id="kabupaten2" required class="w-full text-black outline-none bg-transparent">
                                    <option value="">-- Pilih Kota / Kabupaten --</option>
                                    <option value="JOGJA">JOGJA</option>
                                    <option value="BANTUL">BANTUL</option>
                                    <option value="SLEMAN">SLEMAN</option>
                                    <option value="KULON PROGO">KULON PROGO</option>
                                    <option value="GUNUNG KIDUL">GUNUNG KIDUL</option>
                                </select>
                            </div>
                        </div>

                        <!-- Kecamatan (Dikirim ke DB) -->
                        <div class="space-y-2">
                            <label class="text-lg font-medium text-white">Kecamatan</label>
                            <div class="bg-white p-3 rounded-xl text-lg">
                                <select id="kecamatan2" name="kecamatan" disabled required
                                    class="w-full text-black outline-none bg-transparent cursor-not-allowed">
                                    <option value="">-- Pilih Kecamatan --</option>
                                </select>
                            </div>
                        </div>

                        <!-- Kelurahan -->
                        <div class="space-y-2">
                            <label class="text-lg font-medium text-white">Kelurahan / Desa</label>
                            <input type="text" name="kelurahan" placeholder="Masukkan nama kelurahan..." required
                                class="bg-white w-full p-3 rounded-xl text-lg text-black outline-none">
                        </div>

                        <!-- Koordinat (Opsional) -->
                        <div class="space-y-2">
                            <label class="text-lg font-medium text-white">Titik Maps (Opsional)</label>
                            <input type="text" name="koordinat" placeholder="Link Google Maps atau Titik Koordinat"
                                class="bg-white w-full p-3 rounded-xl text-lg text-black outline-none">
                            <p class="text-xs text-gray-300">Kosongkan jika tidak ada, atau tempel link lokasi maps
                                Anda.</p>
                        </div>
                    </div>
                </div>

                <!-- BAGIAN 2: INFORMASI PAKET -->
                <div class="bg-white/10 p-6 md:p-8 rounded-2xl border border-white/20">
                    <p class="text-2xl font-bold text-white mb-6 border-b border-white/30 pb-2">2. Detail Paket</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6">
                        <div class="space-y-2">
                            <label class="text-lg font-medium text-white">Jenis Paket</label>
                            <div class="bg-white p-3 rounded-xl text-lg">
                                <select name="jenis" required class="w-full text-black outline-none bg-transparent">
                                    <option value="Motor">Motor</option>
                                    <option value="Paket Cargo">Paket Cargo</option>
                                    <option value="Barang Umum">Barang Umum</option>
                                    <option value="Dokumen">Dokumen</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-lg font-medium text-white">Berat (Kg)</label>
                            <input type="number" name="berat" min="1" placeholder="Estimasi berat..." required
                                class="bg-white w-full p-3 rounded-xl text-lg text-black outline-none">
                        </div>
                    </div>
                </div>

                <!-- BAGIAN 3: INFORMASI PENERIMA -->
                <div class="bg-white/10 p-6 md:p-8 rounded-2xl border border-white/20">
                    <p class="text-2xl font-bold text-white mb-6 border-b border-white/30 pb-2">3. Tujuan Pengiriman</p>
                    <div class="space-y-2">
                        <label class="text-lg font-medium text-white">Alamat Lengkap Penerima</label>
                        <textarea name="alamat" cols="30" rows="4"
                            placeholder="Masukkan Kota, Kecamatan, Kelurahan, RT/RW, dan Detail alamat lengkap penerima..." required
                            class="bg-white text-black rounded-xl text-lg w-full p-3 outline-none"></textarea>
                    </div>
                </div>

                <button type="submit"
                    class="w-max mx-auto px-8 py-4 mt-4 rounded-full bg-white text-primary font-bold text-xl md:text-2xl shadow-lg hover:scale-105 transition transform">
                    Request Pickup Sekarang!
                </button>
            </form>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data Statis Wilayah DIY
            const dataDIY = {
                "BANTUL": ["Bambanglipuro", "Banguntapan", "Bantul", "Dlingo", "Imogiri", "Jetis", "Kasihan",
                    "Kretek", "Pajangan", "Pandak", "Piyungan", "Pleret", "Pundong", "Sanden", "Sedayu",
                    "Sewon", "Srandakan"
                ],
                "JOGJA": ["Danurejan", "Gedongtengen", "Gondokusuman", "Gondomanan", "Jetis", "Kotagede",
                    "Kraton", "Mantrijeron", "Mergangsan", "Ngampilan", "Pakualaman", "Tegalrejo",
                    "Umbulharjo", "Wirobrajan"
                ],
                "KULON PROGO": ["Galur", "Girimulyo", "Kalibawang", "Kokap", "Lendah", "Nanggulan", "Panjatan",
                    "Pengasih", "Samigaluh", "Sentolo", "Temon", "Wates"
                ],
                "SLEMAN": ["Berbah", "Cangkringan", "Depok", "Gamping", "Godean", "Kalasan", "Minggir", "Mlati",
                    "Moyudan", "Ngaglik", "Ngemplak", "Pakem", "Prambanan", "Seyegan", "Sleman", "Tempel",
                    "Turi"
                ],
                "GUNUNG KIDUL": ["Gedangsari", "Girisubo", "Karangmojo", "Ngawen", "Nglipar", "Paliyan",
                    "Panggang", "Patuk", "Playen", "Ponjong", "Purwosari", "Rongkop", "Saptosari", "Semanu",
                    "Semin", "Tanjungsari", "Tepus", "Wonosari"
                ]
            };

            const selectKabPickup = document.getElementById('kabupaten2');
            const selectKecPickup = document.getElementById('kecamatan2');

            // Logika: Saat Kota dipilih, munculkan Kecamatan yang sesuai secara instan
            selectKabPickup.addEventListener('change', function() {
                const kotaTerpilih = this.value;

                // Reset Dropdown Kecamatan
                selectKecPickup.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
                selectKecPickup.disabled = true;
                selectKecPickup.classList.add('cursor-not-allowed');

                if (kotaTerpilih && dataDIY[kotaTerpilih]) {
                    // Aktifkan Dropdown Kecamatan
                    selectKecPickup.disabled = false;
                    selectKecPickup.classList.remove('cursor-not-allowed');

                    // Isi data kecamatan dari objek dataDIY
                    dataDIY[kotaTerpilih].forEach(kecamatan => {
                        const option = document.createElement('option');
                        option.value = kecamatan;
                        option.textContent = kecamatan;
                        selectKecPickup.appendChild(option);
                    });
                }
            });
        });
    </script>
</x-layout>
