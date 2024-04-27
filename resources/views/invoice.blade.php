<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    @vite('resources/css/app.css')
    <style>
    table, th, td {
        border:1px solid black;
        border-collapse: collapse;
    }
</style>
</head>
<body>
    <!-- start header -->
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
                            <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
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
    <!-- end Header -->

    <div class="mx-auto max-w-2xl">
        <h1 class="text-3xl font-bold text-center mb-5 mt-5">INVOICE</h1>
        <hr class="border-1 border-black mb-10">
        <div class="bg-gray-200 mb-10">
            <div class="flex justify-between flex-wrap p-5">
                <div class="flex flex-col">
                    <p> <span class="font-semibold">Nama</span> : Hasbiki Zikli</p>
                    <p> <span class="font-semibold">Username</span> : hasbki12</p>
                    <p> <span class="font-semibold">Email</span> : hasbki12@gmail.com</p>
                </div>
                <p><span class="font-semibold">Nama Penjual</span> :  Zahrul Pardede </p>
            </div>
        </div>
            <table class="mx-auto text-center mb-5" style="width:100%">
                <thead>
                    <tr>
                        <th>Kode Tiket</th>
                        <th>Waktu Kunjungan</th>
                        <th>Waktu Pembayaran</th>
                        <th>Metode Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TK001</td>
                        <td>26/04/2024</td>
                        <td>20/04/2024</td>
                        <td>Transfer Bank</td>
                    </tr>
                </tbody>
            </table>

            <span class="font-semibold text-lg">Rincian Pesanan</span>
            <hr class="border-1 border-black mb-10">
            <table class="mx-auto text-center mb-5" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Destinasi</th>
                        <th>Harga</th>
                        <th>Kuantitas</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mega Wisata Ocarina, Batam</td>
                        <td>Rp. 40.000</td>
                        <td>2</td>
                        <td>Rp. 80.000</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-wide mx-auto block btn-primary text-white text-lg">Cetak</button>
        </div>
        
    </div>
</body>
</html>