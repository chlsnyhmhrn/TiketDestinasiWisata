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
    @include('penjual.navbar_penjual')
    <div class="flex flex-col md:flex-row h-screen bg-gray-100">
        <!-- start Sidebar -->
        <aside class="w-full md:w-64 bg-success text-white">
            <div class="flex flex-wrap ml-3 mt-2">
                <i class="bi bi-person-gear text-6xl text-warning"></i>
                <div class="flex flex-col mt-2 ml-4">
                    <a href="#" class="font-bold text-2xl">Seller_01</a>
                    <span class="font-semibold text-lg">Penjual</span>
                </div>
            </div>
            <ul class="py-4 md:py-0 text-center mt-8 md:overflow-y-auto">
                <li>
                    <span class="text-3xl font-bold">DAFTAR MENU</span>
                </li>
                <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer mt-6">
                    <div class="flex items-center">
                        <i class="bi bi-border-all text-warning text-3xl"></i>
                        <a href="#" class="ml-4 text-xl">Dashboard</a>
                    </div>
                </li>
                <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer">
                    <div class="flex items-center">
                        <i class="bi bi-building-down text-warning text-3xl"></i>
                        <a href="/orderan_masuk" class="ml-4 text-xl">Orderan Masuk</a>
                    </div>
                </li>
                <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer">
                    <div class="flex items-center">
                        <i class="bi bi-building-fill-check text-warning text-3xl "></i>
                        <a href="/riwayat_pesanan" class="ml-4 text-xl">Riwayat Pesanan</a>
                    </div>
                </li>
                <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer">
                    <div class="flex items-center">
                        <i class="bi bi-clock-history text-warning text-3xl"></i>
                        <a href="#" class="ml-4 text-xl">Riwayat Transaksi</a>
                    </div>
                </li>
            </ul>
        </aside>
        <!-- End Sidebar -->
        <!-- Content -->
        <div class="flex-1">
            <div class="p-8 bg-white w-full md:w-auto mt-4 md:mt-0 md:ml-4 rounded-xl">
                <h1 class="text-4xl">Selamat Datang <span class="font-bold">Seller_01</span></h1>
            </div>
            <div class="flex flex-wrap justify-center md:justify-start py-5">
                <!--card item-->
                <div class="flex flex-col p-4 items-center bg-white w-full md:w-80 mt-4 md:mt-0 md:ml-4 rounded-lg shadow-md">
                    <span class="my-2 text-3xl text-warning">999</span>
                    <span class="my-2 text-xl">Orderan Masuk</span>
                    <button class="btn btn-primary btn-sm my-2 w-44 text-white bi bi-pencil-square">Aksi</button>
                </div>
                <div class="flex flex-col p-4 items-center bg-white w-full md:w-80 mt-4 md:mt-0 md:ml-4 rounded-lg shadow-md">
                    <span class="my-2 text-3xl text-warning">999</span>
                    <span class="my-2 text-xl">Riwayat Pesanan</span>
                    <button class="btn btn-primary btn-sm my-2 w-44 text-white bi bi-pencil-square">Aksi</button>
                </div>
                <div class="flex flex-col p-4 items-center bg-white w-full md:w-80 mt-4 md:mt-0 md:ml-4 rounded-lg shadow-md">
                    <span class="my-2 text-3xl text-warning">Rp. 999.000-</span>
                    <span class="my-2 text-xl">Total Pemasukan</span>
                    <button class="btn btn-primary btn-sm my-2 w-44 text-white bi bi-pencil-square">Aksi</button>
                </div>
                <!--end card item-->
            </div>
        </div>
    </div>
</body>
</html>