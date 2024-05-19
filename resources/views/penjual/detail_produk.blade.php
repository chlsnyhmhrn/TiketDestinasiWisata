<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>
    @vite('resources/css/app.css')
</head>
<body style="background-color: #E7ECF1">
    @include('penjual.navbar_penjual')
</div>
<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col">
        <!-- Page content here -->
        <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
        <!-- Content -->
        <div class="flex-1">
            <div class="flex w-full my-2 items-center justify-around">
                <p class="text-2xl font-bold mt-4 mx-4 flex-grow">Detail Produk</p>
                <button class="btn btn-sm bg-success w-32 rounded-xl text-white hover:text-white hover:bg-primary mt-6 mr-24">Edit</button>
            </div>
            <div class="flex flex-wrap justify-center w-[100%] md:justify-start py-5">
                <!--card item-->
                <div class="flex ml-12 gap-1">
                    <div>
                        <img src="{{ asset('img/megaocarina.jpg') }}" alt="costarina" class="h-72 w-[720px] rounded-lg">
                    </div>
                    <div class="flex flex-wrap gap-1">
                        <img src="{{ asset('img/1.jpg') }}" alt="costarina" class="w-48 h-36 rounded-lg">
                        <img src="{{ asset('img/2.jpg') }}" alt="costarina" class="w-48 h-36 rounded-lg">
                        <img src="{{ asset('img/2.jpg') }}" alt="costarina" class="w-48 h-36 rounded-lg">
                        <img src="{{ asset('img/1.jpg') }}" alt="costarina" class="w-48 h-36 rounded-lg">
                    </div>
                </div>
                <!--end card item-->
                {{-- deskripsi --}}
                <div class="flex flex-col">
                    <h1 class="ml-12 mt-6 font-bold text-xl capitalize">mega wisata ocarina, batam</h1>
                    <div class="flex mt-1 ml-14">
                        <i class="bi bi-geo-alt text-warning"></i>
                        <p class=ml-1>Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                    </div>
                    <p class="ml-12 w-1/2 mt-2 capitalize bg-gray-300 p-2 rounded-md">
                        Nikmati liburan tak terlupakan di Mega Wisata Ocarina, Batam. Dengan wahana-wahana menarik dan hiburan yang mengasyikkan, kami adalah destinasi yang sempurna untuk semua orang yang mencari kesenangan dan petualangan. Dari perjalanan menegangkan di wahana permainan hingga kegiatan santai di taman bermain, kami menawarkan pengalaman liburan yang memikat hati untuk semua anggota keluarga. Dapatkan tiket Anda sekarang dan buatlah kenangan indah di Mega Wisata Ocarina!
                    </p>
                    <div class="price flex ml-12 mt-4 ">
                        <div class="flex flex-col my-2 bg-white w-[200px] rounded-xl p-4 shadow-md">
                            <span class="font-bold text-xl">Harga Tiket</span>
                            <span class="font-semibold">Dewasa : </span>
                            <span class="text-red-500">Rp. 40.000</span>
                            <span class="font-semibold">Anak - Anak : </span>
                            <span class="text-red-500">Rp. 25.000</span>
                        </div>
                        <div class="flex flex-col ml-6 my-6">
                            <span class="font-bold text-xl mb-1">Jam Operasional</span>
                            <span class="mb-2">Senin - Jumat :08.00 - 22.00</span>
                            <span class="mb-2">Sabtu :08.00 - 23.00</span>
                            <span>Minggu :06.00 - 23.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start sideBar Menu -->
    <div class="drawer-side ">
        <aside class="w-full h-screen overflow-hidden md:w-64 bg-success  text-white">
            <div class="flex flex-wrap ml-3 mt-2">
                <i class="bi bi-person-gear text-6xl text-warning"></i>
                <div class="flex flex-col mt-2 ml-4">
                    <a href="/edit_data" class="font-bold text-2xl">Seller_01</a>
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
                        <a href="/penjual/dashboard" class="ml-4 text-xl">Dashboard</a>
                    </div>
                </li>
                <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer">
                    <div class="flex items-center">
                        <i class="bi bi-tags text-warning text-3xl"></i>
                        <a href="/penjual/detail_produk" class="ml-4 text-xl">Detail Produk</a>
                    </div>
                </li>
                <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer">
                    <div class="flex items-center">
                        <i class="bi bi-building-down text-warning text-3xl"></i>
                        <a href="/penjual/orderan_masuk" class="ml-4 text-xl">Orderan Masuk</a>
                    </div>
                </li>
                <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer">
                    <div class="flex items-center">
                        <i class="bi bi-building-fill-check text-warning text-3xl "></i>
                        <a href="/penjual/riwayat_pesanan" class="ml-4 text-xl">Riwayat Pesanan</a>
                    </div>
                </li>
                <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer">
                    <div class="flex items-center">
                        <i class="bi bi-clock-history text-warning text-3xl"></i>
                        <a href="/penjual/riwayat_transaksi" class="ml-4 text-xl">Riwayat Transaksi</a>
                    </div>
                </li>
            </ul>
        </aside>
    </div>
    <!-- end SideBar Menu -->
</div>
</body>
</html>