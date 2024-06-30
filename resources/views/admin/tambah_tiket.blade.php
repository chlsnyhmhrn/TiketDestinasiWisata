<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Destinasi</title>
    <!-- Include CSS styles -->
    @vite('resources/css/app.css')
</head>

<body class="background-color: #E7ECF1">
    <!-- Include admin navbar -->
    @include('admin.navbar_admin')
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        <!-- Include admin sidebar -->
        @include('admin.sidebar_admin')
        <div class="w-full bg-white p-8 rounded-2xl shadow-md">

            <div class="flex gap-1">
                <button type="button" id="saveButton"
                    class="btn btn-success btn-sm btn-square font-bold text-white rounded-md hover:bg-yellow-30 focus:bg-green-500">
                    <i class="bi bi-floppy"></i>
                </button>
            </div>

            <!-- Form section for destination details -->
            <div class="mt-3 border border-gray-200 rounded shadow-md p-8">
                <form id="tiketForm" action="{{ route('admin.tambah_tiket_action') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <div class="flex gap-4 mb-4">
                                <div class="w-1/2" id="namaPembeliInput">
                                    <label for="nama_pembeli" class="block mb-1 text-sm font-semibold">Nama
                                        Pembeli</label>
                                    <select name="id_user"
                                        class="bg-gray-100 rounded focus:outline-none focus:border-green-500 border border-gray-300 select-sm w-full max-w-xs"
                                        required>
                                        <option selected>
                                            -- Pembeli --
                                        </option>
                                        @foreach ($user as $user)
                                            <option value="{{ $user->id_user }}">
                                                {{ $user->full_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="w-1/2" id="namaDestinasiInput">
                                    <label for="nama_destinasi" class="block mb-1 text-sm font-semibold">Nama
                                        Destinasi</label>
                                    <select name="id_destinasi" id="nama_destinasi"
                                        class="bg-gray-100 rounded focus:outline-none focus:border-green-500 border border-gray-300 select-sm w-full max-w-xs"
                                        required onchange="calculateTotalHarga()">
                                        <option selected disabled>
                                            -- Destinasi --
                                        </option>
                                        @foreach ($destinasi as $des)
                                            <option value="{{ $des->id_destinasi }}" data-harga="{{ $des->harga }}">
                                                {{ $des->nama_destinasi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <div class="w-1/2" id="jumlahTiketInput">
                                    <label for="total_pesanan" class="block mb-1 text-sm font-semibold">Jumlah
                                        Tiket</label>
                                    <input type="number" id="total_pesanan" name="total_pesanan"
                                        class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500"
                                        oninput="calculateTotalHarga()">
                                </div>
                                <div class="w-1/2" id="totalHargaInput">
                                    <label for="total_harga" class="block mb-1 text-sm font-semibold">Total
                                        Harga</label>
                                    <input type="number" id="total_harga" name="total_harga" disabled
                                        class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="mb-4" id="jamOperasionalInput">
                                <div class="flex space-x-4 mb-4">
                                    <div class="w-1/2">
                                        <label for="tanggal_pesanan" class="block mb-1 text-sm font-semibold">Tanggal
                                            Pesanan</label>
                                        <input type="date" id="tanggal_pesanan" name="tanggal_pesanan"
                                            class="input-sm input-bordered w-full bg-gray-100 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                                    </div>
                                    <div class="w-1/2">
                                        <label for="tanggal_kunjungan" class="block mb-1 text-sm font-semibold">Tanggal
                                            Kunjungan</label>
                                        <input type="date" id="tanggal_kunjungan" name="tanggal_kunjungan"
                                            class="input-sm input-bordered w-full bg-gray-100 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                                    </div>
                                </div>
                                <div class="mb-4 w-1/2" id="statusInput">
                                    <label for="status" class="block mb-1 text-sm font-semibold">Status</label>
                                    <select name="status"
                                        class="bg-gray-100 rounded focus:outline-none focus:border-green-500 border border-gray-300 select-sm w-full max-w-xs"
                                        required>
                                        <option selected disabled>
                                            -- Status --
                                        </option>
                                        <option value="1" class="text-warning">
                                            Diproses
                                        </option>
                                        <option value="2" class="text-error">
                                            Dibatalkan
                                        </option>
                                        <option value="3" class="text-success">
                                            Disetujui
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function calculateTotalHarga() {
            let destinasiId = document.getElementById('nama_destinasi').value;
            let jumlahTiket = document.getElementById('total_pesanan').value;
            let hargaDestinasi = document.querySelector(`#nama_destinasi option[value="${destinasiId}"]`).dataset.harga;
            let totalHarga = jumlahTiket * hargaDestinasi;
            document.getElementById('total_harga').value = totalHarga;
        }

        document.getElementById('saveButton').addEventListener('click', function() {
            document.getElementById('tiketForm').submit();
        });
    </script>
</body>

</html>
