<x-admin-layout>
    <div class="space-y-6">
        <h1 class="text-3xl font-bold text-gray-800">Dashboard Overview</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4 transition hover:shadow-md">
                <div class="w-14 h-14 bg-green-100 text-primary rounded-full flex items-center justify-center text-2xl">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-500 font-medium">Total Artikel</p>
                    <p class="text-3xl font-bold text-gray-800">{{ $totalArticles }}</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4 transition hover:shadow-md">
                <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-2xl">
                    <i class="fa-solid fa-tags"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-500 font-medium">Total Voucher</p>
                    <p class="text-3xl font-bold text-gray-800">{{ $totalVouchers }}</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4 transition hover:shadow-md">
                <div class="w-14 h-14 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center text-2xl">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-500 font-medium">Total User</p>
                    <p class="text-3xl font-bold text-gray-800">{{ $totalUsers }}</p>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>