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
                        <i class="text-2xl text-white bi bi-person-circle"></i>
                    </div>
                    <ul tabindex="0"
                        class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a href="/edit_data" class="justify-between">
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

    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
            <p class="text-2xl font-bold mt-4 mx-4">Riwayat Pesanan</p>
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
                        <div class="flex">
                            <h2 class="card-title flex-1 font-bold">Mega Wisata Ocarina, Batam</h2>
                            <span class="text-red-500 font-semibold">Selesai</span>
                        </div>
                        <div class="flex">
                            <i class="bi bi-geo-alt text-warning"></i>
                            <p class=ml-1>Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                        </div>
                        <p class="font-semibold">x1</p>
                        <p class=" font-semibold">Total Pesanan : <span class="text-red-500 font-semibold">Rp.
                                40.000</span> </p>
                        <p class="font-semibold mt-3">Tanggal Pembelian : 23-03-2024</p>
                    </div>
                </div>
            </div>
            <!-- end card produk -->
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="menu p-4 w-64 min-h-full bg-success text-white">
                <!-- Sidebar content here -->
                <!-- <div class="flex flex-wrap mb-4">
                    <i class="bi bi-person-gear text-6xl text-warning"></i>
                    <div class="flex flex-col mt-2 ml-4">
                        <a href="#" class="font-bold text-2xl">Seller_01</a>
                        <span class="font-semibold text-lg">Penjual</span>
                    </div>
                </div> -->
                <span class="font-bold text-2xl mt-8 mx-auto h-20">DAFTAR MENU</span>
                <div class="ml-4">
                    <div class="flex mb-6">
                        <i class="bi bi-border-all text-warning text-3xl"></i>
                        <span class="font-semibold text-xl mt-1 ml-2"><a href="#">Dashboard</a></span>
                    </div>
                    <div class="flex mb-6">
                        <i class="bi bi-building-down text-warning text-3xl"></i>
                        <span class="font-semibold text-xl mt-1 ml-2"><a href="/orderan_masuk">Orderan Masuk</a></span>
                    </div>
                    <div class="flex mb-6">
                        <i class="bi bi-building-fill-check text-warning text-3xl "></i>
                        <span class="font-semibold text-xl mt-1 ml-2"><a href="#">Riwayat Pesanan</a></span>
                    </div>
                    <div class="flex">
                        <i class="bi bi-clock-history text-warning text-3xl"></i>
                        <span class="font-semibold text-xl mt-1 ml-2"><a href="#">Riwayat Transaksi</a></span>
                    </div>
                </div>

            </div>
        </div>

</body>

</html>