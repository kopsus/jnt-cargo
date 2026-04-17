<x-admin-layout>
    @if (session('success'))
        <div
            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex items-center gap-3 shadow-sm">
            <i class="fa-solid fa-circle-check text-xl"></i>
            <span class="block sm:inline font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <div class="space-y-6">

        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Tambah Voucher Baru</h1>
            <a href="/admin/vouchers"
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
            <form id="voucher-form" action="/admin/vouchers" method="POST" enctype="multipart/form-data"
                class="space-y-6">

                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="title" class="font-medium text-gray-700">Judul Voucher<span
                                class="text-red-500">*</span></label>
                        <input type="text" id="title" name="title" placeholder="Masukkan judul..." required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                    </div>

                    <div class="space-y-2">
                        <label for="whatsapp_number" class="font-medium text-gray-700">No WhatsApp<span
                                class="text-red-500">*</span></label>
                        <input type="text" id="whatsapp_number" name="whatsapp_number"
                            placeholder="Masukkan nomor WhatsApp..." required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="whatsapp_text" class="font-medium text-gray-700">Teks WhatsApp<span
                                class="text-red-500">*</span></label>
                        <input type="text" id="whatsapp_text" name="whatsapp_text"
                            placeholder="Masukkan teks WhatsApp..." required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                    </div>

                    <div class="space-y-2">
                        <label for="duration_minutes" class="font-medium text-gray-700">Durasi (menit)<span
                                class="text-red-500">*</span></label>
                        <input type="number" id="duration_minutes" name="duration_minutes"
                            placeholder="Masukkan durasi..." required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="font-medium text-gray-700">Aktif<span class="text-red-500">*</span></label>
                    <div class="flex items-center gap-6">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="is_active" value="1" class="form-radio text-primary"
                                checked>
                            <span class="text-gray-700">Ya</span>
                    </div>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="is_active" value="0" class="form-radio text-primary">
                        <span class="text-gray-700">Tidak</span>
                    </label>
                </div>
                <div class="pt-4 flex justify-end">
                    <button type="submit"
                        class="bg-primary hover:bg-green-700 transition text-white font-bold py-3 px-8 rounded-lg shadow-lg flex items-center gap-2">
                        <i class="fa-solid fa-save"></i> Simpan Voucher
                    </button>
                </div>

            </form>
        </div>

    </div>


</x-admin-layout>
