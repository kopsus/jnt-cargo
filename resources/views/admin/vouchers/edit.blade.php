<x-admin-layout>

    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-800">Edit Voucher</h1>
            <a href="/admin/vouchers"
                class="text-gray-500 hover:text-primary transition flex items-center gap-2 font-medium">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden p-6 md:p-8">
            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-r-lg">
                    <ul class="list-disc pl-8 text-red-600 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="voucher-form" action="/admin/vouchers/{{ $voucher->id }}" method="POST"
                enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Judul Voucher <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="title" name="title" value="{{ old('title', $voucher->title) }}"
                            required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary">
                    </div>

                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">No WhatsApp <span class="text-red-500">*</span></label>
                        <input type="text" id="whatsapp_number" name="whatsapp_number"
                            value="{{ old('whatsapp_number', $voucher->whatsapp_number) }}" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Teks WhatsApp <span
                                class="text-red-500">*</span></label>
                        <textarea id="whatsapp_text" name="whatsapp_text" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary">{{ old('whatsapp_text', $voucher->whatsapp_text) }}</textarea>
                    </div>

                    <div class="space-y-2">
                        <label class="font-medium text-gray-700">Durasi (menit) <span
                                class="text-red-500">*</span></label>
                        <input type="number" id="duration_minutes" name="duration_minutes"
                            value="{{ old('duration_minutes', $voucher->duration_minutes) }}" required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary">
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="font-medium text-gray-700">Aktif<span class="text-red-500">*</span></label>
                    <div class="flex items-center gap-6">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="is_active" value="1"
                                {{ old('is_active', $voucher->is_active) == 1 ? 'checked' : '' }}>


                            <span class="text-gray-700">Ya</span>
                    </div>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="is_active" value="0"
                            {{ old('is_active', $voucher->is_active) == 0 ? 'checked' : '' }}>
                        <span class="text-gray-700">Tidak</span>
                    </label>
                </div>
                <div class="pt-4 flex justify-end">
                    <button type="submit"
                        class="bg-primary hover:bg-green-700 transition text-white font-bold py-3 px-8 rounded-lg shadow-lg flex items-center gap-2">
                        <i class="fa-solid fa-save"></i> Perbarui Voucher
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-admin-layout>
