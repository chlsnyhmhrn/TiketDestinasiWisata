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

<body class="bg-success flex justify-center items-center min-h-screen">
    @if (session('error'))
        <div id="alert" class="fixed top-5 right-4 z-50">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative shadow-md"
                role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        </div>
    @endif
    <div class="flex min-h-screen flex-col justify-center p-16">
        <div class="w-full bg-white p-8 rounded-2xl shadow-md">
            <h2 class="text-2xl font-bold text-center mb-2">Input Destinasi</h2>
            <div class="flex items-center mb-4">
            </div>
            <form id="addProdukForm" action="{{ route('inputDestinasiAction') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-4 grid grid-cols-2 gap-6">
                    <div class="flex flex-col">
                        <div class="mb-4" id="namaDestinasiInput">
                            <label for="nama_destinasi" class=" block mb-2">Nama Destinasi</label>
                            <input type="text" id="nama_destinasi" name="nama_destinasi"
                                class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                        </div>
                        <div class="mb-4" id="kategoriInput">
                            <label for="id_kategori" class="block mb-2">Nama Kategori</label>
                            <select name="id_kategori"
                                class="bg-gray-300 rounded focus:outline-none focus:border-green-500 select w-full max-w-xs"
                                required>
                                <option disabled selected></option>
                                @foreach ($kategori as $data)
                                    <option class="bg-white" value="{{ $data->id_kategori }}">{{ $data->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2" id="lokasiInput">
                            <label for="lokasi" class="block mb-2">Lokasi Destinasi</label>
                            <input type="text" id="lokasi" name="lokasi"
                                class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="mb-4" id="hargaTiketInput">
                            <label for="harga" class="block mb-2">Harga Tiket Masuk Destinasi</label>
                            <input type="number" id="harga" name="harga"
                                class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                        </div>
                        <div class="mb-4" id="jamOperasionalInput">
                            <div class="flex space-x-4">
                                <div class="w-1/2">
                                    <label for="jam_buka" class="block mb-2">Jam Buka</label>
                                    <input type="time" id="jam_buka" name="jam_buka"
                                        class="input input-bordered w-full bg-gray-300 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                                </div>
                                <div class="w-1/2">
                                    <label for="jam_tutup" class="block mb-2">Jam Tutup</label>
                                    <input type="time" id="jam_tutup" name="jam_tutup"
                                        class="input input-bordered w-full bg-gray-300 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 w-full" id="namaDestinasiInput">
                            <label for="namaDestinasi" class=" block mb-2">Foto Destinasi (3 Foto)</label>
                            <input type="file" id="image-input" name="images[]"
                                class="file-input file-input-success w-full max-w-xs" multiple />
                            <div id="image-preview" class="preview mt-2 flex">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-2 w-full" id="deskripsiDestinasiInput">
                    <label for="deskripsi" class="block mb-2">Deskripsi Destinasi</label>
                    <textarea type="text" name="deskripsi"
                        class="textarea textarea-success bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="font-bold bg-yellow-300 text-black px-4 py-2 rounded-2xl hover:bg-yellow-30 focus:outline-none focus:bg-yellow-500">Tambah
                        Destinasi</button>
                </div>
            </form>
            <p class="px-4 py-2 text-center"><a href="" class="text-green-900">Tambahkan Destinasi Nanti</a></p>
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
    </script>
</body>

</html>
