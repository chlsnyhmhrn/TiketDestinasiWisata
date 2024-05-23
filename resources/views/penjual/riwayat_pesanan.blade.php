<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('penjual.navbar_penjual')
        <div class="flex flex-col min-h-screen md:flex-row bg-gray-100">
            @include('penjual.sidebar_penjual')
            <!-- star card produk -->
            <div class="flex flex-col w-full px-8 gap-5">
                <p class="text-2xl font-bold mt-4 mx-4">Riwayat Pesanan</p>
                {{--start card session--}}
                <div class="card lg:card-side ml-4 bg-base-100 shadow-xl p-2 max-w-full">
                    <div class="flex flex-col">
                        <div class="flex">
                            <i class="bi bi-person-circle text-warning" style="font-size: 24px;"></i>
                            <p class="font-semibold text-md ml-2 p-1">Third_Buyer01</p>
                        </div>
                        <figure><img src="../img/2.jpg" class="w-60 h-50 px-2 py-2 rounded-xl " alt="Album" /></figure>
                    </div>
                    <div class="card-body">
                        <div class="flex">
                            <h2 class="card-title flex-1 font-bold text-lg">Mega Wisata Ocarina, Batam</h2>
                            <span class="text-red-500 font-semibold text-md">Selesai</span>
                        </div>
                        <div class="flex">
                            <i class="bi bi-geo-alt text-warning"></i>
                            <p class=ml-1>Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                        </div>
                        <p class="font-semibold">x1</p>
                        <p class=" font-semibold text-sm">Total Pesanan : <span class="text-red-500 font-semibold">Rp.
                                40.000</span> </p>
                        <p class="font-semibold mt-3 text-sm">Tanggal Pembelian : 23-03-2024</p>
                    </div>
                </div>
                {{--end card session--}}
                {{--start card session--}}
                <div class="card lg:card-side ml-4 bg-base-100 shadow-xl p-2 max-w-full">
                    <div class="flex flex-col">
                        <div class="flex">
                            <i class="bi bi-person-circle text-warning" style="font-size: 24px;"></i>
                            <p class="font-semibold text-md ml-2 p-1">Third_Buyer01</p>
                        </div>
                        <figure><img src="../img/2.jpg" class="w-60 h-50 px-2 py-2 rounded-xl " alt="Album" /></figure>
                    </div>
                    <div class="card-body">
                        <div class="flex">
                            <h2 class="card-title flex-1 font-bold text-lg">Mega Wisata Ocarina, Batam</h2>
                            <span class="text-red-500 font-semibold text-md">Selesai</span>
                        </div>
                        <div class="flex">
                            <i class="bi bi-geo-alt text-warning"></i>
                            <p class=ml-1>Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                        </div>
                        <p class="font-semibold">x1</p>
                        <p class=" font-semibold text-sm">Total Pesanan : <span class="text-red-500 font-semibold">Rp.
                                40.000</span> </p>
                        <p class="font-semibold mt-3 text-sm">Tanggal Pembelian : 23-03-2024</p>
                    </div>
                </div>
                {{--end card session--}}
                {{--start card session--}}
                <div class="card lg:card-side ml-4 bg-base-100 shadow-xl p-2 max-w-full">
                    <div class="flex flex-col">
                        <div class="flex">
                            <i class="bi bi-person-circle text-warning" style="font-size: 24px;"></i>
                            <p class="font-semibold text-md ml-2 p-1">Third_Buyer01</p>
                        </div>
                        <figure><img src="../img/2.jpg" class="w-60 h-50 px-2 py-2 rounded-xl " alt="Album" /></figure>
                    </div>
                    <div class="card-body">
                        <div class="flex">
                            <h2 class="card-title flex-1 font-bold text-lg">Mega Wisata Ocarina, Batam</h2>
                            <span class="text-red-500 font-semibold text-md">Selesai</span>
                        </div>
                        <div class="flex">
                            <i class="bi bi-geo-alt text-warning"></i>
                            <p class=ml-1>Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                        </div>
                        <p class="font-semibold">x1</p>
                        <p class=" font-semibold text-sm">Total Pesanan : <span class="text-red-500 font-semibold">Rp.
                                40.000</span> </p>
                        <p class="font-semibold mt-3 text-sm">Tanggal Pembelian : 23-03-2024</p>
                    </div>
                </div>
                {{--end card session--}}
            </div>
        </div>
</body>

</html>