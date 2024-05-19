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
        @if (session('message'))
            <div role="alert" class="alert alert-success">
                <i class="bi bi-check-circle text-white"></i>
                <span class="text-white">{{ session('message') }}</span>
            </div>
        @endif
        @if (session('error'))
            <div role="alert" class="alert alert-error">
                <i class="bi bi-x-circle text-white"></i>
                <span class="text-white">{{ session('error') }}</span>
            </div>
        @endif
        <form action="{{ route('actionLogin') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="username" class="font-bold block mb-2">Username</label>
                <input type="username" id="username" name="username"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500">
            </div>
            <div class="mb-4">
                <label for="password" class="font-bold block mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500">
            </div>
            <div class="text-center">
                <button type="submit"
                    class="font-bold bg-yellow-300 text-black px-4 py-2 rounded-2xl hover:bg-yellow-30 focus:outline-none focus:bg-yellow-500">Login</button>
            </div>
        </form>
        <p class="px-4 py-2">Belum punya akun? <a href="/register_pembeli" class="font-bold text-green-900">Daftar</a>
        </p>
    </div>
</body>

</html>
