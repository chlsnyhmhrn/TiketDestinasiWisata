<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@heroicons/vue@latest/dist/heroicons.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Orderan Masuk</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Poppins;
            margin: 0;
            /* Hapus margin default */
            overflow-x: hidden;
            /* Agar tidak muncul scroll horizontal */
        }

        .header {
            color: #fff;
            background-color: #004643;
            width: 100%;
            position: fixed;
            /* Tetap di bagian atas */
            top: 0;
            /* Atur posisi di bagian atas */
            left: 0;
            /* Atur posisi di bagian kiri */
            z-index: 1000;
            /* Agar tetap di atas konten lain */
        }

        .warna {
            background-color: #004643;
        }

        .sidebar {
            background-color: #004643;
            width: 240px;
            height: 100vh;
            /* Mengisi tinggi layar */
            position: fixed;
            /* Tetap di samping kiri */
            top: 0;
            /* Atur posisi di bagian atas */
            left: 0;
            /* Atur posisi di bagian kiri */
            overflow-y: auto;
            /* Jika konten lebih panjang, munculkan scrollbar */
            padding-top: 60px;
            /* Padding atas agar tidak bertabrakan dengan header */
        }

        .content {
            margin-left: 240px;
            /* Atur margin kiri agar tidak bertabrakan dengan sidebar */
            padding-top: 60px;
            /* Padding atas agar tidak bertabrakan dengan header */
        }

        .card {
            height: 300px;
            width: 100%;
            border-radius: 0 20px 0 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1), 4px 0px 8px rgba(0, 0, 0, 0.1);
        }

        .price {
            color: #900404;
        }

        .option-dropdown {
            background-color: #004643;
            color: #fff;
        }

        .lokasi {
            width: 20px;
            height: 20px;
        }

        #produk-foto {
            width: 340px;
            height: 200px;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="header h-16 font-bold p-2 text-3xl">WonderWoo</div>
    </header>
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-6">
        <div class="mx-auto max-w-2xl py-10 lg:max-w-none">
        <h2 class="text-2xl font-bold text-gray-900 py-4">Data Diri</h2>
            <div class="flex">
                <!-- Start SideBar  -->
                <div class="sidebar warna text-white">
                    <hr>
                    <div class="flex items-center p-3">
                        <img src="./assets/images/penjual/account.png" alt="" class="p-3">
                        <div class="flex flex-col mt-5 ml-2">
                            <a href="#" class="text-lg font-bold">Seller_01</a>
                            <a href="#" class="text-lg font-bold h-14">Penjual</a>
                        </div>
                    </div>
                    <p class="text-xl font-bold ml-5 mb-8">DAFTAR MENU</p>
                    <div class="flex items-center ml-2">
                        <img src="./assets/images/penjual/dashboard.png" alt="">
                        <a href="#" class="hover:underline h-12 p-5 text-base">Dashboard</a>
                    </div>
                    <div class="flex items-center mt-2 ml-2 mr-1">
                        <img src="./assets/images/penjual/orderan_masuk.png" alt="">
                        <a href="#" class="hover:underline p-5 text-sm">Orderan Masuk</a>
                    </div>
                    <div class="flex items-center mt-2 ml-1">
                        <img src="./assets/images/penjual/riwayat_pesanan.png" alt="">
                        <a href="#" class="hover:underline p-5 text-sm">Riwayat Pesanan</a>
                    </div>
                    <div class="flex items-center mt-2 ml-1">
                        <img src="./assets/images/penjual/riwayat_transaksi.png" alt="">
                        <a href="{{route('riwayatTransaksi') }}" class="hover:underline p-5 text-sm">Riwayat Transaksi</a>
                    </div>
                </div>
                <!-- End SideBar -->
                <div class="content ml-64">
                    <div class="text-xl font-bold p-2">Orderan Masuk</div>
                    <!-- Start Produk Card -->
                    <div class="flex card mt-5 m-10 p-4 relative">
                        <div class="flex absolute top-0 left-0 p-2">
                            <img src="./assets/images/penjual/pict_buyer.png" alt="">
                            <span class="font-bold ml-2">third_buyer03</span>
                        </div>
                        <!-- Kolom Kiri (Foto) -->
                        <div class="w-1/3 p-4 mt-5 mr-3">
                            <img src="./assets/images/penjual/costarina.jpg" alt="" class="rounded-lg" id="produk-foto">
                        </div>
                        <!-- Kolom Kanan (Deskripsi) -->
                        <div class="w-1/2 p-2 ml-8 mt-10">
                            <h2 class="text-xl font-bold mb-2">Mega Wisata Ocarina, Batam</h2>
                            <div class="flex">
                                <img src="./assets/images/penjual/lokasi.png" alt="" class="lokasi mt-1">
                                <p class="text-gray-700 ml-2">Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                            </div>
                            <p class="ml-10 font-semibold">Dewasa :</p>
                            <span class="price mr-8 ml-10 font-bold">Rp. 4000</span> <span class="font-bold">2x</span>
                            <p class="ml-10 font-semibold">Anak - Anak :</p>
                            <span class="price mr-8 ml-10 font-bold">Rp. 4000</span> <span class="font-bold">2x</span>
                            <div class="flex">
                                <p class="font-bold text-xl ml-10 mt-3 mb-3">Total : <span class="price font-bold">Rp. 16000</span></p>
                                <form action="" method="get" class="ml-6 mt-3">
                                    <select name="" id="" class="option-dropdown hover:cursor-pointer rounded-lg h-7">
                                        <option value="penjual">Pesanan Masuk</option>
                                        <option value="pembeli">Konfirmasi Pesanan</option>
                                        <option value="pembeli">Tolak Pesanan</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end produk card  -->

                    <!-- Start Produk Card -->
                    <div class="flex card mt-5 m-10 p-4 relative">
                        <div class="flex absolute top-0 left-0 p-2">
                            <img src="./assets/images/penjual/pict_buyer.png" alt="">
                            <span class="font-bold ml-2">third_buyer03</span>
                        </div>
                        <!-- Kolom Kiri (Foto) -->
                        <div class="w-1/3 p-4 mt-5 mr-3">
                            <img src="./assets/images/penjual/costarina.jpg" alt="" class="rounded-lg" id="produk-foto">
                        </div>
                        <!-- Kolom Kanan (Deskripsi) -->
                        <div class="w-1/2 p-2 ml-8 mt-10">
                            <h2 class="text-xl font-bold mb-2">Mega Wisata Ocarina, Batam</h2>
                            <div class="flex">
                                <img src="./assets/images/penjual/lokasi.png" alt="" class="lokasi mt-1">
                                <p class="text-gray-700 ml-2">Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                            </div>
                            <p class="ml-10 font-semibold">Dewasa :</p>
                            <span class="price mr-8 ml-10 font-bold">Rp. 4000</span> <span class="font-bold">2x</span>
                            <p class="ml-10 font-semibold">Anak - Anak :</p>
                            <span class="price mr-8 ml-10 font-bold">Rp. 4000</span> <span class="font-bold">2x</span>
                            <div class="flex">
                                <p class="font-bold text-xl ml-10 mt-3 mb-3">Total : <span class="price font-bold">Rp. 16000</span></p>
                                <form action="" method="get" class="ml-6 mt-3">
                                    <select name="" id="" class="option-dropdown hover:cursor-pointer rounded-lg h-7">
                                        <option value="penjual">Pesanan Masuk</option>
                                        <option value="pembeli">Konfirmasi Pesanan</option>
                                        <option value="pembeli">Tolak Pesanan</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end produk card  -->

                    <!-- start Produk Card -->
                    <div class="flex card mt-5 m-10 p-4 relative">
                        <div class="flex absolute top-0 left-0 p-2">
                            <img src="./assets/images/penjual/pict_buyer.png" alt="">
                            <span class="font-bold ml-2">third_buyer03</span>
                        </div>
                        <!-- Kolom Kiri (Foto) -->
                        <div class="w-1/3 p-4 mt-5 mr-3">
                            <img src="./assets/images/penjual/costarina.jpg" alt="" class="rounded-lg" id="produk-foto">
                        </div>
                        <!-- Kolom Kanan (Deskripsi) -->
                        <div class="w-1/2 p-2 ml-8 mt-10">
                            <h2 class="text-xl font-bold mb-2">Mega Wisata Ocarina, Batam</h2>
                            <div class="flex">
                                <img src="./assets/images/penjual/lokasi.png" alt="" class="lokasi mt-1">
                                <p class="text-gray-700 ml-2">Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                            </div>
                            <p class="ml-10 font-semibold">Dewasa :</p>
                            <span class="price mr-8 ml-10 font-bold">Rp. 4000</span> <span class="font-bold">2x</span>
                            <p class="ml-10 font-semibold">Anak - Anak :</p>
                            <span class="price mr-8 ml-10 font-bold">Rp. 4000</span> <span class="font-bold">2x</span>
                            <div class="flex">
                                <p class="font-bold text-xl ml-10 mt-3 mb-3">Total : <span class="price font-bold">Rp. 16000</span></p>
                                <form action="" method="get" class="ml-6 mt-3">
                                    <select name="" id="" class="option-dropdown hover:cursor-pointer rounded-lg h-7">
                                        <option value="penjual">Pesanan Masuk</option>
                                        <option value="pembeli">Konfirmasi Pesanan</option>
                                        <option value="pembeli">Tolak Pesanan</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end produk card  -->
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>