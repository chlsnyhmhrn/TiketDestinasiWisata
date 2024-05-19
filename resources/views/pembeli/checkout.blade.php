<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('penjual.navbar_penjual')

    <div class="container mx-auto justify-center">
        <div class="container">
            <!-- Content -->
            <div class="flex-1">
                <div class="flex w-full my-2 items-center justify-around">
                    <p class="text-2xl font-bold mt-4 mx-4 flex-grow">Checkout</p>
                </div>
                <div class="flex flex-wrap justify-center w-[100%] md:justify-start py-5">
                    <!--card item-->
                    <div class="flex ml-10">
                        <div>
                            <img src="{{ asset('img/megaocarina.jpg') }}" alt="costarina"
                                class="h-75 w-[720px] rounded-lg">
                            <div class="flex flex-cols-2 gap-2 mt-3">
                                <img src="{{ asset('img/1.jpg') }}" alt="costarina" class="w-54 h-40 rounded-lg">
                                <img src="{{ asset('img/2.jpg') }}" alt="costarina" class="w-54 h-40 rounded-lg ml-1">
                            </div>
                        </div>

                        <!--card transaksi-->
                        <div class="flex justify-end ml-16 ">
                            <div class="card w-80 bg-base-100 shadow-xl border-2">
                                <div class="card-body">
                                    <p class="card-title text-2xl">Pilih Tiket</p>
                                    <div class="grid grid-cols-2 gap-4 mt-2">
                                        <div>
                                            <p class="font-bold text-lg">Dewasa</p>
                                            <p>Usia 13+</p>
                                            <p class="font-bold text-Ll red text-red-500 ">Rp. 40.000-,</p>
                                        </div>
                                        <div>
                                            <input type="number" placeholder="Jumlah"
                                                class="input input-sm input-bordered w-full max-w-xs mt-5" />
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <p class="font-bold text-lg">Anak</p>
                                            <p>Usia 2-12</p>
                                            <p class="font-bold text-Ll red text-red-500 ">Rp. 25.000-,</p>
                                        </div>
                                        <div>
                                            <input type="number" placeholder="Jumlah"
                                                class="input input-sm input-bordered w-full max-w-xs mt-5" />
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <div>
                                        <p class="font-bold">Hari Kunjungan</p>
                                    </div>
                                    <div>
                                        <input type="date" placeholder="Type here"
                                            class="input input-sm input-bordered w-full max-w-xs" />
                                    </div>

                                    <hr class="my-3">

                                    <div>
                                        <p class="font-bold">Metode Pembayaran</p>
                                    </div>
                                    <div>
                                        <select class="select select-bordered w-full max-w-xs">
                                            <option disabled selected>Pilih</option>
                                            <option>BNI Virtual Account</option>
                                            <option>Mandiri Virtual Account</option>
                                            <option>BRIVA</option>
                                            <option>Alfamart</option>
                                            <option>Indomart</option>
                                        </select>
                                    </div>

                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <p>Harga Total :</p>
                                        </div>
                                        <div>
                                            <p>Rp. 25,000</p>
                                        </div>
                                    </div>
                                    <div class="card-actions mt-3">
                                        <a href="/invoice" class="w-full btn btn-success text-white">
                                            Beli
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card item-->
                    {{-- deskripsi --}}
                    <div class="flex flex-col">
                        <h1 class="ml-12 font-bold text-xl capitalize">Mega wisata ocarina, batam</h1>
                        <div class="flex mt-1 ml-14">
                            <i class="bi bi-geo-alt text-warning"></i>
                            <p class=ml-1>Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                        </div>
                        <p class="ml-12 w-1/2 mt-2 capitalize bg-gray-300 p-2 rounded-md">
                            Nikmati liburan tak terlupakan di Mega Wisata Ocarina, Batam. Dengan wahana-wahana menarik
                            dan hiburan yang mengasyikkan, kami adalah destinasi yang sempurna untuk semua orang yang
                            mencari kesenangan dan petualangan. Dari perjalanan menegangkan di wahana permainan hingga
                            kegiatan santai di taman bermain, kami menawarkan pengalaman liburan yang memikat hati untuk
                            semua anggota keluarga. Dapatkan tiket Anda sekarang dan buatlah kenangan indah di Mega
                            Wisata Ocarina!
                        </p>
                        <div class="price flex ml-10 ">
                            <div class="flex flex-col ml-6 my-6">
                                <span class="font-bold text-xl mb-1">Jenis Objek Wisata <i class="bi bi-list-check"></i></span>
                                <span class="mb-2">Wisata Pantai</span>
                            </div>
                            <div class="flex flex-col ml-10 my-6">
                                <span class="font-bold text-xl mb-1">Jam Operasional <i class="bi bi-alarm"></i></span>
                                <span class="mb-2">Senin - Jumat : 08.00 - 22.00</span>
                                <span class="mb-2">Sabtu : 08.00 - 23.00</span>
                                <span>Minggu : 06.00 - 23.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>