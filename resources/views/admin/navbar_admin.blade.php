<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
  @include('admin.navbar_admin')
  <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-6">
    <div class="mx-auto max-w-2xl py-10 lg:max-w-none">
      <h2 class="text-2xl font-bold text-gray-900 py-4">Data Diri</h2>
      <input type="checkbox" id="edit-toggle" class="toggle toggle-success" />
      <div class="grid grid-cols-2 mt-10">
        <form id="data-form" action="">
          <!-- Kolom kiri (foto profil) -->
          <!-- Kolom kanan (informasi data diri) -->
          <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2">
              <label for="nama_depan" class="block text-gray-700 font-bold">Nama:</label>
              <input type="text" value="{{$data->full_name}}" id="nama_depan" name="nama_depan" disabled class="editable w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>
            <div class="col-span-2">
              <label for="username" class="block text-gray-700 font-bold">Username:</label>
              <input type="text" value="{{$data->username}}" id="username" name="username" disabled class="editable w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>
            <div class="col-span-2">
              <label for="email" class="block text-gray-700 font-bold">Email:</label>
              <input type="email" value="{{$data->email}}" id="email" name="email" disabled class="editable w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="btn btn-success text-white mt-2" disabled>Simpan</button>
          </div>
        </form>
        <div class="flex justify-center">
          <i class="bi bi-person-circle text-success" style="font-size: 200px;"></i>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const toggle = document.getElementById('edit-toggle');
      const form = document.getElementById('data-form');
      const inputs = form.querySelectorAll('.editable');
      const button = form.querySelector('button[type="submit"]');

      toggle.addEventListener('change', function () {
        if (toggle.checked) {
          inputs.forEach(input => input.disabled = false);
          button.disabled = false;
        } else {
          inputs.forEach(input => input.disabled = true);
          button.disabled = true;
        }
      });
    });
  </script>
</body>

</html>
