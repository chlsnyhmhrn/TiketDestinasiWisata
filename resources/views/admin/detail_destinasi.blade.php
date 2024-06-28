<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Destinasi</title>
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
    @if (session('success'))
        <div id="alert" class="fixed top-20 right-4 z-50">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative shadow-md"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        </div>
    @endif
    @if (session('error'))
        <div id="alert" class="fixed top-20 right-4 z-50">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative shadow-md"
                role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        </div>
    @endif
    @include('admin.navbar_admin')
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('admin.sidebar_admin')
        <div class="w-full bg-white p-8 rounded-2xl shadow-md">
            <p class="text-3xl font-bold">Detail Destinasi</p>
            <div class="mt-3 border border-gray-200 rounded shadow-sm p-8">
                <form action="{{ route('penjual.edit_detail_action', $destinasi->id_destinasi) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <div class="mb-4" id="namaDestinasiInput">
                                <label for="nama_destinasi" class="block mb-1 text-sm font-semibold">Nama
                                    Destinasi</label>
                                <input type="text" id="nama_destinasi" name="nama_destinasi"
                                    value="{{ $destinasi->nama_destinasi     }}"
                                    class="bg-gray-100 input input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="mb-2" id="lokasiInput">
                                <label for="lokasi" class="block mb-1 text-sm font-semibold">Lokasi Destinasi</label>
                                <input type="text" id="lokasi" name="lokasi" value="{{ $destinasi->lokasi }}"
                                    class="bg-gray-100 input input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="mb-4" id="hargaTiketInput">
                                <label for="harga" class="block mb-1 text-sm font-semibold">Harga Tiket Masuk
                                    Destinasi</label>
                                <input type="number" id="harga" name="harga" value="{{ $destinasi->harga }}"
                                    class="bg-gray-100 input input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="mb-4" id="jamOperasionalInput">
                                <div class="flex space-x-4">
                                    <div class="w-1/2">
                                        <label for="jam_buka" class="block mb-1 text-sm font-semibold">Jam Buka</label>
                                        <input type="time" id="jam_buka" name="jam_buka" value="{{ $destinasi->jam_buka }}"
                                            class="input input-sm input-bordered w-full bg-gray-100 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                                    </div>
                                    <div class="w-1/2">
                                        <label for="jam_tutup" class="block mb-1 text-sm font-semibold">Jam Tutup</label>
                                        <input type="time" id="jam_tutup" name="jam_tutup" value="{{ $destinasi->jam_tutup }}"
                                            class="input input-sm input-bordered w-full bg-gray-100 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="mb-4 w-full" id="kategoriInput">
                                    <label for="id_kategori" class="block mb-1 text-sm font-semibold">Kategori</label>
                                    <select name="id_kategori"
                                        class="bg-gray-100 rounded focus:outline-none focus:border-green-500 select border border-gray-300 select-sm w-full max-w-xs"
                                        required>
                                        @php
                                            $kat = $destinasi->kategori;
                                        @endphp
                                        <option disabled selected value="">
                                            </option>
                                        
                                            <option class="bg-white" value=""
                                                >
                                                </option>
                                        
                                    </select>

                                </div>
                                <div class="mb-4 w-full" id="namaDestinasiInput">
                                    <label for="namaDestinasi" class="block mb-1 text-sm font-semibold">Foto Destinasi
                                        (3 Foto)</label>
                                    <input type="file" name="images[]" id="image-input"
                                        class="file-input file-input-sm border border-gray-300 w-full max-w-xs"
                                        multiple />
                                    <div id="image-preview" class="preview mt-2 flex">
                                        @foreach ($destinasi->gambar as $gambar)
                                            <img src="{{ asset('storage/' . $gambar->url_gambar) }}"
                                                alt="Current Image">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 w-full" id="deskripsiDestinasiInput">
                        <label for="deskripsi" class="block mb-1 text-sm font-semibold">Deskripsi Destinasi</label>
                        <textarea type="text" name="deskripsi"
                            class="textarea textarea-success bg-gray-100 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">{{ $destinasi->deskripsi }}</textarea>
                    </div>
                    <div class="mt-3">
                        <button type="submit"
                            class="btn btn-success btn-sm font-bold text-white px-4 py-2 rounded-md hover:bg-yellow-30 focus:bg-green-500">Simpan</button>
                    </div>
                </form>
            </div>
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

        document.addEventListener('DOMContentLoaded', function() {
            // Close alert after 2 seconds
            setTimeout(function() {
                const alert = document.getElementById('alert');
                if (alert) {
                    alert.remove();
                }
            }, 5000);
        });
    </script>
</body>

</html>
