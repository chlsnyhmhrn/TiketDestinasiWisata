<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body style="background-color: #E7ECF1">
    @include('admin.navbar_admin')
</div>
<div class="flex flex-col md:flex-row h-screen bg-gray-100">
    @include('admin.sidebar_admin')

    <div class="flex-1 w-4/5">
        <div class="p-8 bg-white lg:w-fit lg:mt-6 md:w-auto mb-8 md:mt-0 md:ml-4 rounded-xl">
            <h1 class="text-4xl">Selamat Datang <span class="font-bold">Admin</span></h1>
        </div>
        <div class="flex flex-wrap justify-center md:justify-start gap-5">

            <div class="flex flex-col p-4 items-center bg-white md:w-72 mt-4 md:mt-0 md:ml-4 rounded-lg shadow-md" id="totalPesanan">
                <span class="my-2 text-3xl text-warning">999</span>
                <span class="my-2 text-xl">Pesanan</span>
                <button class="btn btn-success btn-sm my-2 w-44 text-white bi bi-pencil-square">Aksi</button>
            </div>
            <div class="flex flex-col p-4 items-center bg-white md:w-72 mt-4 md:mt-0 md:ml-4 rounded-lg shadow-md" id="totalDestinasiTerdaftar">
                <span class="my-2 text-3xl text-warning">999</span>
                <span class="my-2 text-xl">Destinasi Terdaftar</span>
                <button class="btn btn-success btn-sm my-2 w-44 text-white bi bi-pencil-square">Aksi</button>
            </div>
            <div class="flex flex-col p-4 items-center bg-white md:w-72 mt-4 md:mt-0 md:ml-4 rounded-lg shadow-md" id="riwayatTiketTerjual">
                <span class="my-2 text-3xl text-warning">Rp. 999.000-</span>
                <span class="my-2 text-xl">Tiket Terjual</span>
                <button class="btn btn-success btn-sm my-2 w-44 text-white bi bi-pencil-square">Aksi</button>
            </div>
            <div class="flex flex-col p-4 items-center bg-white md:w-72 mt-4 md:mt-0 md:ml-4 rounded-lg shadow-md" id="totalAkunPenjual">
                <span class="my-2 text-3xl text-warning">999</span>
                <span class="my-2 text-xl">Akun Penjual</span>
                <button class="btn btn-success btn-sm my-2 w-44 text-white bi bi-pencil-square">Aksi</button>
            </div>
            <div class="flex flex-col p-4 items-center bg-white md:w-72 mt-4 md:mt-0 md:ml-4 rounded-lg shadow-md" id="totalAkunPembeli">
                <span class="my-2 text-3xl text-warning">999</span>
                <span class="my-2 text-xl">Akun Pembeli</span>
                <button class="btn btn-success btn-sm my-2 w-44 text-white bi bi-pencil-square">Aksi</button>
            </div>
        </div>
    </div>
</body>
</html>