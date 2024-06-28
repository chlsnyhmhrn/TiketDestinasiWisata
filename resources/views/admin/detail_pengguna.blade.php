<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Destinasi</title>
    @vite('resources/css/app.css')
</head>

<body class="background-color: #E7ECF1">
    @include('admin.navbar_admin')
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('admin.sidebar_admin')
        <div class="w-full bg-white p-8 rounded-2xl shadow-md">
            <div class="flex gap-1">
                <button type="button" id="editButton"
                    class="btn btn-warning btn-sm btn-square font-bold text-white rounded-md hover:bg-yellow-30 focus:bg-green-500">
                    <i class="bi bi-pencil-square"></i>
                </button>
                <button type="button" id="saveButton" style="display: none;"
                    class="btn btn-success btn-sm btn-square font-bold text-white rounded-md hover:bg-yellow-30 focus:bg-green-500">
                    <i class="bi bi-floppy"></i>
                </button>
            </div>
            <div class="mt-3 border border-gray-200 rounded shadow-md p-8">
                <form id="userForm" method="POST" action="{{ route('admin.update_pengguna', $user->id_user) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <div class="mb-4" id="usernameInput">
                                <label for="username"
                                    class="block mb-1 text-sm font-semibold text-gray-500">Username</label>
                                <input type="text" id="username" name="username" value="{{ $user->username }}"
                                    disabled
                                    class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="mb-4" id="namaInput">
                                <label for="full_name"
                                    class="block mb-1 text-sm font-semibold text-gray-500">Nama</label>
                                <input type="text" id="full_name" name="full_name" disabled
                                    value="{{ $user->full_name != null ? $user->full_name : '-' }}"
                                    class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="mb-4" id="emailInput">
                                <label for="email"
                                    class="block mb-1 text-sm font-semibold text-gray-500">Email</label>
                                <input type="email" id="email" name="email" value="{{ $user->email }}" disabled
                                    class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="mb-4" id="tipeUserInput">
                                <label for="user_type" class="block mb-1 text-sm font-semibold text-gray-500">Tipe
                                    User</label>
                                    <input type="text" id="user_type" value="{{ $user->user_type }}" disabled
                                    class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="mb-4" id="createdAtInput">
                                <label for="created_at" class="block mb-1 text-sm font-semibold text-gray-500">Tanggal
                                    Dibuat</label>
                                <input type="text" id="created_at" name="created_at" disabled
                                    value="{{ \Carbon\Carbon::parse($user->created_at)->locale('id')->translatedFormat('d F Y') }}"
                                    class="bg-gray-100 input-sm w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-green-500">
                            </div>
                        </div>
                    </div>
                </form>
                @if ($user->user_type == 'penjual')
                    <div class="overflow-x-auto rounded-lg mt-6">
                        <div class="align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden sm:rounded-lg">
                                <table class="table table-zebra min-w-full divide-y divide-gray-500">
                                    <thead class="bg-success">
                                        <tr class="text-white">
                                            <th scope="col"
                                                class="p-4 text-left text-xs font-mediu uppercase tracking-wider">
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
                                                Kategori</th>
                                            <th scope="col"
                                                class="p-4 text-left text-xs font-medium uppercase tracking-wider">
                                                Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <tr class="hover:cursor-pointer hover:bg-gray-200"
                                            onclick="window.location='{{ route('admin.list_destinasi') }}'">
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $destinasi->nama_destinasi }}</td>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                Rp. {{ number_format($destinasi->harga, 2, ',', '.') }}</td>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $destinasi->jam_buka }}</td>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $destinasi->jam_tutup }}
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                {{ $destinasi->kategori->nama_kategori }}</td>
                                            <td class="p-4 whitespace-nowrap text-sm font-semibold">
                                                @if ($destinasi->status == 'Buka')
                                                    <p class="text-success">{{ $destinasi->status }}</p>
                                                @else
                                                    <p class="text-error">{{ $destinasi->status }}</p>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        document.getElementById('editButton').addEventListener('click', function() {
            var formElements = document.querySelectorAll('#userForm input:not(#user_type):not(#created_at)');
            formElements.forEach(function(element) {
                element.disabled = false;
            });
            document.getElementById('saveButton').style.display = 'inline-block';
            this.style.display = 'none';
        });

        document.getElementById('saveButton').addEventListener('click', function() {
            document.getElementById('userForm').submit();
        });
    </script>
</body>

</html>
