<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
  @include('pembeli.navbar')
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