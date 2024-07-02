<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('pembeli.navbar')
    <div class="container px-6 mx-auto">
        <div class="text-2xl font-bold p-1 mt-16 mb-5">{{ $kat->nama_kategori }}</div>
        <div class="lg:grid lg:grid-cols-4 gap-6">
            @if ($destinasi->isEmpty())
                <div class="text-center text-gray-500 py-8">Destinasi wisata tidak ditemukan.</div>
            @else
                @foreach ($destinasi as $item)
                    <div class="group relative">
                        <a href="/detail/{{ $item->id_destinasi }}">
                            <div class="relative card bg-base-100 h-full shadow-xl group-hover:opacity-75">
                                @php
                                    $gambar = $item
                                        ->gambar()
                                        ->where('id_destinasi', $item->id_destinasi)
                                        ->first();
                                @endphp
                                @if ($gambar)
                                    <figure class="max-h-48">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('storage/' . $gambar->url_gambar) }}" alt="Image" />
                                    </figure>
                                @else
                                    <figure class="max-h-48">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('default-image.jpg') }}" alt="Default Image" />
                                    </figure>
                                @endif
                                <div class="card-body">
                                    @if ($item->status == 'Buka')
                                        <div class="badge badge-outline badge-accent mt-1">{{ $item->status }}</div>
                                    @else
                                        <div class="badge badge-outline badge-error mt-1">{{ $item->status }}</div>
                                    @endif
                                    <h2 class="card-title line-clamp-2">{{ $item->nama_destinasi }}</h2>
                                    <div class="flex">
                                        <i class="bi bi-geo-alt text-warning me-1 text-sm"></i>
                                        <p class="text-sm line-clamp-1">{{ $item->lokasi }}</p>
                                    </div>
                                    <div class="card-actions justify-between py-3">
                                        <p class="font-semibold text-red-500">Rp.
                                            {{ number_format($item->harga, 2, ',', '.') }}</p>
                                        @php
                                            $kategori = $item
                                                ->kategori()
                                                ->where('id_kategori', $item->id_kategori)
                                                ->first();
                                        @endphp
                                        @if ($kategori)
                                            <div class="badge badge-outline badge-success mt-1">
                                                {{ $kategori->nama_kategori }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</body>

</html>
