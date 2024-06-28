<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Destinasi</title>
    <!-- Include CSS styles -->
    @vite('resources/css/app.css')
    <style>
        /* Custom styles */
        .preview img {
            max-width: 100px;
            margin-right: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="background-color: #E7ECF1">
    <!-- Display success or error message -->
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
    <!-- Include admin navbar -->
    @include('admin.navbar_admin')
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        <!-- Include admin sidebar -->
        @include('admin.sidebar_admin')
        <div class="w-full bg-white p-8 rounded-2xl shadow-md">

            <div class="flex gap-2">
                <!-- Title section -->
                <p class="text-3xl font-bold">Detail Destinasi</p>
            </div>

            <!-- Form section for destination details -->
            <div class="mt-3 border border-gray-200 rounded shadow-sm p-8">
                <form id="destinasiForm" action="{{ route('penjual.edit_detail_action', $destinasi->id_destinasi) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <!-- Input fields -->
                            <div class="mb-4" id="namaDestinasiInput">
                                <label for="nama_destinasi" class="block mb-1 text-sm font-semibold">Nama
                                    Destinasi</label>
                                <input type="text" id="nama_destinasi" name="nama_destinasi"
                                    value="{{ $destinasi->nama_destinasi }}"
                                    class="bg-gray-100 input input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500"
                                    disabled>
                            </div>
                            <div class="mb-2" id="lokasiInput">
                                <label for="lokasi" class="block mb-1 text-sm font-semibold">Lokasi Destinasi</label>
                                <input type="text" id="lokasi" name="lokasi" value="{{ $destinasi->lokasi }}"
                                    class="bg-gray-100 input input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500"
                                    disabled>
                            </div>
                            <div class="mb-4" id="hargaTiketInput">
                                <label for="harga" class="block mb-1 text-sm font-semibold">Harga Tiket Masuk
                                    Destinasi</label>
                                <input type="number" id="harga" name="harga" value="{{ $destinasi->harga }}"
                                    class="bg-gray-100 input input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500"
                                    disabled>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="mb-4" id="jamOperasionalInput">
                                <div class="flex space-x-4">
                                    <div class="w-1/2">
                                        <label for="jam_buka" class="block mb-1 text-sm font-semibold">Jam Buka</label>
                                        <input type="time" id="jam_buka" name="jam_buka"
                                            value="{{ $destinasi->jam_buka }}"
                                            class="input input-sm input-bordered w-full bg-gray-100 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500"
                                            disabled>
                                    </div>
                                    <div class="w-1/2">
                                        <label for="jam_tutup" class="block mb-1 text-sm font-semibold">Jam
                                            Tutup</label>
                                        <input type="time" id="jam_tutup" name="jam_tutup"
                                            value="{{ $destinasi->jam_tutup }}"
                                            class="input input-sm input-bordered w-full bg-gray-100 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500"
                                            disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <!-- Select category -->
                                <div class="mb-4 w-full" id="kategoriInput">
                                    <label for="id_kategori" class="block mb-1 text-sm font-semibold">Kategori</label>
                                    <select name="id_kategori"
                                        class="bg-gray-100 rounded focus:outline-none focus:border-green-500 select border border-gray-300 select-sm w-full max-w-xs"
                                        required>
                                        {{-- @php
                                                $kat = $destinasi->kategori;
                                            @endphp
                                            <option disabled selected value="{{ $kat->id_kategori }}">
                                                {{ $kat->nama_kategori }}</option>
                                            @foreach ($kategori as $kategori)
                                                <option class="bg-white" value="{{ $kategori->id_kategori }}"
                                                    {{ $kat->id_kategori == $kategori->id_kategori ? 'selected' : '' }}>
                                                    {{ $kategori->nama_kategori }}</option>
                                            @endforeach --}}
                                    </select>

                                </div>

                                <!-- File upload for images -->
                                <div class="mb-4 w-full" id="namaDestinasiInput">
                                    <label for="images" class="block mb-1 text-sm font-semibold">Foto Destinasi
                                        (3 Foto)</label>
                                    <input type="file" name="images[]" id="image-input"
                                        class="file-input file-input-sm border border-gray-300 w-full max-w-xs" disabled
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
                    <!-- Textarea for description -->
                    <div class="mb-2 w-full" id="deskripsiDestinasiInput">
                        <label for="deskripsi" class="block mb-1 text-sm font-semibold">Deskripsi Destinasi</label>
                        <textarea id="deskripsi" name="deskripsi"
                            class="textarea textarea-success bg-gray-100 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500"
                            disabled>{{ $destinasi->deskripsi }}</textarea>
                    </div>
                    <!-- Save button -->
                    <div class="flex gap-1">
                        <!-- Edit button -->
                        <button type="button" id="editButton"
                            class="btn btn-warning btn-sm btn-square font-bold text-white rounded-md hover:bg-yellow-30 focus:bg-green-500">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <!-- Save button (hidden by default) -->
                        <button type="button" id="saveButton" style="display: none;"
                            class="btn btn-success btn-sm btn-square font-bold text-white rounded-md hover:bg-yellow-30 focus:bg-green-500">
                            <i class="bi bi-floppy"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript section -->
    <script>
        // Enable editing mode
        document.getElementById('editButton').addEventListener('click', function() {
            var formElements = document.querySelectorAll(
                '#destinasiForm input, #destinasiForm select, #destinasiForm textarea');
            formElements.forEach(function(element) {
                element.disabled = false;
            });
            document.getElementById('saveButton').style.display = 'inline-block';
            document.getElementById('saveFormButton').style.display = 'inline-block';
            this.style.display = 'none';
        });

        // Submit form on save button click
        document.getElementById('saveButton').addEventListener('click', function() {
            document.getElementById('destinasiForm').submit();
        });

        // Remove alert message after 3 seconds
        setTimeout(function() {
            document.getElementById('alert').remove();
        }, 3000);
    </script>

</body>

</html>
