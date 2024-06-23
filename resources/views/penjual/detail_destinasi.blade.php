<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>
    @vite('resources/css/app.css')

    <!-- Include Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body style="background-color: #E7ECF1">
    @include('penjual.navbar_penjual')
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('penjual.sidebar_penjual')
        <!-- Content -->
        <div id="main-content" class="h-full w-full bg-gray-50">
            <div class="pt-7 px-7">
                <a class="btn btn-success btn-sm text-white mb-4"
                    href="{{ route('penjual.edit_detail_view', $destinasi->id_destinasi) }}"><i
                        class="bi bi-pencil-square"></i>Edit</a>
                <div
                    class="lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                    @foreach ($destinasi->gambar()->take(3)->get() as $gambar)
                        <div class="group relative">
                            <div
                                class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                <img
                                    src="{{ asset('storage/' . $gambar->url_gambar) }}"
                                    alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                    class="h-full w-full object-cover object-center">
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="grid grid-cols-2 gap-4 mt-3">
                    <div>
                        <article class="text-pretty">
                            <h1 class="text-2xl font-bold">
                                {{ $destinasi->nama_destinasi }}</h1>
                            <div class="flex">
                                @if ($destinasi->status == 'Buka')
                                    <div
                                        class="badge badge-outline badge-accent p-3 my-2 mr-2">{{ $destinasi->status }}</div>
                                @else
                                    <div
                                        class="badge badge-outline badge-error p-3 my-2 mr-2">{{ $destinasi->status }}</div>
                                @endif
                                <input id="status-checkbox"
                                    type="checkbox"
                                    class="toggle toggle-success p-3 my-2"
                                    {{ $destinasi->status == 'Buka' ? 'checked' : '' }}>
                            </div>
                            <p class="my-2 font-semibold"><i
                                    class="bi bi-geo-alt text-warning mr-1"></i>{{ $destinasi->lokasi }}
                            </p>
                            <p>{!! nl2br(e($destinasi->deskripsi)) !!}</p>
                            <h3 class="text-base font-semibold mt-5">Jam Buka</h3>
                            <p>
                                <i class="bi bi-alarm mr-1"></i>
                                {{
                                \Carbon\Carbon::createFromFormat('H:i:s',
                                $destinasi->jam_buka)->format('H:i') }}
                                - {{
                                \Carbon\Carbon::createFromFormat('H:i:s',
                                $destinasi->jam_tutup)->format('H:i') }}
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('status-checkbox').addEventListener('change', function () {
            var isChecked = this.checked;
            var status = isChecked ? 'Buka' : 'Tutup';

            // Kirim permintaan AJAX untuk update status
            axios.put('{{ route('penjual.edit_status_action', $destinasi->id_destinasi) }}', {
                    status: status
                })
                .then(function (response) {
                    // Handle jika update berhasil (opsional)
                    console.log('Status updated successfully');
                    window.location.reload();
                })
                .catch(function (error) {
                    // Handle jika terjadi error saat update (opsional)
                    console.error('Error updating status: ' + error);
                });
        });
    </script>
</body>

</html>
