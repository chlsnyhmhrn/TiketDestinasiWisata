<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
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
      <h2 class="text-2xl font-bold text-gray-900 py-4">Data Diri</h2>
      <div class="grid grid-cols-2 mt-10">
        <form action="">
          <!-- Kolom kiri (foto profil) -->
          <!-- Kolom kanan (informasi data diri) -->
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label for="nama_depan" class="block text-gray-700 font-bold">Nama Depan:</label>
              <input type="text" value="Garuda" id="nama_depan" name="nama_depan" disabled class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500 ">
            </div>
            <div>
              <label for="nama_belakang" class="block text-gray-700 font-bold">Nama Belakang:</label>
              <input type="text" value="Pardede" id="nama_belakang" name="nama_belakang" disabled class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>
            <div class="col-span-2">
              <label for="username" class="block text-gray-700 font-bold">Username:</label>
              <input type="text" value="garzzxx" id="username" name="username" disabled class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>
            <div class="col-span-2">
              <label for="email" class="block text-gray-700 font-bold">Email:</label>
              <input type="email" value="gardede@gmail.com" id="email" name="email" disabled class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>
            <div class="col-span-2">
              <label for="password" class="block text-gray-700 font-bold">Password:</label>
              <input type="password" value="*******" id="password" name="password" disabled class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>
            <button class="btn btn-primary">Simpan</button>
            <!-- Tambahkan informasi data diri lainnya di sini -->
          </div>
        </form>
        <div class="flex justify-center">
          <i class="bi bi-person-circle text-success" style="font-size: 200px;"></i>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>