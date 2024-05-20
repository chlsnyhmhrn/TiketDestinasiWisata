<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Destinasi</title>
    @vite('resources/css/app.css')
       
</head>
<body class="bg-success flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-md w-96 ">
        <h2 class="text-2xl font-bold text-center mb-2">Input Destinasi</h2>
        <div class="flex items-center mb-4">
        </div>
        <form id="addProdukForm">
        <div class="mb-4" id="namaDestinasiInput">
                <label for="namaDestinasi" class=" block mb-2">Foto Destinasi</label>
                <input type="file" class="file-input file-input-success w-full max-w-xs" />
            </div>
            <div class="mb-4" id="namaDestinasiInput">
                <label for="namaDestinasi" class=" block mb-2">Nama Destinasi</label>
                <input type="text" id="namaDestinasi" name="namaDestinasi"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="mb-2" id="lokasiInput">
                <label for="lokasiDestinasi" class="block mb-2">Lokasi Destinasi</label>
                <input type="text" id="lokasiDestinasi" name="lokasiDestinasi"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="mb-2" id="deskripsiDestinasiInput">
                <label for="deskripsiDestinasi" class="block mb-2">Deskripsi Destinasi</label>
                <textarea type="deskripsiDestinasi" name="deskripsiDestinasi" class="textarea textarea-success bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500"></textarea>
            </div>
            <div class="mb-2" id="hargaTiketInput">
                <label for="hargaTiketDestinasi" class="block mb-2">Harga Tiket Masuk Destinasi</label>
                <input type="number" id="hargaTiketDestinasi" name="hargaTiketDestinasi"
                    class="bg-gray-300 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="mb-4" id="jamOperasionalInput">
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label for="jamBuka" class="block mb-2">Jam Buka</label>
                            <input type="time" id="jamBuka" name="jamBuka" class="input input-bordered w-full bg-gray-300 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                        </div>
                        <div class="w-1/2">
                            <label for="jamTutup" class="block mb-2">Jam Tutup</label>
                            <input type="time" id="jamTutup" name="jamTutup" class="input input-bordered w-full bg-gray-300 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                        </div>
                    </div>
                </div>
            <div class="text-center">
                <button type="submit"
                    class="font-bold bg-yellow-300 text-black px-4 py-2 rounded-2xl hover:bg-yellow-30 focus:outline-none focus:bg-yellow-500">Tambah Destinasi</button>
            </div>
        </form>
        <p class="px-4 py-2 text-center"><a href="" class="text-green-900">Tambahkan Destinasi Nanti</a></p>
    </div>
</body>
</html>