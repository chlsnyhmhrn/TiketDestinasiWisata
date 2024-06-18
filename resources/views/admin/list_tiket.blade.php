<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body style="background-color: #E7ECF1">
    @include('admin.navbar_admin')
    </div>
    <div class="flex flex-col md:flex-row h-screen bg-gray-100">
        @include('admin.sidebar_admin')
        <div class="container mx-auto p-6">
            <h1 class="text-2xl font-bold mb-4">List Tiket</h1>
            <div class="overflow-x-auto card bg-base-100 shadow-xl border-0 m-5">
                <table class="table w-full">
                    <thead>
                        <tr class="font-bold text-l">
                            <th>Akun Pembeli</th>
                            <th>Nama Destinasi</th>
                            <th>Kode Tiket</th>
                            <th>Banyak Tiket</th>
                            <th>Total Harga</th>
                            <th>Tanggal Pesanan</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Status</th>
                        </tr>
                    </thead>    
                    <tbody>
                        @foreach($tikets as $tiket)
                            <tr>
                                <td>{{ $tiket->user->full_name }}</td>
                                <td>{{ $tiket->destinasi->nama_destinasi }}</td>
                                <td>{{ $tiket->code_tiket }}</td>
                                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $tiket->total_pesanan }}</td>
                                <td>Rp. {{ number_format($tiket->total_harga, 2, ',', '.') }}</td>
                                <td>{{ $tiket->tanggal_pesanan }}</td>
                                <td>{{\Carbon\Carbon::parse($tiket->tanggal_kunjungan)->format('d-m-Y')}}</td>
                                <td>{{ $tiket->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>