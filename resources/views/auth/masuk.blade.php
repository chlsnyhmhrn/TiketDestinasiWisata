<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-success flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-md w-120">
        <h2 class="text-2xl font-bold text-center mb-8">Selamat Datang Di Wonderwoo</h2>
        @if (session('success'))
            <div id="alert" class="fixed top-5 right-4 z-50">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative shadow-md"
                    role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            </div>
        @endif
        @if (session('error'))
            <div id="alert" class="fixed top-5 right-4 z-50">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative shadow-md"
                    role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            </div>
        @endif
        <form action="{{ route('actionLogin') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="username" class="font-bold block mb-2">Username</label>
                <input type="username" id="username" name="username"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="font-bold block mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500" required>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="font-bold bg-yellow-300 text-black px-4 py-2 rounded-2xl hover:bg-yellow-30 focus:outline-none focus:bg-yellow-500">Login</button>
            </div>
        </form>
        <p class="px-4 py-2">Belum punya akun? <a href="/register_pembeli" class="font-bold text-green-900">Daftar</a>
        </p>
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
