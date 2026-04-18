<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - J&T Cargo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-gray-50 flex h-screen overflow-hidden text-gray-800">

    <aside class="w-64 bg-footer text-white flex-col hidden md:flex h-full shadow-xl">
        <div class="h-16 flex items-center justify-center">
            <img src="/images/logo-primary.png" alt="" class="h-12">
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="/admin/dashboard"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->is('admin/dashboard') ? 'bg-secondary text-primary font-bold' : 'hover:bg-green-700' }}">
                <i class="fa-solid fa-chart-line w-5"></i>
                Dashboard
            </a>

            <a href="/admin/articles"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->is('admin/articles*') ? 'bg-secondary text-primary font-bold' : 'hover:bg-green-700' }}">
                <i class="fa-solid fa-newspaper w-5"></i>
                Artikel
            </a>
            <a href="/admin/users"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->is('admin/users*') ? 'bg-secondary text-primary font-bold' : 'hover:bg-green-700' }}">
                <i class="fa-solid fa-users w-5"></i>
                User
            </a>
            <a href="/admin/vouchers"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->is('admin/vouchers*') ? 'bg-secondary text-primary font-bold' : 'hover:bg-green-700' }}">
                <i class="fa-solid fa-tags w-5"></i>
                Voucher
            </a>
        </nav>

        <form action="/logout" method="POST" class="p-4 border-t border-green-800">
            @csrf
            <button type="submit"
                class="w-full flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-red-600 transition text-white text-left">
                <i class="fa-solid fa-right-from-bracket w-5"></i>
                Logout
            </button>
        </form>
    </aside>

    <div class="flex-1 flex flex-col h-full relative overflow-y-auto">
        <header class="h-16 bg-white shadow flex items-center justify-between px-6 sticky top-0 z-10">
            <button class="md:hidden text-primary text-2xl">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="ml-auto flex items-center gap-4">
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-primary">
                    <i class="fa-solid fa-user"></i>
                </div>
                <span class="font-medium">Halo, {{ auth()->user()->name }}!</span>
            </div>
        </header>
        <main class="p-6">
            {{ $slot }}
        </main>
    </div>

</body>

</html>