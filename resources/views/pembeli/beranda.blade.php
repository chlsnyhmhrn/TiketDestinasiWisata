<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    @include('pembeli.navbar')
    <div class="container px-6 mx-auto">
        <div class="mt-28 lg:grid lg:grid-cols-4 gap-6">
            <div class="group relative">
                <a href="/detail">
                    <div class="relative card bg-base-100 h-full shadow-xl group-hover:opacity-75">
                        <figure class="max-h-48"><img class="h-full w-full object-cover object-center" src="{{ asset('img/1.jpg') }}" alt="Shoes" /></figure>
                        <div class="card-body">
                            <div class="badge badge-outline badge-accent mt-1">Buka</div>
                            <h2 class="card-title line-clamp-2">Mega Wisata Ocarina, Batam</h2>
                            <div class="flex">
                                <i class="bi bi-geo-alt text-success me-1 text-sm"></i>
                                <p class="text-sm line-clamp-1">Sadai, Bengkong, Batam Center, Riau 29444 Indonesia</p>
                            </div>
                            <div class="card-actions justify-between py-3">
                                <p class="font-semibold text-red-500">RP. 25.000-,</p>
                                <div class="badge badge-outline badge-success mt-1">Hiburan</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="group relative">
                <div class="relative card bg-base-100 h-full shadow-xl group-hover:opacity-75">
                    <figure class="max-h-48"><img class="h-full w-full object-cover object-center" src="{{ asset('img/matakucing.png') }}" alt="Shoes" /></figure>
                    <div class="card-body">
                        <div class="badge badge-outline badge-accent mt-1">Buka</div>
                        <h2 class="card-title line-clamp-2">Hutan Wisata Bukit Mata Kucing</h2>
                        <div class="flex">
                            <i class="bi bi-geo-alt text-success me-1 text-sm"></i>
                            <p class="text-sm line-clamp-1">Jalan R. Suprapto, Desa Kibing, Kecamatan Batu Aji, Kota
                                Batam, Kepulauan Riau.</p>
                        </div>
                        <div class="card-actions justify-between">
                            <p class="font-semibold text-red-500">RP. 10.000-,</p>
                            <div class="badge badge-outline badge-success mt-1">Alam</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group relative">
                <div class="relative card bg-base-100 h-full shadow-xl group-hover:opacity-75">
                    <figure class="max-h-48"><img class="h-full w-full object-cover object-center" src="{{ asset('img/kebunraya.png') }}" alt="Shoes" /></figure>
                    <div class="card-body">
                        <div class="badge badge-outline badge-error mt-1">Tutup</div>
                        <h2 class="card-title line-clamp-2">Kebun Raya Batam</h2>
                        <div class="flex">
                            <i class="bi bi-geo-alt text-success me-1 text-sm"></i>
                            <p class="text-sm line-clamp-1">Jalan Hang Lekiu, Kelurahan Sambau, Kecamatan Nongsa, Kota
                                Batam, Kepulauan Riau.</p>
                        </div>
                        <div class="card-actions justify-between">
                            <p class="font-semibold text-red-500">RP. 10.000-,</p>
                            <div class="badge badge-outline badge-success mt-1">Alam</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group relative">
                <div class="relative card bg-base-100 h-full shadow-xl group-hover:opacity-75">
                    <figure class="max-h-48"><img class="h-full w-full object-cover object-center" src="{{ asset('img/kampungviet.png') }}" alt="Shoes" /></figure>
                    <div class="card-body">
                        <div class="badge badge-outline badge-accent mt-1">Buka</div>
                        <h2 class="card-title line-clamp-2">Kampung Vietnam</h2>
                        <div class="flex">
                            <i class="bi bi-geo-alt text-success me-1 text-sm"></i>
                            <p class="text-sm line-clamp-1">Desa Sijantung, Kecamatan Galang, Kota Batam, Kepulauan
                                Riau.</p>
                        </div>
                        <div class="card-actions justify-start">
                            <p class="font-semibold text-red-500">RP. 5.000-,</p>
                            <div class="badge badge-outline badge-success mt-1">Sejarah</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>