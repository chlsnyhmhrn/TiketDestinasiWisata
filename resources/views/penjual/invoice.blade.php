<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    @vite('resources/css/app.css')
    <style>
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>
    @php
        \Carbon\Carbon::setLocale('id');
    @endphp
    <div class="no-print">
        @include('penjual.navbar_penjual')  
    </div>
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('penjual.sidebar_penjual')
        <div class="w-full bg-white p-8 rounded-2xl shadow-md">
            <div class="px-6 py-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-3xl font-bold">Invoice</h1>
                    @if ($tiket->status == 'Diproses')
                        <p class="font-semibold text-warning">{{ $tiket->status }}</p>
                    @elseif ($tiket->status == 'Disetujui')
                        <p class="font-semibold text-success">{{ $tiket->status }}</p>
                    @else
                        <p class="font-semibold text-error">{{ $tiket->status }}</p>
                    @endif
                </div>
                <div class="flex justify-between items-center py-3">
                    <p class="font-semibold">Kode Tiket: {{ $tiket->code_tiket }}</p>
                    <p class="font-semibold">
                        {{ \Carbon\Carbon::parse($tiket->tanggal_pesanan)->translatedFormat('d F Y') }}</p>
                </div>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200 font-semibold text-gray-700">Detail</th>
                            <th class="py-2 px-4 bg-gray-200 font-semibold text-gray-700">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 font-semibold">Destinasi</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $tiket->destinasi->nama_destinasi }}</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 font-semibold">Lokasi</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $tiket->destinasi->lokasi }}</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 font-semibold">Nama Pemesan</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $tiket->user->full_name }}</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 font-semibold">Jumlah Tiket</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $tiket->total_pesanan }} Tiket</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 font-semibold">Tanggal Kunjungan</td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{ \Carbon\Carbon::parse($tiket->tanggal_kunjungan)->translatedFormat('d F Y') }}</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 font-semibold">Total Harga</td>
                            <td class="py-2 px-4 border-b border-gray-200">Rp.
                                {{ number_format($tiket->total_harga, 2, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
