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
            <h1 class="text-3xl font-bold text-gray-800">Edit User</h1>
            <a href="{{ route('admin.users.index') }}"
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

            <form action="{{ route('admin.users.update', $user) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="name" class="font-medium text-gray-700">Nama Lengkap<span
                                class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" placeholder="Masukkan nama..." required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                    </div>

                    <div class="space-y-2">
                        <label for="email" class="font-medium text-gray-700">Email<span
                                class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                            placeholder="Masukkan email..." required
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="password" class="font-medium text-gray-700">Password Baru</label>
                        <input type="password" id="password" name="password"
                            placeholder="Kosongkan jika tidak diganti..."
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                        <p class="text-sm text-gray-500 mt-1">*Abaikan jika tidak ingin mengubah password.</p>
                    </div>

                    <div class="space-y-2">
                        <label for="password_confirmation" class="font-medium text-gray-700">Konfirmasi Password Baru</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="Ulangi password baru..."
                            class="w-full border border-gray-300 px-4 py-2.5 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                    </div>
                </div>

                <div class="pt-4 flex justify-end">
                    <button type="submit"
                        class="bg-primary hover:bg-green-700 transition text-white font-bold py-3 px-8 rounded-lg shadow-lg flex items-center gap-2">
                        <i class="fa-solid fa-save"></i> Update User
                    </button>
                </div>

            </form>
        </div>

    </div>
</x-admin-layout>