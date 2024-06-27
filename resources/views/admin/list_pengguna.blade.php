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
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('admin.sidebar_admin')
        <div class="w-full bg-white p-8 rounded-2xl shadow-md">
            <p class="text-3xl font-bold">Akun Pengguna</p>
            
            <!-- Search Form -->
            
            <div class="flex flex-col mt-5">
                <form id="searchForm" method="GET" action="{{ route('admin.list_pengguna') }}" class="flex items-center gap-2 mb-2">
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
                            <table class="table min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal dibuat</th>
                                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipe User</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @if ($user)
                                        @foreach ($user as $user)
                                            <tr>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">{{ $user->username }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">{{ $user->email }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">{{ $user->full_name != null ? $user->full_name : '-' }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">{{ \Carbon\Carbon::parse($user->created_at)->locale('id')->translatedFormat('l, d F Y') }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">{{ $user->user_type }}</td>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" class="p-4 text-center text-sm font-normal text-gray-500">Akun tidak tersedia.</td>
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