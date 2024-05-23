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
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="flex flex-col md:flex-row bg-gray-100">
        @include('penjual.sidebar_penjual')
        <!-- Content -->
        <div class="flex-1 w-4/5 p-4 mt-0">
            <div class="flex flex-wrap h-10 items-center justify-between">
                <p class="text-xl font-bold mt-4">Detail Produk</p>
                <button class="btn btn-md bg-success rounded-xl text-white hover:text-white hover:bg-primary mt-4">Edit</button>
            </div>
            <div class="flex flex-wrap justify-center lg:justify-start py-5">
                <!-- image Card item -->
                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                    <div class="group relative">
                    <div
                        class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                        <img src="../img/megaocarina.jpg"
                        alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                        class="h-full w-full object-cover object-center">
                    </div>
                    </div>
                    <div class="group relative">
                    <div
                        class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                        <img src="../img/2.jpg"
                        alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                        class="h-full w-full object-cover object-center">
                    </div>
                    </div>
                    <div class="group relative">
                    <div
                        class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                        <img src="../img/3.jpg" alt="Collection of four insulated travel bottles on wooden shelf."
                        class="h-full w-full object-cover object-center">
                    </div>
                    </div>
                </div>
                <!-- End card item -->
                <!-- Description -->
                <div class="flex flex-col lg:ml-8 mt-6">
                    <h1 class="font-bold text-l capitalize">Mega Wisata Ocarina, Batam</h1>
                    <div class="flex items-center mt-2">
                        <i class="bi bi-geo-alt text-warning"></i>
                        <p class="ml-2">Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                    </div>
                    <p class="mt-4 bg-gray-300 text-md p-4 rounded-md">
                        Nikmati liburan tak terlupakan di Mega Wisata Ocarina, Batam. Dengan wahana-wahana menarik dan hiburan yang mengasyikkan, kami adalah destinasi yang sempurna untuk semua orang yang mencari kesenangan dan petualangan. Dari perjalanan menegangkan di wahana permainan hingga kegiatan santai di taman bermain, kami menawarkan pengalaman liburan yang memikat hati untuk semua anggota keluarga. Dapatkan tiket Anda sekarang dan buatlah kenangan indah di Mega Wisata Ocarina!
                    </p>
                    <div class="flex flex-wrap gap-6 mt-6">
                        <div class="flex flex-col bg-white w-full md:w-auto p-4 rounded-xl shadow-md">
                            <span class="font-bold text-lg">Harga Tiket</span>
                            <span class="font-semibold ">Dewasa:</span>
                            <span class="text-red-500">Rp. 40.000</span>
                            <span class="font-semibold">Anak - Anak:</span>
                            <span class="text-red-500">Rp. 25.000</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-bold text-lg mt-3 mb-1">Jam Operasional</span>
                            <span class="mb-2">Senin - Jumat: 08.00 - 22.00</span>
                            <span class="mb-2">Sabtu: 08.00 - 23.00</span>
                            <span>Minggu: 06.00 - 23.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>