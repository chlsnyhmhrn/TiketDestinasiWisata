<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>
    @vite('resources/css/app.css')
</head>
<body style="background-color: #E7ECF1">
    @include('penjual.navbar_penjual')
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="flex flex-col md:flex-row bg-gray-100">
        @include('penjual.sidebar_penjual')
        <!-- Content -->
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 lg:max-w-none">
                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                    @foreach ($destinasi->gambar()->get() as $gambar)
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
    
                @if (Auth::check() && Auth::user()->user_type == 'pembeli')
                    @if ($isFavorit)
                        <!-- Form untuk menghapus favorit -->
                        <form action="{{ route('detDestinasi.hapus_favorit') }}" method="post">
                            @csrf
                            <input type="hidden" name="id_user" value="{{ Auth::user()->id_user }}">
                            <input type="hidden" name="id_destinasi" value="{{ $destinasi->id_destinasi }}">
                            <button class="btn mt-5 btn-error text-white" type="submit">
                                Favorit
                                <i class="text-lg font-semibold bi bi-heart-fill"></i>
                            </button>
                        </form>
                    @else
                        <!-- Form untuk menambah favorit -->
                        <form action="{{ route('detDestinasi.tambah_favorit') }}" method="post">
                            @csrf
                            <input type="hidden" name="id_user" value="{{ Auth::user()->id_user }}">
                            <input type="hidden" name="id_destinasi" value="{{ $destinasi->id_destinasi }}">
                            <button class="btn mt-5" type="submit">
                                Favorit
                                <i class="text-lg font-semibold bi bi-heart"></i>
                            </button>
                        </form>
                    @endif
                @endif
    
                <div class="grid grid-cols-2 gap-4 mt-3">
                    <div>
                        <article class="text-pretty">
                            <h1 class="text-2xl font-bold">{{ $destinasi->nama_destinasi }}</h1>
                            @if ($destinasi->status == 'Buka')
                                <div class="badge badge-outline badge-accent p-3 my-2">{{ $destinasi->status }}</div>
                            @else
                                <div class="badge badge-outline badge-error p-3 my-2">{{ $destinasi->status }}</div>
                            @endif
                            <p class="my-2 ms-2"><i class="bi bi-geo-alt text-warning m-1"></i>{{ $destinasi->lokasi }}</p>
                            <p>{{ $destinasi->deskripsi }}</p>
                            <h3 class="text-base font-semibold mt-5">Jam Buka</h3>
                            <p>
                                <i class="bi bi-alarm mr-1"></i>
                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $destinasi->jam_buka)->format('H:i') }} -
                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $destinasi->jam_tutup)->format('H:i') }}
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>