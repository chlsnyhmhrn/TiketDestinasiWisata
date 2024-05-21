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
                    <th></th>
                    <th>Akun Pembeli</th>
                    <th>Nama Destinasi</th>
                    <th>Kode Tiket</th>
                    <th>Banyak Tiket</th>
                    <th>Total Harga</th>
                    <th>Tanggal Pesanan</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Seller_01</td>
                    <td>Hutan Wisata Bukit Mata Kucing</td>
                    <td>TKT001</td>
                    <td>3</td>
                    <td>90000</td>
                    <td>2024-05-15</td>
                    <td>2024-05-21</td>
                    <td>
                        <button class="btn btn-primary btn-xs">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-error btn-xs">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Seller_02</td>
                    <td>Taman Rusa Sekupang</td>
                    <td>TKT002</td>
                    <td>5</td>
                    <td>50000</td>
                    <td>2024-04-30</td>
                    <td>2024-05-13</td>
                    <td>
                        <button class="btn btn-primary btn-xs">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-error btn-xs">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Seller_03</td>
                    <td>Mega Wisata Ocarina</td>
                    <td>TKT003</td>
                    <td>4</td>
                    <td>180000</td>
                    <td>2024-05-12</td>
                    <td>2024-05-13</td>
                    <td>
                        <button class="btn btn-primary btn-xs">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-error btn-xs">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </td>
                </tr>
                <!-- Tambahkan lebih banyak data destinasi sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</div>

    
</div>
</body>
</html>