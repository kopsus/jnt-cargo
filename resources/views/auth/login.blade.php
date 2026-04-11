<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-primary mb-6 text-center">Login CMS J&T Cargo</h2>

        <form action="/login" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" name="email" class="w-full border rounded-lg p-2.5 border-primary" required
                    placeholder="example@gmail.com">
            </div>
            <div>
                <label class="block mb-1 font-medium">Password</label>
                <input type="password" name="password" class="w-full border rounded-lg p-2.5 border-primary" required
                    placeholder="••••••••">
            </div>
            @if ($errors->any())
                <p class="text-red-500 text-sm italic">{{ $errors->first() }}</p>
            @endif
            <button type="submit"
                class="w-full bg-primary text-white font-bold py-2.5 rounded-lg hover:bg-green-800 transition">Login</button>
        </form>
    </div>
</body>

</html>
