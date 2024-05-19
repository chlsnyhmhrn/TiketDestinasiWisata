<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orderan Masuk</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('penjual.navbar_penjual')
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
            <p class="text-2xl font-bold mt-4 mx-4">Orderan Masuk</p>
            <!-- star card produk -->
            <div class="max-w-4xl flex flex-col mt-9 ml-16 ">
                <div class="card lg:card-side bg-base-100 shadow-xl p-2 max-w-3xl ">
                    <div class="flex flex-col">
                        <div class="flex">
                            <i class="bi bi-person-circle text-warning" style="font-size: 24px;"></i>
                            <p class="font-semibold text-md ml-2 p-1">Third_Buyer01</p>
                        </div>

                        <figure><img src="../img/2.jpg" class="w-60 h-50 px-2 py-2 rounded-xl " alt="Album" /></figure>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title flex-1 font-bold">Mega Wisata Ocarina, Batam</h2>
                        <div class="flex">
                            <i class="bi bi-geo-alt text-warning"></i>
                            <p class=ml-1>Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                        </div>
                        <p class="font-semibold">Dewasa :</p>
                        <div class="flex">
                            <span class="text-red-500 font-semibold">Rp. 40.000</span>
                            <span class="font-semibold ml-10">2x</span>
                        </div>
                        <p class="font-semibold">Anak - Anak</p>
                        <div class="flex">
                            <span class="text-red-500 font-semibold">Rp. 25.000</span>
                            <span class="font-semibold ml-10">1x</span>
                        </div>
                        <div class="flex">
                            <p class="font-semibold text-lg">Total Pesanan : <span
                                    class="text-red-500 font-semibold">Rp. 105.000</span></p>
                            <div class="mb-4">
                                <select id="status-pesanan" name="status-pesanan"
                                    class="w-lg px-4 py-2 border border-gray-300 bg-success text-white rounded-md cursor-pointer focus:outline-none">
                                    <option value="pesanan-masuk">Pesanan Masuk</option>
                                    <option value="pesanan-selesai">Pesanan Selesai</option>
                                    <option value="pesanan-selesai">Tolak Pesanan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card produk -->
            <!-- star card produk -->
            <div class="max-w-4xl flex flex-col mt-9 ml-16 ">
                <div class="card lg:card-side bg-base-100 shadow-xl p-2 max-w-3xl ">
                    <div class="flex flex-col">
                        <div class="flex">
                            <i class="bi bi-person-circle text-warning" style="font-size: 24px;"></i>
                            <p class="font-semibold text-md ml-2 p-1">Third_Buyer01</p>
                        </div>

                        <figure><img src="../img/2.jpg" class="w-60 h-50 px-2 py-2 rounded-xl " alt="Album" /></figure>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title flex-1 font-bold">Mega Wisata Ocarina, Batam</h2>
                        <div class="flex">
                            <i class="bi bi-geo-alt text-warning"></i>
                            <p class=ml-1>Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                        </div>
                        <p class="font-semibold">Dewasa :</p>
                        <div class="flex">
                            <span class="text-red-500 font-semibold">Rp. 40.000</span>
                            <span class="font-semibold ml-10">2x</span>
                        </div>
                        <p class="font-semibold">Anak - Anak</p>
                        <div class="flex">
                            <span class="text-red-500 font-semibold">Rp. 25.000</span>
                            <span class="font-semibold ml-10">1x</span>
                        </div>
                        <div class="flex">
                            <p class="font-semibold text-lg">Total Pesanan : <span
                                    class="text-red-500 font-semibold">Rp. 105.000</span></p>
                            <div class="mb-4">
                                <select id="status-pesanan" name="status-pesanan"
                                    class="w-lg px-4 py-2 border border-gray-300 bg-success text-white rounded-md cursor-pointer focus:outline-none">
                                    <option value="pesanan-masuk">Pesanan Masuk</option>
                                    <option value="pesanan-selesai">Pesanan Selesai</option>
                                    <option value="pesanan-selesai">Tolak Pesanan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card produk -->
            <!-- star card produk -->
            <div class="max-w-4xl flex flex-col mt-9 ml-16 ">
                <div class="card lg:card-side bg-base-100 shadow-xl p-2 max-w-3xl ">
                    <div class="flex flex-col">
                        <div class="flex">
                            <i class="bi bi-person-circle text-warning" style="font-size: 24px;"></i>
                            <p class="font-semibold text-md ml-2 p-1">Third_Buyer01</p>
                        </div>

                        <figure><img src="../img/2.jpg" class="w-60 h-50 px-2 py-2 rounded-xl " alt="Album" /></figure>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title flex-1 font-bold">Mega Wisata Ocarina, Batam</h2>
                        <div class="flex">
                            <i class="bi bi-geo-alt text-warning"></i>
                            <p class=ml-1>Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                        </div>
                        <p class="font-semibold">Dewasa :</p>
                        <div class="flex">
                            <span class="text-red-500 font-semibold">Rp. 40.000</span>
                            <span class="font-semibold ml-10">2x</span>
                        </div>
                        <p class="font-semibold">Anak - Anak</p>
                        <div class="flex">
                            <span class="text-red-500 font-semibold">Rp. 25.000</span>
                            <span class="font-semibold ml-10">1x</span>
                        </div>
                        <div class="flex">
                            <p class="font-semibold text-lg">Total Pesanan : <span
                                    class="text-red-500 font-semibold">Rp. 105.000</span></p>
                            <div class="mb-4">
                                <select id="status-pesanan" name="status-pesanan"
                                    class="w-lg px-4 py-2 border border-gray-300 bg-success text-white rounded-md cursor-pointer focus:outline-none">
                                    <option value="pesanan-masuk">Pesanan Masuk</option>
                                    <option value="pesanan-selesai">Pesanan Selesai</option>
                                    <option value="pesanan-selesai">Tolak Pesanan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card produk -->
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
                                <a href="#" class="ml-4 text-xl">Orderan Masuk</a>
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