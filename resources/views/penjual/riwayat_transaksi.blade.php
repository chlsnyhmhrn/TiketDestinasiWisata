<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Transaksi</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('penjual.navbar_penjual')
    <div class="flex flex-col md:flex-row h-screen bg-gray-100">
        <!-- start Sidebar -->
        <aside class="w-full md:w-64 bg-success text-white">
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
        <!-- End Sidebar -->
        <!-- Content -->
        <div class="flex-1">
            <div class="flex flex-wrap justify-center md:justify-start py-5">
                <!--card item-->
                <div class="flex justify-evenly bg-white rounded-lg shadow-md ml-4 w-96">
                    <a href="/penjual/riwayat_pesanan">
                        <div class="flex flex-col border-r-2 border-gray-300 p-4 ">
                            <span class="my-2 text-xl font-bold">Tiket Terjual</span>
                            <span class="my-2 text-xl text-warning">15</span>
                        </div>
                    </a>
                    <div class="flex flex-col p-4">
                        <span class="my-2 text-xl font-bold">Total Pendapatan</span>
                        <span class="my-2 text-xl text-warning">Rp. 475.000</span>
                    </div>
                </div>
                <!--end card item-->
            </div>
            <table class="ml-4 w-[900px] border-collapse">
                <thead>
                    <tr class="bg-warning border-b-2 border-gray-300 text-lg">
                        <th class="p-2">ID User</th>
                        <th class="p-2">Total Pesanan</th>
                        <th class="p-2">Kode Tiket</th>
                        <th class="p-2">Tanggal Pesanan</th>
                        <th class="p-2">Tanggal Kunjungan</th>
                        <th class="p-2 ">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- row 1 --}}
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-600 hover:text-white text-md text-center border-b border-gray-300 h-10">
                        <td class="">101</td>
                        <td class="">2</td>
                        <td class="">TK001</td>
                        <td class="">27-Januari-2024</td>
                        <td class="">30-Januari-2024</td>
                        <td class="text-red-500 hover:text-white">Rp. 80.000</td>
                    </tr>
                    {{-- row 2 --}}
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-600 hover:text-white text-md text-center border-b border-gray-300 h-10">
                        <td class="">101</td>
                        <td class="">2</td>
                        <td class="">TK001</td>
                        <td class="">27-Januari-2024</td>
                        <td class="">30-Januari-2024</td>
                        <td class="text-red-500 hover:text-white">Rp. 80.000</td>
                    </tr>
                    {{-- row 3 --}}
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-600 hover:text-white text-md text-center border-b border-gray-300 h-10">
                        <td class="">101</td>
                        <td class="">2</td>
                        <td class="">TK001</td>
                        <td class="">27-Januari-2024</td>
                        <td class="">30-Januari-2024</td>
                        <td class="text-red-500 hover:text-white">Rp. 80.000</td>
                    </tr>
                    {{-- row 4 --}}
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-600 hover:text-white text-md text-center border-b border-gray-300 h-10">
                        <td class="">101</td>
                        <td class="">2</td>
                        <td class="">TK001</td>
                        <td class="">27-Januari-2024</td>
                        <td class="">30-Januari-2024</td>
                        <td class="text-red-500 hover:text-white">Rp. 80.000</td>
                    </tr>
                    {{-- row 5 --}}
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-600 hover:text-white text-md text-center border-b border-gray-300 h-10">
                        <td class="">101</td>
                        <td class="">2</td>
                        <td class="">TK001</td>
                        <td class="">27-Januari-2024</td>
                        <td class="">30-Januari-2024</td>
                        <td class="text-red-500 hover:text-white">Rp. 80.000</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
</body>
</html>