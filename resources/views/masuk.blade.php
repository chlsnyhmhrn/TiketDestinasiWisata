<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-success flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-md w-120">
        <h2 class="text-2xl font-bold text-center mb-8">Selamat Datang Di Wonderwoo</h2>
        <form>
            <div class="mb-4">
                <label for="role" class="font-bold block mb-2">Role</label>
                <select id="role" name="role"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500 ">
                    <option value="penjual">Penjual</option>
                    <option value="pembeli">Pembeli</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="email" class="font-bold block mb-2">Email</label>
                <input type="email" id="email" name="email"
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
        <p class="px-4 py-2">Belum punya akun? <a href="/registerPembeli" class="font-bold text-green-900">Daftar</a>
        </p>
    </div>
</body>

</html>