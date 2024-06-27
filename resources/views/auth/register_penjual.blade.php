<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Penjual</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-success flex justify-center items-center min-h-screen">
    @if (session('error'))
        <div id="alert" class="fixed top-5 right-4 z-50">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative shadow-md"
                role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        </div>
    @endif
    <div class="bg-white p-8 rounded-2xl shadow-md w-96">
        <h2 class="text-2xl font-bold text-center mb-8">Buat Akun Gratis</h2>
        <div class="flex gap-2 items-center mb-4">
            <div class="w-full">
                <a href="/register_pembeli"><button type="button" id="pembeli" name="rolepembeli"
                        class="w-full px-2 py-2 border rounded-md focus:outline-none focus:border-green-500">Pembeli</button></a>
            </div>
            <div class="w-full">
                <button type="button" id="penjual" name="rolepenjual"
                    class="w-full px-2 py-2 border rounded-md focus:outline-none focus:border-green-500 bg-success text-white">Penjual</button>
            </div>
        </div>
        <form id="registrationForm" action="{{ route('actionRegister') }}" method="post">
            @csrf
            <div class="mb-4" hidden>
                <label for="user_type" class="font-bold block mb-2">type User</label>
                <input type="number" value="2" id="user_type" name="user_type"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500"
                    required>
            </div>
            <div class="mb-4" id="usernameInput">
                <label for="username" class="font-bold block mb-2">Username</label>
                <input type="text" id="username" name="username"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="email" class="font-bold block mb-2">Email</label>
                <input type="email" id="email" name="email"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="password" class="font-bold block mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500"
                    required>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="font-bold bg-yellow-300 text-black px-4 py-2 rounded-2xl hover:bg-yellow-30 focus:outline-none focus:bg-yellow-500">Daftar</button>
            </div>
        </form>
        <p class="px-4 py-2">Sudah punya akun? <a href="/login" class="font-bold text-green-900">Masuk</a></p>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Close alert after 2 seconds
            setTimeout(function() {
                const alert = document.getElementById('alert');
                if (alert) {
                    alert.remove();
                }
            }, 5000);
        });
    </script>
</body>

</html>
