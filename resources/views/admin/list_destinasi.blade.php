<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destinasi Wisata</title>
    @vite('resources/css/app.css')
</head>
<body style="background-color: #E7ECF1">
    @include('admin.navbar_admin')
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('admin.sidebar_admin')
        <div class="w-full bg-white p-8 rounded-2xl shadow-md">
            <p class="text-3xl font-bold">List Destinasi</p>
            
            <!-- Search Form -->
            
            <div class="flex flex-col mt-5">
                <form id="searchForm" method="GET" action="{{ route('admin.list_pengguna') }}" class="flex items-center gap-2 mb-2">
                    <input autocomplete="off" type="text" name="search" placeholder="Cari" class="input input-bordered input-sm w-full bg-gray-100 focus:outline-none focus:border-green-500">
                    <select name="status" class="select select-sm select-bordered bg-gray-100 focus:outline-none focus:border-green-500" onchange="submitForm()">
                        <option disabled selected>Status</option>
                        <option value="Disetujui">Buka</option>
                        <option value="Dibatalkan">Tutup</option>
                    </select>
                </form>
                <div class="overflow-x-auto rounded-lg">
                    <div class="align-middle inline-block min-w-full">
                        <div class="shadow overflow-hidden sm:rounded-lg">
                            <table class="table min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Destinasi</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jam Buka</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jam Tutup</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pemilik Destinasi</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                        @foreach ($destinasi as $d)
                                            <tr>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">{{ $d->nama_destinasi }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">{{ $d->harga }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">{{ $d->jam_buka }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">{{ $d->jam_tutup }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">{{ $d->user->username}}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">{{ $d->status}}</td>
                                                <td class="font-semibold">
                                                    <a href="{{ route('admin.destinasi.show', ['id' => $d->id_destinasi]) }}" target="_blank" class="btn btn-sm text-sm text-white btn-warning">Detail</a>
                                                </td>

                                                
                                            <tr>
                                        @endforeach
                                        </tr>
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