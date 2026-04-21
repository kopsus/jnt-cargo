<x-layout>

    <main class="grow max-w-4xl mx-auto w-full px-4 py-10 md:py-16">

        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Cek Tarif Pengiriman</h1>
            <p class="text-gray-500">Estimasi biaya pengiriman paket Anda (Harga per Kilogram).</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-10 max-w-2xl mx-auto relative overflow-hidden">

            <form id="ongkir-form" class="space-y-6 relative z-10">

                <div class="space-y-2">
                    <label class="font-bold text-gray-700 block">Kota / Kabupaten Tujuan</label>
                    <div class="border border-slate-200 px-4 py-3 rounded-xl">
                        <select id="kabupaten" class="w-full">
                            <option value="">-- Pilih Kabupaten / Kota --</option>
                            @foreach($kabupatens as $kab)
                            <option value="{{ $kab->kabupaten }}">{{ $kab->kabupaten }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="font-bold text-gray-700 block">Kecamatan Tujuan</label>
                    <div class="border border-slate-200 bg-gray-100 px-4 py-3 rounded-xl">
                        <select id="kecamatan" disabled class="w-full">
                            <option value="">-- Pilih Kecamatan --</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="font-bold text-gray-700 block">Berat Paket (Kg)</label>
                    <input type="number" id="berat" min="1" value="1" placeholder="Masukkan berat paket..." class="w-full border border-gray-600 px-4 py-3 rounded-xl focus:border-primary focus:ring-0 outline-none transition">
                </div>

                <button type="button" id="btn-hitung" class="w-full bg-primary hover:bg-green-700 text-white font-bold py-4 rounded-xl transition shadow-lg flex justify-center items-center gap-2 text-lg">
                    <i class="fa-solid fa-calculator"></i> Hitung Estimasi Tarif
                </button>
            </form>

            <div id="hasil-box" class="hidden mt-8 pt-8 border-t-2 border-dashed border-gray-200">
                <h3 class="text-center font-medium text-gray-500 mb-2">Estimasi Total Tarif</h3>
                <div class="text-center text-4xl font-black text-primary mb-2" id="total-harga">Rp 0</div>

                <div class="bg-blue-50 text-blue-700 p-4 rounded-xl text-sm flex gap-3 items-start mt-6">
                    <i class="fa-solid fa-circle-info mt-0.5"></i>
                    <p id="detail-harga">Tarif per Kg: Rp 0 | Berat: 1 Kg</p>
                </div>
            </div>

        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data ongkir dari database dipassing ke Javascript
            const dataOngkir = @json($ongkirs);

            const selectKabupaten = document.getElementById('kabupaten');
            const selectKecamatan = document.getElementById('kecamatan');
            const inputBerat = document.getElementById('berat');
            const btnHitung = document.getElementById('btn-hitung');
            const boxHasil = document.getElementById('hasil-box');
            const elTotalHarga = document.getElementById('total-harga');
            const elDetailHarga = document.getElementById('detail-harga');

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