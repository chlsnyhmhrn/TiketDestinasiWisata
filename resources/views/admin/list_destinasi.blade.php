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
    <h1 class="text-2xl font-bold mb-4">List Destinasi</h1>
    <div class="overflow-x-auto card bg-base-100 shadow-xl border-0 m-5">
        <table class="table w-full">
            <thead>
                <tr class="font-bold text-l">
                    <th></th>
                    <th>Nama Destinasi</th>
                    <th>Lokasi</th>
                    <th>Harga Tiket</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Jam Buka</th>
                    <th>Jam Tutup</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Hutan Wisata Bukit Mata Kucing</td>
                    <td>Jalan R. Suprapto, Desa Kibing, Kecamatan Batu Aji, Kota Batam, Kepulauan Riau</td>
                    <td>30000</td>
                    <td>Hutan Wisata Mata Kucing memiliki keindahan alam dan keberagaman koleksi satwa.</td>
                    <td>Buka</td>
                    <td>08:00</td>
                    <td>17:00</td>
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
                    <td>Taman Rusa Sekupang</td>
                    <td>Tj. Pinggir, Kec. Sekupang, Kota Batam, Kepulauan Riau 29425</td>
                    <td>10000</td>
                    <td>Taman Rusa Sekupang merupakan sebuah taman rekreasi yang menyuguhkan suasana alam yang asri dan sejuk.</td>
                    <td>Buka</td>
                    <td>07:00</td>
                    <td>17:00</td>
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
                    <td>Mega Wisata Ocarina</td>
                    <td>Sadai, Kec. Bengkong, Kota Batam, Kepulauan Riau 29444</td>
                    <td>45000</td>
                    <td>Mega Wisata Ocarina adalah sebuah taman rekreasi yang luas dan lengkap dengan berbagai wahana permainan, area rekreasi, dan pemandangan laut yang indah.</td>
                    <td>Buka</td>
                    <td>08:00</td>
                    <td>21:00</td>
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