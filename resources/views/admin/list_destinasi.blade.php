<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destinasi Wisata</title>
    @vite('resources/css/app.css')

    <script>
        function submitForm() {
            document.getElementById('searchForm').submit();
        }
    </script>
</head>

<body style="background-color: #E7ECF1">
    @include('admin.navbar_admin')
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('admin.sidebar_admin')
        <div class="w-full bg-white p-8 rounded-2xl shadow-md">
            <div class="flex flex-col">
                <form id="searchForm" method="GET" action="{{ route('admin.list_destinasi') }}"
                    class="flex items-center gap-2 mb-2">
                    <a href="{{ route('admin.tambah_pengguna') }}" class="btn btn-success btn-sm btn-square text-white"><i class="bi bi-file-earmark-plus"></i></a>
                    <input autocomplete="off" type="text" name="cari" placeholder="Cari"
                        class="input input-bordered input-sm w-full bg-gray-100 focus:outline-none focus:border-green-500">
                    <select name="cari"
                        class="select select-sm select-bordered bg-gray-100 focus:outline-none focus:border-green-500"
                        onchange="submitForm()">
                        <option disabled selected>Status</option>
                        <option value="">Semua</option>
                        <option value="Buka">Buka</option>
                        <option value="Tutup">Tutup</option>
                    </select>
                </form>
                <div class="overflow-x-auto rounded-lg shadow-md">
                    <div class="align-middle inline-block min-w-full">
                        <div class="shadow overflow-hidden sm:rounded-lg">
                            <table class="table table-zebra min-w-full divide-y divide-gray-500">
                                <thead class="bg-success text-white">
                                    <tr>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase tracking-wider">
                                            Nama Destinasi</th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase tracking-wider">
                                            Harga</th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase tracking-wider">
                                            Jam Buka</th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase tracking-wider">
                                            Jam Tutup</th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase tracking-wider">
                                            Pemilik Destinasi</th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase tracking-wider">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @if ($destinasi)
                                        @foreach ($destinasi as $d)
                                            <tr class="hover:cursor-pointer hover:bg-gray-200"
                                                onclick="window.location='{{ route('admin.detail_destinasi', $d->id_destinasi) }}'">
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ $d->nama_destinasi }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    Rp. {{ number_format($d->harga, 2, ',', '.') }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $d->jam_buka)->format('H:i') }}
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $d->jam_tutup)->format('H:i') }}
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    {{ $d->user->username }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold">
                                                    @if ($d->status == 'Buka')
                                                        <p class="text-success">{{ $d->status }}</p>
                                                    @else
                                                        <p class="text-error">{{ $d->status }}</p>
                                                    @endif
                                                </td>
                                            <tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="100%"
                                                class="p-4 text-center text-sm font-normal text-gray-500">Destinasi tidak
                                                tersedia.</td>
                                        </tr>
                                    @endif
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
