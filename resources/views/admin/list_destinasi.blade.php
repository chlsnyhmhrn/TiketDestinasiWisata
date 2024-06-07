<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Destinasi</title>
    @vite('resources/css/app.css')
</head>

<body style="background-color: #E7ECF1">
    @include('admin.navbar_admin')
    </div>
    <div class="flex flex-col md:flex-row h-screen bg-gray-100">
        @include('admin.sidebar_admin')

        <div class="container mx-auto p-6">
            <h1 class="text-2xl font-bold mb-4">List Destinasi</h1>
            <div class="overflow-x-auto card bg-base-100 shadow-xl border-0 m-5">
                <table class="table w-full">
                    <thead>
                        <tr class="font-bold text-l">
                            <th>Nama Destinasi</th>
                            <th>Lokasi</th>
                            <th>Harga Tiket</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Jam Buka</th>
                            <th>Jam Tutup</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($destinasi as $d)
                            <tr>
                                <td>{{ $d->nama_destinasi }}</td>
                                <td>{{ $d->lokasi }}</td>
                                <td>{{ $d->harga }}</td>
                                <td>{{ $d->deskripsi }}</td>
                                <td>{{ $d->status }}</td>
                                <td>{{ $d->jam_buka }}</td>
                                <td>{{ $d->jam_tutup }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>