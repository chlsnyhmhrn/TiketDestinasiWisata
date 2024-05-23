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
    <div class="flex flex-col md:flex-row min-h-screen max-w-full bg-gray-100">
        @include('penjual.sidebar_penjual')
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
            <table class="ml-4 w-full border-collapse max-w-full">
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
                <tbody class="hover:bg-gray-50 dark:hover:bg-gray-600 hover:text-white text-md text-center border-b border-gray-300 h-10">
                    {{-- row 1 --}}
                    <tr>
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
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-600 hover:text-white text-md text-center border-b border-gray-300 h-10">
                        <td class="">101</td>
                        <td class="">2</td>
                        <td class="">TK001</td>
                        <td class="">27-Januari-2024</td>
                        <td class="">30-Januari-2024</td>
                        <td class="text-red-500 hover:text-white">Rp. 80.000</td>
                    </tr>
                        <!-- Tambahkan sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
</body>
</html>