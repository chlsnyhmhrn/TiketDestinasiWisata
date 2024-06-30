<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
    @vite('resources/css/app.css')
    <style>
        .preview img {
            max-width: 100px;
            margin-right: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="background-color: #E7ECF1">
    @include('admin.navbar_admin')
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('admin.sidebar_admin')
        <div class="w-full h-auto bg-white p-8 rounded-2xl shadow-md">
            <button type="button" id="saveButton"
                class="btn btn-success btn-sm btn-square font-bold text-white rounded-md hover:bg-yellow-30 focus:bg-green-500">
                <i class="bi bi-floppy"></i>
            </button>
            <form id="userForm" method="POST" action="{{ route('admin.tambah_pengguna_action') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="mt-3 border border-gray-200 rounded shadow-md p-8">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <div class="flex mb-4 gap-2">
                                <div class="w-full" id="usernameInput">
                                    <label for="username"
                                        class="block mb-1 text-sm font-semibold text-gray-500">Username</label>
                                    <input type="text" id="username" name="username"
                                        class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                                </div>
                                <div class="w-1/2" id="tipeUserInput">
                                    <label for="user_type" class="block mb-1 text-sm font-semibold text-gray-500">Tipe
                                        Pengguna</label>
                                    <select name="user_type" id="user_type"
                                        class="bg-gray-100 rounded focus:outline-none focus:border-green-500 border border-gray-300 select-sm w-full max-w-xs"
                                        required>
                                        <option disabled selected>-- Pilih Tipe Pengguna --</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Penjual</option>
                                        <option value="3">Pembeli</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4" id="namaInput">
                                <label for="full_name"
                                    class="block mb-1 text-sm font-semibold text-gray-500">Nama</label>
                                <input type="text" id="full_name" name="full_name"
                                    class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="mb-4" id="emailInput">
                                <label for="email"
                                    class="block mb-1 text-sm font-semibold text-gray-500">Email</label>
                                <input type="email" id="email" name="email"
                                    class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="mb-4" id="passwordInput">
                                <label for="password"
                                    class="block mb-1 text-sm font-semibold text-gray-500">Password</label>
                                <input type="password" id="password" name="password"
                                    class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                                <div class="flex content-center gap-1 mt-1">
                                    <input type="checkbox" class="checkbox checkbox-sm [--chkfg:white]"
                                        onclick="lihatPassword()" />
                                    <span class="label-text font-semibold text-gray-500">Lihat password</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Input Destinasi --}}
                </div>
                <div id="destinasiSection" style="display: none;" class="border border-gray-200 rounded shadow-md p-8 mt-4">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <div class="mb-4" id="namaDestinasiInput">
                                <label for="nama_destinasi" class="block mb-1 text-sm font-semibold">Nama
                                    Destinasi</label>
                                <input type="text" id="nama_destinasi" name="nama_destinasi"
                                    class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="mb-2" id="lokasiInput">
                                <label for="lokasi" class="block mb-1 text-sm font-semibold">Lokasi
                                    Destinasi</label>
                                <input type="text" id="lokasi" name="lokasi"
                                    class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="flex space-x-4">
                                <div class="w-full" id="hargaTiketInput">
                                    <label for="harga" class="block mb-1 text-sm font-semibold">Harga</label>
                                    <input type="number" id="harga" name="harga"
                                        class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                                </div>
                                <div class="w-1/2" id="kategoriInput">
                                    <label for="status" class="block mb-1 text-sm font-semibold">Status</label>
                                    <select name="status"
                                        class="bg-gray-100 rounded focus:outline-none focus:border-green-500 border border-gray-300 select-sm w-full max-w-xs"
                                        required>
                                        <option selected disabled>-- Pilih Status--</option>
                                        <option value="Buka">Buka</option>
                                        <option value="Tutup">Tutup</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="mb-4" id="jamOperasionalInput">
                                <div class="flex space-x-4">
                                    <div class="w-1/2">
                                        <label for="jam_buka" class="block mb-1 text-sm font-semibold">Jam
                                            Buka</label>
                                        <input type="time" id="jam_buka" name="jam_buka"
                                            class="input-sm input-bordered w-full bg-gray-100 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                                    </div>
                                    <div class="w-1/2">
                                        <label for="jam_tutup" class="block mb-1 text-sm font-semibold">Jam
                                            Tutup</label>
                                        <input type="time" id="jam_tutup" name="jam_tutup"
                                            class="input-sm input-bordered w-full bg-gray-100 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="mb-4 w-1/2" id="kategoriInput">
                                    <label for="id_kategori" class="block mb-1 text-sm font-semibold">Kategori</label>
                                    <select name="id_kategori"
                                        class="bg-gray-100 rounded focus:outline-none focus:border-green-500 border border-gray-300 select-sm w-full max-w-xs"
                                        required>
                                        <option disabled selected>-- Pilih Kategori --</option>
                                        @foreach ($kategori as $kategori)
                                            <option class="bg-white" value="{{ $kategori->id_kategori }}">
                                                {{ $kategori->nama_kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4 w-1/2" id="namaDestinasiInput">
                                    <label for="images" class="block mb-1 text-sm font-semibold">Foto Destinasi
                                        (3 Foto)</label>
                                    <input type="file" name="images[]" id="image-input"
                                        class="file-input file-input-sm border border-gray-300 w-full max-w-xs"
                                        multiple />
                                    <div id="image-preview" class="preview mt-2 flex"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 mt-4 w-full" id="deskripsiDestinasiInput">
                        <label for="deskripsi" class="block mb-1 text-sm font-semibold">Deskripsi
                            Destinasi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="5"
                            class="textarea-success bg-gray-100 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                        </textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('image-input').addEventListener('change', function(event) {
            const imagePreview = document.getElementById('image-preview');
            imagePreview.innerHTML = '';
            Array.from(event.target.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    imagePreview.appendChild(img);
                }
                reader.readAsDataURL(file);
            });
        });

        document.getElementById('saveButton').addEventListener('click', function() {
            document.getElementById('userForm').submit();
        });

        function lihatPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        document.getElementById('user_type').addEventListener('change', function() {
            var userType = this.value;
            var destinasiSection = document.getElementById('destinasiSection');
            if (userType == '2') { // Penjual
                destinasiSection.style.display = 'block';
            } else {
                destinasiSection.style.display = 'none';
            }
        });
    </script>
</body>

</html>
