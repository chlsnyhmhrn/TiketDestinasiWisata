<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembelian</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('pembeli.navbar')
    @if (session('batalkan_pesanan'))
        <div id="alert" class="fixed top-20 right-4 z-50">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative shadow-md"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('batalkan_pesanan') }}</span>
            </div>
        </div>
    @endif
    <div class="container mx-auto">
        <div class="content ml-5">
            <div class="mx-auto">
                <div class="mx-auto max-w-2xl py-10 lg:max-w-6xl">
                    <div class="text-2xl font-bold p-1 mt-5">Riwayat Pembelian</div>
                    @foreach ($tiket as $tiket)
                        @php
                            $destinasi = $tiket->destinasi;
                            $gambar = $destinasi
                                ->gambar()
                                ->where('id_destinasi', $tiket->id_destinasi)
                                ->first();
                            \Carbon\Carbon::setLocale('id');
                            $tanggalKunjungan = \Carbon\Carbon::parse($tiket->tanggal_kunjungan)->translatedFormat(
                                'd F Y',
                            );
                        @endphp
                        <div class="card card-side bg-base-100 shadow-xl">
                            @if ($gambar)
                                <figure><img src="{{ asset('storage/' . $gambar->url_gambar) }}"
                                        class="p-6 w-80 rounded-xl">
                                </figure>
                            @endif
                            <div class="card-body">
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="col-span-3">
                                        <h2 class="card-title">{{ $destinasi->nama_destinasi }}</h2>
                                    </div>
                                    <div class="flex justify-end text-end">
                                        @if ($tiket->status == 'Diproses')
                                            <p class="font-semibold text-warning">{{ $tiket->status }}</p>
                                        @elseif ($tiket->status == 'Disetujui')
                                            <p class="font-semibold text-success">{{ $tiket->status }}</p>
                                        @else
                                            <p class="font-semibold text-error">{{ $tiket->status }}</p>
                                        @endif
                                    </div>
                                </div>
                                <p><i class="bi bi-geo-alt-fill text-warning"></i> {{ $destinasi->lokasi }}</p>
                                <p class="font-semibold">Jumlah Tiket: {{ $tiket->total_pesanan }}</p>
                                <p class="font-semibold">Tanggal Kunjungan: {{ $tanggalKunjungan }}</p>
                                <div class="card-actions justify-end">
                                    @if ($tiket->status == 'Diproses')
                                        <a href="{{ route('invoice', $tiket->id_tiket) }}" aria-disabled="true"
                                            class="btn bg-warning text-white rounded-full btn-disabled">Invoice</a>
                                        <form action="{{ route('riwayatPembelian.batalkan_pesanan', $tiket->id_tiket) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input hidden name="status" type="number" value="2">
                                            <button class="btn bg-error text-white rounded-full">Batalkan</button>
                                        </form>
                                    @elseif ($tiket->status == 'Dibatalkan')
                                        <a href="{{ route('invoice', $tiket->id_tiket) }}" aria-disabled="true"
                                            class="btn bg-warning text-white rounded-full btn-disabled">Invoice</a>
                                        <a href="{{ route('detailDestinasi', $destinasi->id_destinasi) }}"
                                            class="btn bg-success text-white rounded-full">Pesan Lagi</a>
                                    @else
                                        <a href="{{ route('invoice', $tiket->id_tiket) }}"
                                            class="btn bg-warning text-white rounded-full">Invoice</a>
                                        <a href="{{ route('detailDestinasi', $destinasi->id_destinasi) }}"
                                            class="btn bg-success text-white rounded-full">Pesan Lagi</a>
                                    @endif
                                </div>
                                <h3 class="card-title font-bold text-red-500">Rp.
                                    {{ number_format($tiket->total_harga, 2, ',', '.') }}</h3>
                            </div>
                        </div>
                        <div class="divider"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>
