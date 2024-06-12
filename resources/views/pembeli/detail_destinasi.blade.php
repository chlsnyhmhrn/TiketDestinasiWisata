<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    @if (session('tiket_success'))
        <div id="alert" class="fixed top-20 right-4 z-50">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative shadow-md"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('tiket_success') }}</span>
            </div>
        </div>
    @endif

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

            @if (Auth::check() && Auth::user()->user_type == 'pembeli')
                @if ($isFavorit)
                    <!-- Form untuk menghapus favorit -->
                    <form action="{{ route('detDestinasi.hapus_favorit') }}" method="post">
                        @csrf
                        <input type="hidden" name="id_user" value="{{ Auth::user()->id_user }}">
                        <input type="hidden" name="id_destinasi" value="{{ $data->id_destinasi }}">
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
                        <input type="hidden" name="id_destinasi" value="{{ $data->id_destinasi }}">
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
                        <h1 class="text-2xl font-bold">{{ $data->nama_destinasi }}</h1>
                        @if ($data->status == 'Buka')
                            <div class="badge badge-outline badge-accent p-3 my-2">{{ $data->status }}</div>
                        @else
                            <div class="badge badge-outline badge-error p-3 my-2">{{ $data->status }}</div>
                        @endif
                        <p class="my-2 ms-2"><i class="bi bi-geo-alt text-warning m-1"></i>{{ $data->lokasi }}</p>
                        <p>{{ $data->deskripsi }}</p>
                        <h3 class="text-base font-semibold mt-5">Jam Buka</h3>
                        <p>
                            <i class="bi bi-alarm mr-1"></i>
                            {{ \Carbon\Carbon::createFromFormat('H:i:s', $data->jam_buka)->format('H:i') }} -
                            {{ \Carbon\Carbon::createFromFormat('H:i:s', $data->jam_tutup)->format('H:i') }}
                        </p>
                    </article>
                </div>
                <div class="flex justify-end">
                    <div class="card w-96 h-min bg-base-100 shadow-xl border-0">
                        <div class="card-body">
                            <h2 class="card-title">Pesan Tiket</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p>Tanggal Kunjungan:</p>
                                </div>
                                <div>
                                    <input id="tanggalKunjunganCard" type="date" placeholder="Type here"
                                        class="input input-sm input-bordered w-full max-w-xs" />
                                </div>
                                <div>
                                    <p>Jumlah Tiket:</p>
                                </div>
                                <div>
                                    <input id="jumlahTiketCard" type="number" placeholder="Jumlah"
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
                            </div>
                            <div class="card-actions mt-3">
                                <button class="btn w-full bg-success text-white"
                                    onclick="handlePesanClick()">Pesan</button>
                                <dialog id="my_modal_3" class="modal">
                                    <div class="modal-box">
                                        <form method="dialog">
                                            <button
                                                class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                        </form>
                                        <h3 class="font-bold text-lg">Pesan Tiket</h3>
                                        <form action="{{ route('detDestinasi.tambah_tiket') }}" class="mt-3"
                                            method="POST">
                                            @csrf
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <p>Nama Pemesan:</p>
                                                </div>
                                                <div>
                                                    @if (Auth::check() && Auth::user()->user_type == 'pembeli')
                                                        <p class="font-semibold">{{ Auth::user()->full_name }}</p>
                                                        <input hidden type="number" name="id_user"
                                                            value="{{ Auth::user()->id_user }}" />
                                                    @endif
                                                </div>
                                                <div>
                                                    <p>Destinasi Wisata:</p>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">{{ $data->nama_destinasi }}</p>
                                                    <input hidden type="number" name="id_destinasi"
                                                        value="{{ $data->id_destinasi }}" />
                                                </div>
                                                <div>
                                                    <p>Tanggal Kunjungan:</p>
                                                </div>
                                                <div>
                                                    <p id="tanggalKunjunganText" class="font-semibold"></p>
                                                    <input hidden id="tanggalKunjunganModal" type="date"
                                                        placeholder="Type here" name="tanggal_kunjungan"
                                                        class="input input-sm input-bordered w-full max-w-xs" />
                                                </div>
                                                <div>
                                                    <p>Jumlah Tiket:</p>
                                                </div>
                                                <div>
                                                    <p id="jumlahTiketText" class="font-semibold"></p>
                                                    <input hidden id="jumlahTiketModal" type="number"
                                                        placeholder="Jumlah" name="total_pesanan"
                                                        class="input input-sm input-bordered w-full max-w-xs" />
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <p>Total Harga:</p>
                                                </div>
                                                <div>
                                                    <p id="totalHargaText" class="font-semibold"></p>
                                                    <input id="totalHargaModal" hidden type="number"
                                                        placeholder="Total" name="total_harga"
                                                        class="input input-sm input-bordered w-full max-w-xs" />
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-success text-white w-full mt-3">Konfirmasi</button>
                                        </form>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="alert-login" class="fixed top-20 right-4 z-50 hidden">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative shadow-md"
            role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">Silahkan login terlebih dahulu</span>
        </div>
    </div>

    <div id="alert-pesan" class="fixed top-20 right-4 z-50 hidden">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative shadow-md"
            role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">Tanggal Kunjungan & Jumlah Tiket tidak boleh kosong</span>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const alert = document.getElementById('alert');
                if (alert) {
                    alert.remove();
                }
            }, 5000);
        });

        const isAuthenticated = @json(Auth::check() && Auth::user()->user_type == 'pembeli');

        function handlePesanClick() {
            const jumlahTiketCard = document.getElementById('jumlahTiketCard').value;
            const tanggalKunjunganCard = document.getElementById('tanggalKunjunganCard').value;

            if (isAuthenticated) {
                if (jumlahTiketCard && tanggalKunjunganCard) {
                    const hargaTiket = {{ $data->harga }};
                    const totalHarga = jumlahTiketCard * hargaTiket;

                    const formattedTanggalKunjungan = new Date(tanggalKunjunganCard).toLocaleDateString('id-ID', {
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric'
                    });

                    document.getElementById('jumlahTiketModal').value = jumlahTiketCard;
                    document.getElementById('tanggalKunjunganModal').value = tanggalKunjunganCard;
                    document.getElementById('totalHargaModal').value = totalHarga;
                    document.getElementById('totalHargaText').innerText = `Rp. ${totalHarga.toLocaleString('id-ID')}`;
                    document.getElementById('jumlahTiketText').innerText = jumlahTiketCard;
                    document.getElementById('tanggalKunjunganText').innerText = formattedTanggalKunjungan;

                    document.getElementById('my_modal_3').showModal();
                } else {
                    const alertPesan = document.getElementById('alert-pesan');
                    alertPesan.classList.remove('hidden');
                    setTimeout(() => {
                        alertPesan.classList.add('hidden');
                    }, 3000);
                }
            } else {
                const alertLogin = document.getElementById('alert-login');
                alertLogin.classList.remove('hidden');
                setTimeout(() => {
                    alertLogin.classList.add('hidden');
                }, 3000);
            }
        }
    </script>
</body>

</html>
