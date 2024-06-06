<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Akun Admin</title>
    @vite('resources/css/app.css')
    <style>
        /* Tambahkan custom CSS di sini */
        .container {
            max-width: 100%; /* Maksimalkan lebar container */
            display: flex;
            justify-content: center; /* Agar form berada di tengah */
            align-items: center;
            height: 100vh; /* Atur tinggi container agar sesuai dengan tinggi layar */
        }

        .form-container {
            width: 80%; /* Atur lebar form menjadi 70% dari container */
            max-width: 1000px; /* Atur lebar maksimum form */
            padding: 40px; /* Tambahkan padding untuk form */
            background-color: #f8fbfd; /* Warna latar form */
            border-radius: 15px; /* Buat sudut form melengkung */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%; /* Atur lebar input menjadi 100% dari form */
            padding: 15px; /* Tambahkan padding untuk input */
            margin-bottom: 15px; /* Beri jarak bawah antara input */
            border: 1px solid #ccc;
            border-radius: 25px; /* Buat sudut input melengkung */
            box-sizing: border-box; /* Pastikan padding tidak menambah lebar total input */
            background-color: #f0f2f5; /* Warna latar input */
        }

        .form-container .name-container {
            display: flex;
            gap: 15px; /* Beri jarak antar input */
            margin-bottom: 15px; /* Beri jarak bawah antara container nama dan input lainnya */
        }

        .form-container .name-container input[type="text"] {
            flex: 1; /* Biarkan flex handle width */
        }

        .form-container .name-container .name-item {
            flex: 1; /* Biarkan flex handle width */
        }

        .form-container .name-container .name-item:nth-child(2) {
            margin-left: auto; /* Geser elemen kedua ke kanan */
        }

        .form-container button {
            padding: 10px; /* Kurangi padding untuk tombol */
            background-color: #f1c40f; /* Warna latar tombol */
            border: none; /* Hilangkan border tombol */
            border-radius: 25px; /* Buat sudut tombol melengkung */
            cursor: pointer; /* Ubah kursor menjadi pointer saat di hover */
            font-size: 14px; /* Kurangi ukuran font */
            color: #000; /* Ubah warna teks menjadi hitam */
            box-sizing: border-box;
            width: 140px; /* Kurangi lebar tombol */
            margin: 5px; /* Tambahkan margin untuk jarak antar tombol */
        }

        .form-container button:hover {
            background-color: #e1b40d; /* Warna latar tombol saat di hover */
        }

        .form-container .delete-button {
            background-color: #e74c3c; /* Warna latar tombol hapus */
        }

        .form-container .delete-button:hover {
            background-color: #c0392b; /* Warna latar tombol hapus saat di hover */
        }

        .form-container .login-link {
            text-align: center;
            margin-top: 15px;
        }

        .form-container .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .form-container .login-link a:hover {
            text-decoration: underline;
        }

        .button-container {
            display: flex;
            justify-content: flex-end; /* Pindahkan tombol ke sebelah kanan */
        }
    </style>
</head>

<body style="background-color: #E7ECF1">
    @include('admin.navbar_admin')
    <div class="flex flex-col md:flex-row h-screen bg-gray-100">
        @include('admin.sidebar_admin')

        <div class="container mx-auto p-6">
            <div class="form-container">
                <h2 class="text-2xl font-bold mb-6 text-center">Edit Akun</h2>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username1">Username</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username1" type="text" placeholder="masukkan username Anda di sini">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" placeholder="masukkan email anda di sini">
                    </div>
                    <div class="mb-4 name-container">
                        <div class="name-item">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="first-name">Nama Depan</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="first-name" type="text" placeholder="nama depan">
                        </div>
                        <div class="name-item">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="last-name">Nama Belakang</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="last-name" type="text" placeholder="nama belakang">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" type="password" placeholder="masukkan password anda di sini">
                    </div>
                    <div class="button-container">
                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            Edit Akun
                        </button>
                        <button
                            class="delete-button bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button">
                            Hapus
                        </button>
                    </div>
                </form>
                <p class="text-center text-gray-500 text-xs mt-4">
                    Sudah Mempunyai Akun? <a class="text-blue-500" href="#">Masuk</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>

