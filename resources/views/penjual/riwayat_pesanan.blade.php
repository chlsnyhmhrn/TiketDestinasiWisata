<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Masuk</title>
    @vite('resources/css/app.css')
    <script>
        function submitForm() {
            document.getElementById('searchForm').submit();
        }
    </script>
</head>

<body>
    @include('penjual.navbar_penjual')
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('penjual.sidebar_penjual')
        <div class="w-full bg-white p-8 rounded-2xl shadow-md">
            <p class="text-3xl font-bold">Pesanan Masuk</p>
            
            <!-- Search Form -->
            
            <div class="flex flex-col mt-5">
                <form id="searchForm" method="GET" action="{{ route('penjual.riwayat_pesanan', $destinasi->id_destinasi) }}" class="flex items-center gap-2 mb-2">
                    <input autocomplete="off" type="text" name="search" placeholder="Cari" class="input input-bordered input-sm w-full bg-gray-100 focus:outline-none focus:border-green-500">
                    <select name="status" class="select select-sm select-bordered bg-gray-100 focus:outline-none focus:border-green-500" onchange="submitForm()">
                        <option disabled selected>Status</option>
                        <option value="Disetujui">Disetujui</option>
                        <option value="Dibatalkan">Dibatalkan</option>
                    </select>
                </form>
                <div class="overflow-x-auto rounded-lg">
                    <div class="align-middle inline-block min-w-full">
                        <div class="shadow overflow-hidden sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pembeli</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode Tiket</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Kunjungan</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Pembelian</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Tiket</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Harga</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Invoice</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @if ($tiket)
                                        @foreach ($tiket as $item)
                                            <tr>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">{{ $item->user->full_name }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">{{ $item->code_tiket }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">{{ \Carbon\Carbon::parse($item->tanggal_kunjungan)->locale('id')->translatedFormat('l, d F Y') }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">{{ \Carbon\Carbon::parse($item->tanggal_pesanan)->locale('id')->translatedFormat('l, d F Y') }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">{{ $item->total_pesanan }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">Rp. {{ number_format($item->total_harga, 2, ',', '.') }}</td>
                                                <td class="font-semibold">
                                                    @if ($item->status == 'Disetujui')
                                                        <p class="text-success">{{ $item->status }}</p>
                                                    @else
                                                        <p class="text-error">{{ $item->status }}</p>
                                                    @endif
                                                </td>
                                                <td class="font-semibold">
                                                    @if ($item->status == 'Disetujui')
                                                        <a href="{{ route('penjual.invoice', $item->id_tiket) }}" class="btn btn-sm text-sm text-white btn-warning">Invoice</a>
                                                    @else
                                                        <a href="{{ route('penjual.invoice', $item->id_tiket) }}" aria-disabled="true" class="btn btn-sm text-sm text-white btn-warning btn-disabled">Invoice</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" class="p-4 text-center text-sm font-normal text-gray-500">Belum ada pesanan masuk.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
