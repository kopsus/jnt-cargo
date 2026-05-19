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
                <div class="space-y-2 col-span-1 md:col-span-2">
                    <label class="text-lg md:text-xl font-medium text-white">Alamat Lengkap Tujuan (Penerima)</label>
                    <textarea name="alamat_penerima" cols="30" rows="4"
                        placeholder="Masukkan Kota, Kecamatan, dan Detail alamat lengkap penerima..." required
                        class="bg-white text-black rounded-xl text-lg md:text-xl w-full p-3 outline-none mt-1 md:mt-2"></textarea>
                    <p class="text-xs md:text-sm text-gray-200">Pastikan alamat ditulis lengkap beserta Kota/Kabupaten
                        untuk kemudahan pengiriman.</p>
                </div>

                <hr class="border-white/30 w-10/12 mx-auto my-8" />

                <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kota Pengambilan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <select id="kabupaten2" name="kota_pengambilan" required class="w-full text-black outline-none bg-transparent">
                                <option value="">-- Pilih Kota / Kabupaten --</option>
                                <option value="JOGJA">JOGJA</option>
                                <option value="BANTUL">BANTUL</option>
                                <option value="SLEMAN">SLEMAN</option>
                                <option value="KULON PROGO">KULON PROGO</option>
                                <option value="GUNUNG KIDUL">GUNUNG KIDUL</option>
                            </select>
                        </div>
                        <p class="text-xs md:text-sm text-gray-200">Kami melayani pickup khusus untuk area DIY Raya</p>
                    </div>

                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kecamatan Pengambilan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <select id="kecamatan2" name="kecamatan_pengambilan" disabled required class="w-full text-black outline-none bg-transparent cursor-not-allowed">
                                <option value="">-- Pilih Kecamatan --</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Nomor WhatsApp Pengirim</label>
                        <input type="number" name="wa_pengirim" placeholder="08xx xxxx xxxx" required
                            class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                        <p class="text-xs md:text-sm text-gray-200">Tim kami akan menghubungi via Whatsapp</p>
                    </div>

                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Jenis Paket</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <!-- Tambahkan name="jenis_paket" & Sesuaikan isinya -->
                            <select name="jenis_paket" class="w-full text-black outline-none bg-transparent">
                                <option value="Motor">Motor</option>
                                <option value="Paket Cargo">Paket Cargo</option>
                                <option value="Barang Umum">Barang Umum</option>
                                <option value="Dokumen">Dokumen</option>
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
            // Objek data statis DIY yang kamu berikan
            const dataDIY = {
                "BANTUL": ["Bambanglipuro", "Banguntapan", "Bantul", "Dlingo", "Imogiri", "Jetis", "Kasihan", "Kretek", "Pajangan", "Pandak", "Piyungan", "Pleret", "Pundong", "Sanden", "Sedayu", "Sewon", "Srandakan"],
                "JOGJA": ["Danurejan", "Gedongtengen", "Gondokusuman", "Gondomanan", "Jetis", "Kotagede", "Kraton", "Mantrijeron", "Mergangsan", "Ngampilan", "Pakualaman", "Tegalrejo", "Umbulharjo", "Wirobrajan"],
                "KULON PROGO": ["Galur", "Girimulyo", "Kalibawang", "Kokap", "Lendah", "Nanggulan", "Panjatan", "Pengasih", "Samigaluh", "Sentolo", "Temon", "Wates"],
                "SLEMAN": ["Berbah", "Cangkringan", "Depok", "Gamping", "Godean", "Kalasan", "Minggir", "Mlati", "Moyudan", "Ngaglik", "Ngemplak", "Pakem", "Prambanan", "Seyegan", "Sleman", "Tempel", "Turi"],
                "GUNUNG KIDUL": ["Gedangsari", "Girisubo", "Karangmojo", "Ngawen", "Nglipar", "Paliyan", "Panggang", "Patuk", "Playen", "Ponjong", "Purwosari", "Rongkop", "Saptosari", "Semanu", "Semin", "Tanjungsari", "Tepus", "Wonosari"]
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