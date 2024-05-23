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
        <div class="flex flex-col md:flex-row bg-gray-100">
            @include('penjual.sidebar_penjual')
            <div class="flex flex-col w-full px-8 py-10">

                <div class="max-w-full flex flex-col gap-5">

                    <p class="text-2xl font-bold mt-4 mx-4">Orderan Masuk</p>

                    <div class="card lg:card-side bg-base-100 shadow-xl p-2 w-full ">
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
                    <div class="card lg:card-side bg-base-100 shadow-xl p-2 w-full ">
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
                    <div class="card lg:card-side bg-base-100 shadow-xl p-2 w-full ">
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
                        <!-- Tambahkan sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </body>
</html>