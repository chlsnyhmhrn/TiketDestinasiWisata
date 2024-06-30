<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akun Pengguna</title>
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
                <form id="searchForm" method="GET" action="{{ route('admin.list_pengguna') }}"
                    class="flex items-center gap-2 mb-3">
                    <a href="{{ route('admin.tambah_pengguna') }}" class="btn btn-success btn-sm btn-square text-white"><i class="bi bi-person-add"></i></a>
                    <input autocomplete="off" type="text" name="cari_user" placeholder="Cari"
                        value="{{ request()->get('cari_user') }}"
                        class="input input-bordered input-sm w-full bg-gray-100 focus:outline-none focus:border-green-500">

                    <select name="user_type"
                        class="select select-sm select-bordered bg-gray-100 focus:outline-none focus:border-green-500"
                        onchange="submitForm()">
                        <option disabled {{ !request()->has('user_type') ? 'selected' : '' }}>Status</option>
                        <option value="">Semua</option>
                        <option value="admin" {{ request()->get('user_type') == 'admin' ? 'selected' : '' }}>Admin
                        </option>
                        <option value="penjual" {{ request()->get('user_type') == 'penjual' ? 'selected' : '' }}>Penjual
                        </option>
                        <option value="pembeli" {{ request()->get('user_type') == 'pembeli' ? 'selected' : '' }}>Pembeli
                        </option>
                    </select>
                </form>
                <div class="overflow-x-auto rounded-lg shadow-md">
                    <div class="align-middle inline-block min-w-full">
                        <div class="shadow overflow-hidden sm:rounded-lg">
                            <table class="table table-zebra min-w-full divide-y divide-gray-500">
                                <thead class="bg-success">
                                    <tr class="text-white">
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-mediu uppercase tracking-wider">
                                            Username</th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase tracking-wider">
                                            Email</th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase tracking-wider">
                                            Nama</th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase tracking-wider">
                                            Tanggal dibuat</th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium uppercase tracking-wider">
                                            Tipe User</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @if ($user)
                                        @foreach ($user as $user)
                                            <tr class="hover:cursor-pointer hover:bg-gray-200"
                                                onclick="window.location='{{ route('admin.detail_pengguna', $user->id_user) }}'">
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ $user->username }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ $user->email }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ $user->full_name != null ? $user->full_name : '-' }}</td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                    {{ \Carbon\Carbon::parse($user->created_at)->locale('id')->translatedFormat('d F Y') }}
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    {{ $user->user_type }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5"
                                                class="p-4 text-center text-sm font-normal text-gray-500">Akun tidak
                                                tersedia.</td>
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
