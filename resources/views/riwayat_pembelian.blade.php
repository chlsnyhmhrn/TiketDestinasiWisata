<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
 
  <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-6">
    <div class="mx-auto max-w-2xl py-10 lg:max-w-none">
        <h2 class="text-2xl font-bold text-gray-900 py-4">Riwayat Pembelian</h2>

        <div class="card card-side bg-base-100 shadow-xl">
            <figure><img src="../img/2.jpg" alt="" class="w-60 h-50 px-2 py-2 rounded-xl"></figure>
            <div class="card-body">
                <h2 class="card-title font-bold">Mega Wisata Ocarina</h2>
                <p> Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                <h3 class="card-title font-bold text-red-500">Rp. 75.000-,</h3>
                <div class="card-actions justify-end">
                    <button class="btn bg-success text-black">Invoice</button>
                    <button class="btn bg-warning text-black">Beli Lagi</button>
                </div>
                <p>Tanggal Pembelian: 15 April 2024</p>
            </div>
        </div>
        <div class="divider"></div>
        <div class="card card-side bg-base-100 shadow-xl">
            <figure><img src="../img/3.jpg" alt="" class="w-60 h-50 px-2 py-2 rounded-xl"></figure>
            <div class="card-body">
                <h2 class="card-title font-bold">Mega Wisata Ocarina</h2>
                <p>Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                <h3 class="card-title font-bold text-red-500">Rp. 150.000-,</h3>
                <div class="card-actions justify-end">
                    <button class="btn bg-success text-black">Invoice</button>
                    <button class="btn bg-warning text-black">Beli Lagi</button>
                </div>
                <p>Tanggal Pembelian: 18 Februari 2024</p>
            </div>
        </div>
        <div class="divider"></div>
        <div class="card card-side bg-base-100 shadow-xl">
            <figure><img src="{{ asset('img/1.jpg') }}" alt="" class="w-60 h-50 px-2 py-2 rounded-xl"></figure>
            <div class="card-body">
                <h2 class="card-title font-bold">Mega Wisata Ocarina</h2>
                <p> Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                <h3 class="card-title font-bold text-red-500">Rp. 40.000-,</h3>
                <div class="card-actions justify-end">
                    <button class="btn bg-success text-black">Invoice</button>
                    <button class="btn bg-warning text-black">Beli Lagi</button>
                </div>
                <p>Tanggal Pembelian: 27 April 2024</p>
            </div>
        </div>
        <div class="divider"></div>
        <div class="card card-side bg-base-100 shadow-xl">
            <figure><img src="../img/2.jpg" alt="" class="w-60 h-50 px-2 py-2 rounded-xl"></figure>
            <div class="card-body">
                <h2 class="card-title font-bold">Mega Wisata Ocarina</h2>
                <p> Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</p>
                <h3 class="card-title font-bold text-red-500">Rp. 75.000-,</h3>
                <div class="card-actions justify-end">
                    <button class="btn bg-success text-black">Invoice</button>
                    <button class="btn bg-warning text-black">Beli Lagi</button>
                </div>
                <p>Tanggal Pembelian: 15 April 2024</p>
            </div>
        </div>

    </div>
</div>

</body>

</html>