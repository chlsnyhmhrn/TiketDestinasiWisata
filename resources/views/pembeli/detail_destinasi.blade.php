<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    @include('pembeli.navbar')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-16 lg:max-w-none">
            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                @foreach ($data->gambar()->get() as $gambar)
                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="{{ asset('storage/' . $gambar->url_gambar) }}"
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="h-full w-full object-cover object-center">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="grid grid-cols-2 gap-4 mt-5">
                <div>
                    <article class="text-pretty">
                        <div class="grid grid-cols-4">
                            <div class="col-span-3 content-center">
                                <h1 class="text-2xl font-bold">{{ $data->nama_destinasi }}</h1>
                            </div>
                            <div class="flex justify-end">
                                <a href="/favorit" class="btn btn-ghost btn-circle avatar">
                                    <i class="text-xl bi bi-heart"></i>
                                </a>
                            </div>
                        </div>
                        <p class="my-2 ms-2"><i class="bi bi-geo-alt text-warning m-1"></i>{{ $data->lokasi }}</p>
                        <p>
                            {{ $data->deskripsi }}
                        </p>
                        <h3 class="text-base font-semibold mt-5">Jam Buka</h3>
                        <p><i class="bi bi-alarm mr-1"></i>{{ $data->jam_buka }} - {{ $data->jam_tutup }}</p>
                    </article>
                </div>
                <div class="flex justify-end">
                    <div class="card w-96 bg-base-100 shadow-xl border-0">
                        <div class="card-body">
                            <h2 class="card-title">Pesan Tiket</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p>Hari Kunjungan:</p>
                                </div>
                                <div>
                                    <input type="date" placeholder="Type here"
                                        class="input input-sm input-bordered w-full max-w-xs" />
                                </div>
                                <div>
                                    <p>Jumlah Tiket:</p>
                                </div>
                                <div>
                                    <input type="number" placeholder="Jumlah"
                                        class="input input-sm input-bordered w-full max-w-xs" />
                                </div>
                            </div>
                            <hr class="my-3">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p>Harga Tiket:</p>
                                </div>
                                <div>
                                    <p>Rp. {{ number_format($data->harga, 2, ',', '.') }} / Tiket</p>
                                </div>
                                <div>
                                    <p>Harga Total:</p>
                                </div>
                                <div>
                                    <p>Rp. 25,000</p>
                                </div>
                            </div>
                            <div class="card-actions mt-3">
                                <a href="/invoice" class="w-full	btn btn-success text-white">
                                    Beli
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
