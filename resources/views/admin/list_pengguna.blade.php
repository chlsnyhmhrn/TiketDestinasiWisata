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

    <div class="flex flex-col md:flex-row h-screen bg-gray-100">
        @include('admin.sidebar_admin')
        <div class="container mx-auto p-6">
            <h1 class="text-2xl font-bold mb-4">List Pengguna</h1>
            <div class="overflow-x-auto card bg-base-100 shadow-xl border-0 m-5">
                <table class="table w-full">
                    <thead>
                        <tr class="font-bold text-l">
                            <th>Username</th>
                            <th>Email</th>
                            <th>Nama Lengkap/ Destinasi</th>
                            <th>Role</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->full_name }}</td>
                                <td>{{ $user->user_type}}</td>
                                <td>{{ $user->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>