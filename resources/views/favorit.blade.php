<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@heroicons/vue@latest/dist/heroicons.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Favorit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')


<body>
    <nav>
        <div class="navbar bg-success">
            <div class="flex-1">
                <a class="btn btn-ghost text-xl text-white">WonderWoo</a>
            </div>
            <div class="flex-none gap-2">
                <div class="form-control">
                    <input type="text" placeholder="Search" class="input input-bordered input-sm w-full max-w-xs" />
                </div>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component"
                                src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto">
        <div class="content ml-5">
            <div class="text-2xl font-bold p-1 mt-5">Destinasi Favorit Anda</div>
            <div class="grid grid-cols-1 gap-4 mt-5">
                <!-- Produk Card 1 -->
                <div class="card lg:card-side bg-base-100 shadow-xl ">
                    <img src="./assets/images/penjual/costarina.jpg" alt="" class="p-6 ml-3 w-80" id="produk-foto">
                    <div class="card-body mr-5">
                        <h2 class="card-title">Mega Wisata Ocarina, Batam</h2>
                        <p><i class="bi bi-geo-alt-fill"></i> Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                        <p class="font-bold text-2xl red text-red-500 ">Rp. 40.000-,</p>
                        <div class="card-actions justify-end ">
                            <i class="bi bi-heart text-5xl absolute bottom-40 left-30"></i>
                            <button
                                class="btn btn-xl sm:btn-sm md:btn-md lg:btn-lg rounded-full w-40 bg-green-500">Pesan</button>
                        </div>
                    </div>
                </div>
                <!-- Produk Card 2 -->
                <div class="card lg:card-side bg-base-100 shadow-xl border-2">
                    <img src="./assets/images/penjual/tmnrusa.jpg" alt="" class="p-6 ml-3 w-80" id="produk-foto">
                    <div class="card-body mr-5">
                        <h2 class="card-title">Taman Rusa Sekupang, Batam</h2>
                        <p><i class="bi bi-geo-alt-fill"></i> 4WFP+G2P, Tj. Pinggir, Kec. Sekupang, Kota Batam, Kepulauan Riau 29425</p>
                        <p class="font-bold text-2xl red text-red-500 ">Rp. 15.000-,</p>
                        <div class="card-actions justify-end ">
                            <i class="bi bi-heart text-5xl absolute bottom-40 left-30 "></i>
                            <button
                                class="btn btn-xl sm:btn-sm md:btn-md lg:btn-lg rounded-full w-40 bg-green-500">Pesan</button>
                        </div>
                    </div>
                </div>
                <!-- Produk Card 3 -->
                <div class="card lg:card-side bg-base-100 shadow-xl border-2">
                    <img src="./assets/images/penjual/dino.png" alt="" class="p-6 ml-3 w-80" id="produk-foto">
                    <div class="card-body mr-5">
                        <h2 class="card-title">Dino's Gate, Batam</h2>
                        <p><i class="bi bi-geo-alt-fill"></i> Bengkong Laut, Golden City, Kota Batam, Kepulauan Riau 29458</p>
                        <p class="font-bold text-2xl red text-red-500 ">Rp. 75.000-,</p>
                        <div class="card-actions justify-end ">
                            <i class="bi bi-heart text-5xl absolute bottom-40 left-30 "></i>
                            <button
                                class="btn btn-xl sm:btn-sm md:btn-md lg:btn-lg rounded-full w-40 bg-green-500">Pesan</button>
                        </div>
                    </div>
                </div>
                <!-- Produk Card 4 -->
                <div class="card lg:card-side bg-base-100 shadow-xl border-2">
                        <img src="./assets/images/penjual/images.jpeg" alt="" class="p-6 ml-3 w-80" id="produk-foto">
                        <div class="card-body mr-5">
                            <h2 class="card-title">Hutan Wisata Mata Kucing, Batam</h2>
                            <p><i class="bi bi-geo-alt-fill"></i> Jl. Taman Bukit Golf, Tj. Riau, Sekupang, Batam City, Riau Islands 29424</p>
                            <p class="font-bold text-2xl red text-red-500 ">Rp. 40.000-,</p>
                            <div class="card-actions justify-end ">
                                <i class="bi bi-heart text-5xl absolute bottom-40 left-30 "></i>
                                <button class="btn btn-xl sm:btn-sm md:btn-md lg:btn-lg rounded-full w-40 bg-green-500">Pesan</button>
                            </div>
                        </div>
                    </div>
                <!-- Tambahkan Produk Card Lainnya di Sini -->
            </div>
        </div>
    </div>










</body>

</html>
