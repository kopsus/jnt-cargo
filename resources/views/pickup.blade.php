<x-layout>
    {{-- Semua kode di dalam tag ini akan otomatis masuk ke bagian {{ $slot }} di layout utama --}}
    <section class="py-12 md:py-20 px-6 bg-primary">
        <div class="w-full max-w-7xl mx-auto space-y-8 md:space-y-16">
            <p class="text-3xl md:text-5xl text-center font-bold text-white">Layanan Pickup</p>

            <form action="" class="space-y-6 flex flex-col justify-center">
                <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kota Tujuan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <select id="kabupaten" class="w-full">
                                <option value="">-- Pilih Kabupaten / Kota --</option>
                                @foreach($kabupatens as $kab)
                                <option value="{{ $kab->kabupaten }}">{{ $kab->kabupaten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <p class="text-xs md:text-sm text-gray-200">Untuk kalkulasi biaya yang akurat</p>
                    </div>
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kecamatan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <select id="kecamatan" disabled class="w-full">
                                <option value="">-- Pilih Kecamatan --</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="space-y-2 col-span-1 md:col-span-2">
                    <label class="text-lg md:text-xl font-medium text-white">Alamat Detail Penerima</label>
                    <textarea name="" id="" cols="30" rows="4" placeholder="Kecamatan + Detail alamat lengkap"
                        class="bg-white text-black rounded-xl text-lg md:text-xl w-full p-3 outline-none mt-1 md:mt-2"></textarea>
                    <p class="text-xs md:text-sm text-gray-200">Penting untuk estimasi pengiriman yang tepat</p>
                </div>
                <hr class="text-white w-10/12 mx-auto" />
                <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kota Pengambilan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <select id="kabupaten2" class="w-full">
                                <option value="">-- Pilih Kabupaten / Kota --</option>
                                @foreach($kabupatens as $kab)
                                <option value="{{ $kab->kabupaten }}">{{ $kab->kabupaten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <p class="text-xs md:text-sm text-gray-200">kami melayani pickup dari seluruh area jogja</p>
                    </div>

                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Nomor WhatsApp</label>
                        <input type="number" placeholder="08xx xxxx xxxx"
                            class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                        <p class="text-xs md:text-sm text-gray-200">Tim kami akan menghubungi via Whatsapp</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kecamatan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <select id="kecamatan2" disabled class="w-full">
                                <option value="">-- Pilih Kecamatan --</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Kelurahan</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <select class="w-full text-black outline-none bg-transparent">
                                <option value="0">Bausasran</option>
                                <option value="1">Tegalpanggung</option>
                                <option value="2">Suryatmajan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Jenis Paket</label>
                        <div class="bg-white mt-1 md:mt-2 p-3 rounded-xl text-lg md:text-xl">
                            <select class="w-full text-black outline-none bg-transparent">
                                <option value="0">Kotagede</option>
                                <option value="1">Danurejan</option>
                                <option value="2">Gedongtengen</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Berat</label>
                        <input type="number" placeholder="Berat /cm"
                            class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                    </div>
                </div>
                <p class="text-3xl md:text-5xl text-center font-bold text-white my-12">Dimensi</p>
                <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-6 md:gap-8">
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Panjang</label>
                        <input type="number" placeholder="Panjang /cm"
                            class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                    </div>
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Lebar</label>
                        <input type="number" placeholder="Lebar /cm"
                            class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                    </div>
                    <div class="space-y-2">
                        <label class="text-lg md:text-xl font-medium text-white">Tinggi</label>
                        <input type="number" placeholder="Tinggi /cm"
                            class="bg-white w-full p-3 rounded-xl text-lg md:text-xl text-black mt-1 md:mt-2 outline-none">
                    </div>
                </div>
                <div class="space-y-2 col-span-1 md:col-span-2">
                    <label class="text-lg md:text-xl font-medium text-white">Alamat Lengkap Pickup</label>
                    <textarea name="" id="" cols="30" rows="4" placeholder="Kecamatan + Detail alamat lengkap"
                        class="bg-white text-black rounded-xl text-lg md:text-xl w-full p-3 outline-none mt-1 md:mt-2"></textarea>
                    <p class="text-xs md:text-sm text-gray-200">Penting untuk estimasi pengiriman yang tepat</p>
                </div>
                <button type="button"
                    class="w-max mx-auto p-4 mt-2 rounded-xl col-span-1 md:col-span-2 bg-white text-primary e font-bold text-xl md:text-3xl shadow-lg">
                    Request Pickup Sekarang!
                </button>
            </form>
        </div>

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data ongkir dari database dipassing ke Javascript
            const dataOngkir = @json($ongkirs);

            const selectKabupaten = document.getElementById('kabupaten');
            const selectKabupaten2 = document.getElementById('kabupaten2');
            const selectKecamatan = document.getElementById('kecamatan');
            const selectKecamatan2 = document.getElementById('kecamatan2');
            const inputBerat = document.getElementById('berat');
            const btnHitung = document.getElementById('btn-hitung');
            const boxHasil = document.getElementById('hasil-box');
            const elTotalHarga = document.getElementById('total-harga');
            const elDetailHarga = document.getElementById('detail-harga');


            // Logika: Saat Kabupaten dipilih, filter Kecamatan yang sesuai
            selectKabupaten2.addEventListener('change', function() {
                const selectedKab = this.value;

                // Reset dropdown kecamatan
                selectKecamatan2.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';

                if (selectedKab) {
                    // Aktifkan dropdown kecamatan
                    selectKecamatan2.disabled = false;
                    selectKecamatan2.classList.remove('bg-gray-100', 'cursor-not-allowed');

                    // Filter data berdasarkan kabupaten yang dipilih
                    const filteredData = dataOngkir.filter(item => item.kabupaten === selectedKab);

                    // Isi opsi kecamatan
                    filteredData.forEach(item => {
                        const option = document.createElement('option');
                        option.value = item.kecamatan;
                        option.dataset.harga = item.harga; // Simpan harga di atribut data
                        option.textContent = item.kecamatan;
                        selectKecamatan2.appendChild(option);
                    });
                } else {
                    // Nonaktifkan kembali jika tidak ada kabupaten dipilih
                    selectKecamatan2.disabled = true;
                    selectKecamatan2.classList.add('bg-gray-100', 'cursor-not-allowed');
                }

                boxHasil.classList.add('hidden'); // Sembunyikan hasil lama
            });

            // Logika: Saat Kabupaten dipilih, filter Kecamatan yang sesuai
            selectKabupaten.addEventListener('change', function() {
                const selectedKab = this.value;

                // Reset dropdown kecamatan
                selectKecamatan.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';

                if (selectedKab) {
                    // Aktifkan dropdown kecamatan
                    selectKecamatan.disabled = false;
                    selectKecamatan.classList.remove('bg-gray-100', 'cursor-not-allowed');

                    // Filter data berdasarkan kabupaten yang dipilih
                    const filteredData = dataOngkir.filter(item => item.kabupaten === selectedKab);

                    // Isi opsi kecamatan
                    filteredData.forEach(item => {
                        const option = document.createElement('option');
                        option.value = item.kecamatan;
                        option.dataset.harga = item.harga; // Simpan harga di atribut data
                        option.textContent = item.kecamatan;
                        selectKecamatan.appendChild(option);
                    });
                } else {
                    // Nonaktifkan kembali jika tidak ada kabupaten dipilih
                    selectKecamatan.disabled = true;
                    selectKecamatan.classList.add('bg-gray-100', 'cursor-not-allowed');
                }

                boxHasil.classList.add('hidden'); // Sembunyikan hasil lama
            });

            // Logika: Hitung ongkir
            btnHitung.addEventListener('click', function() {
                if (!selectKabupaten.value || !selectKecamatan.value) {
                    alert('Harap pilih Kabupaten dan Kecamatan tujuan!');
                    return;
                }

                if (!inputBerat.value || inputBerat.value < 1) {
                    alert('Berat paket minimal 1 Kg!');
                    return;
                }

                // Ambil harga dari opsi kecamatan yang dipilih
                const selectedOption = selectKecamatan.options[selectKecamatan.selectedIndex];
                const hargaPerKg = parseInt(selectedOption.dataset.harga);
                const berat = parseFloat(inputBerat.value);

                const totalTarif = hargaPerKg * berat;

                // Format angka ke format Rupiah
                const formatRupiah = (angka) => new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }).format(angka);

                elTotalHarga.textContent = formatRupiah(totalTarif);
                elDetailHarga.innerHTML = `Tarif dasar: <strong>${formatRupiah(hargaPerKg)} / Kg</strong> <br> Estimasi berdasarkan berat: <strong>${berat} Kg</strong>`;

                boxHasil.classList.remove('hidden'); // Munculkan box hasil
            });


        });
    </script>
</x-layout>