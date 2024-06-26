<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    @vite('resources/css/app.css')
</head>

<body style="background-color: #E7ECF1">
    @php
        \Carbon\Carbon::setLocale('id');
        $currentDate = \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y');
        $currentTime = \Carbon\Carbon::now()->timezone('Asia/Jakarta')->format('H:i:s');
    @endphp
    @include('admin.navbar_admin')
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('admin.sidebar_admin')
        <!-- Content -->
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto">
            <main>
                <div class="pt-6 px-6">
                    <div class="flex justify-between items-stretch">
                        <div class="self-center">
                            <p class="text-3xl font-bold">Dashboard Admin</p>
                        </div>
                        <div class="self-center flex gap-5">
                            <p class="border h-min py-2 px-3 rounded-md font-semibold border-gray-400">
                                <i class="bi bi-person mr-1"></i> admin
                            </p>
                            <p class="border h-min py-2 px-3 rounded-md font-semibold border-gray-400">
                                <i class="bi bi-calendar-week mr-1"></i> {{ $currentDate }}
                            </p>
                            <p class="border h-min py-2 px-3 rounded-md font-semibold border-gray-400">
                                <i class="bi bi-clock mr-1"></i> <span id="current-time">{{ $currentTime }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="flex justify-end">
                                <form method="GET" action="{{ route('admin.dashboard') }}">
                                    <select name="filter_user" onchange="this.form.submit()"
                                        class="select select-sm h-min w-min font-semibold rounded-md bg-gray-200">
                                        <option value="semua" {{ $filter_user == 'semua' ? 'selected' : '' }}>
                                            Total
                                        </option>
                                        <option value="pembeli" {{ $filter_user == 'pembeli' ? 'selected' : '' }}>
                                            Pembeli
                                        </option>
                                        <option value="penjual" {{ $filter_user == 'penjual' ? 'selected' : '' }}>
                                            Penjual
                                        </option>
                                    </select>
                                </form>
                            </div>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">
                                        {{ $jumlah_user }}
                                    </span>
                                    <h3 class="text-base font-normal text-gray-500">
                                        Total Akun
                                    </h3>
                                </div>
                                <div
                                    class="ml-5 mt-1 w-0 flex items-center justify-end flex-1 text-green-500 font-bold text-5xl">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="flex justify-end">
                                <form method="GET" action="{{ route('admin.dashboard') }}">
                                    <select name="filter_destinasi" onchange="this.form.submit()"
                                        class="select select-sm h-min w-min font-semibold rounded-md bg-gray-200">
                                        <option value="semua" {{ $filter_destinasi == 'semua' ? 'selected' : '' }}>
                                            Total
                                        </option>
                                        <option value="buka" {{ $filter_destinasi == 'buka' ? 'selected' : '' }}>
                                            Buka
                                        </option>
                                        <option value="tutup" {{ $filter_destinasi == 'tutup' ? 'selected' : '' }}>
                                            Tutup
                                        </option>
                                    </select>
                                </form>
                            </div>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">
                                        {{ $jumlah_destinasi }}
                                    </span>
                                    <h3 class="text-base font-normal text-gray-500">
                                        Destinasi Terdaftar
                                    </h3>
                                </div>
                                <div
                                    class="ml-5 mt-1 w-0 flex items-center justify-end flex-1 text-green-500 font-bold text-5xl">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="flex justify-end">
                                <form method="GET" action="{{ route('admin.dashboard') }}">
                                    <select name="filter_tiket" onchange="this.form.submit()"
                                        class="select select-sm h-min w-min font-semibold rounded-md bg-gray-200">
                                        <option value="semua" {{ $filter_tiket == 'semua' ? 'selected' : '' }}>Total
                                        </option>
                                        <option value="diproses" {{ $filter_tiket == 'diproses' ? 'selected' : '' }}>
                                            Diproses
                                        </option>
                                        <option value="disetujui" {{ $filter_tiket == 'disetujui' ? 'selected' : '' }}>
                                            Disetujui
                                        </option>
                                        <option value="dibatalkan"
                                            {{ $filter_tiket == 'dibatalkan' ? 'selected' : '' }}>Dibatalkan
                                        </option>
                                    </select>
                                </form>
                            </div>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">
                                        {{ $jumlah_tiket }}
                                    </span>
                                    <h3 class="text-base font-normal text-gray-500">
                                        Tiket
                                    </h3>
                                </div>
                                <div
                                    class="ml-5 mt-1 w-0 flex items-center justify-end flex-1 text-green-500 font-bold text-5xl">
                                    <i class="bi bi-ticket"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-2 gap-4 mt-5">
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
                            <div class="mb-4 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Destinasi Wisata</h3>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="{{ route('admin.list_destinasi') }}"
                                        class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">Lihat
                                        ></a>
                                </div>
                            </div>
                            <div class="flex flex-col mt-8">
                                <div class="overflow-x-auto rounded-lg">
                                    <div class="align-middle inline-block min-w-full">
                                        <div class="shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Nama
                                                        </th>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Kategori
                                                        </th>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Harga
                                                        </th>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Status
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                    @if ($destinasi)
                                                        @foreach ($destinasi as $destinasi)
                                                            <tr>
                                                                <td
                                                                    class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                                    {{ $destinasi->nama_destinasi }}
                                                                </td>
                                                                <td
                                                                    class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                                    {{ $destinasi->kategori->nama_kategori }}
                                                                </td>
                                                                <td
                                                                    class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                                    Rp.
                                                                    {{ number_format($destinasi->harga, 2, ',', '.') }}
                                                                </td>
                                                                @if ($destinasi->status == 'Tutup')
                                                                    <td
                                                                        class="p-4 whitespace-nowrap text-sm font-semibold text-error">
                                                                        {{ $destinasi->status }}
                                                                    </td>
                                                                @else
                                                                    <td
                                                                        class="p-4 whitespace-nowrap text-sm font-semibold text-success">
                                                                        {{ $destinasi->status }}
                                                                    </td>
                                                                @endif
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <p>Destinasi tidak tersedia</p>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
                            <div class="mb-4 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Akun Pengguna</h3>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="{{ route('admin.list_pengguna') }}"
                                        class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">Lihat
                                        ></a>
                                </div>
                            </div>
                            <div class="flex flex-col mt-8">
                                <div class="overflow-x-auto rounded-lg">
                                    <div class="align-middle inline-block min-w-full">
                                        <div class="shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Nama
                                                        </th>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Email
                                                        </th>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Tipe
                                                        </th>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Tanggal dibuat
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                    @if ($user)
                                                        @foreach ($user as $user)
                                                            <tr>
                                                                <td
                                                                    class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                                    {{ $user->username }}
                                                                </td>
                                                                <td
                                                                    class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                                    {{ $user->email }}
                                                                </td>
                                                                <td
                                                                    class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                                    {{ $user->user_type }}
                                                                </td>
                                                                <td
                                                                    class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                                    {{ $user->created_at->isoFormat('D MMMM Y') }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <p>pengguna tidak tersedia</p>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script>
            function updateTime() {
                const now = new Date();
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                const formattedTime = `${hours}:${minutes}:${seconds}`;
                document.getElementById('current-time').innerText = formattedTime;
            }

            setInterval(updateTime, 1000);
            window.onload = updateTime;
        </script>
</body>

</html>
