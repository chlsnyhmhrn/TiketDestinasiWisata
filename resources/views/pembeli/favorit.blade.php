<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorit</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('pembeli.navbar')
    @if (session('favorit_success'))
        <div id="alert" class="fixed top-20 right-4 z-50">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative shadow-md"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('favorit_success') }}</span>
            </div>
        </div>
    @endif
    <div class="container mx-auto">
        <div class="content">
            <div class="mx-auto">
                <div class="mx-auto max-w-2xl py-10 lg:max-w-6xl">
                    <div class="text-2xl font-bold p-1 mt-5">Destinasi Favorit Anda</div>
                    <div class="grid grid-cols-1 gap-4 mt-5">
                        @forelse ($favorit as $fav)
                            @php
                                $destinasi = $fav->destinasi;
                                $gambar = $destinasi
                                    ->gambar()
                                    ->where('id_destinasi', $fav->id_destinasi)
                                    ->first();
                            @endphp
                            <div class="card card-side bg-base-100 shadow-xl">
                                @if ($gambar)
                                    <img src="{{ asset('storage/' . $gambar->url_gambar) }}" alt="Image"
                                        class="p-6 w-80 rounded-lg" id="produk-foto">
                                @endif
                                <div class="card-body mr-5">
                                    <div class="grid grid-cols-4 gap-4">
                                        <div class="col-span-3">
                                            <h2 class="card-title">{{ $destinasi->nama_destinasi }}</h2>
                                        </div>
                                        <div class="flex justify-end">
                                            <form action="{{ route('favorit.hapus') }}" method="post"
                                                onsubmit="return confirmDelete(this);">
                                                @csrf
                                                <input type="hidden" name="id_user"
                                                    value="{{ Auth::user()->id_user }}">
                                                <input type="hidden" name="id_destinasi"
                                                    value="{{ $destinasi->id_destinasi }}">
                                                <button class="btn btn-circle bg-error text-white" type="submit">
                                                    <i class="bi bi-heart-fill text-xl"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <p><i class="bi bi-geo-alt-fill text-warning"></i> {{ $destinasi->lokasi }}</p>
                                    <p class="font-bold text-2xl red text-red-500">Rp.
                                        {{ number_format($destinasi->harga, 2, ',', '.') }}</p>
                                    <div class="card-actions justify-end">
                                        <a href="{{ route('detailDestinasi', $destinasi->id_destinasi) }}"
                                            class="btn btn-md sm:btn-sm md:btn-md rounded-full w-40 bg-success text-white">Pesan</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-xl font-semibold mt-10">Belum ada tempat wisata yang disimpan
                                di
                                halaman favorit Anda.</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(form) {
            if (confirm('Apakah Anda yakin ingin menghapus destinasi ini dari favorit?')) {
                return true;
            }
            return false;
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Close alert after 2 seconds
            setTimeout(function() {
                const alert = document.getElementById('alert');
                if (alert) {
                    alert.remove();
                }
            }, 5000);
        });
    </script>
</body>

</html>
