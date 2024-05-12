<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Pembeli</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-success flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-md w-120">
        <h2 class="text-2xl font-bold text-center mb-8">Buat Akun Gratis</h2>
        <div class="flex items-center mb-4">
            <div class="w-1/2 mr-2">
                <button type="button" id="penjual" name="rolepenjual"
                    class="w-full px-2 py-2 border rounded-md focus:outline-none focus:border-green-500 bg-success text-white">Daftar
                    Sebagai Penjual</button>
            </div>
            <div class="w-1/2 ml-2">
                <a href="/registerPembeli"><button type="button" id="pembeli" name="rolepembeli"
                        class="w-full px-2 py-2 border rounded-md focus:outline-none focus:border-green-500">Daftar
                        Sebagai Pembeli</button></a>
            </div>
        </div>
        <form id="registrationForm">
            <div class="mb-4" id="storeNameInput">
                <label for="storeName" class="font-bold block mb-2">Nama Toko</label>
                <input type="text" id="storeName" name="storeName"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500">
            </div>
            <div class="mb-4">
                <label for="email" class="font-bold block mb-2">Email</label>
                <input type="email" id="email" name="email"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500">
            </div>
            <div class="flex items-center mb-4">
                <div class="w-1/2 mr-2">
                    <label for="firstName" class="font-bold block mb-2">Nama Depan</label>
                    <input type="text" id="firstName" name="firstName"
                        class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500">
                </div>
                <div class="w-1/2 ml-2">
                    <label for="lastName" class="font-bold block mb-2">Nama Belakang</label>
                    <input type="text" id="lastName" name="lastName"
                        class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500">
                </div>
            </div>
            <div class="mb-4">
                <label for="password" class="font-bold block mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:border-green-500">
            </div>
            <div class="text-center">
                <button type="submit"
                    class="font-bold bg-yellow-300 text-black px-4 py-2 rounded-2xl hover:bg-yellow-30 focus:outline-none focus:bg-yellow-500">Daftar</button>
            </div>
        </form>
        <p class="px-4 py-2">Sudah punya akun? <a href="/masuk" class="font-bold text-green-900">Masuk</a></p>
    </div>
</body>

</html>