<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Masuk</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('penjual.navbar_penjual')
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('penjual.sidebar_penjual')
        <div class="w-full bg-white p-8 rounded-2xl shadow-md">
            <p class="text-3xl font-bold">Pesanan Masuk</p>
            <div class="flex flex-col mt-8">
                <div class="overflow-x-auto rounded-lg">
                    <div class="align-middle inline-block min-w-full">
                        <div class="shadow overflow-hidden sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Pembeli
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Tanggal Kunjungan
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Tanggal Pembelian
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Total Tiket
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Total Harga
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ...
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @if ($tiket->count() > 0)
                                        @foreach ($tiket as $item)
                                            <tr>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    {{ $item->user->full_name }}
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                    {{ \Carbon\Carbon::parse($item->tanggal_kunjungan)->locale('id')->translatedFormat('l, d F Y') }}
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                    {{ \Carbon\Carbon::parse($item->tanggal_pesanan)->locale('id')->translatedFormat('l, d F Y') }}
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    {{ $item->total_pesanan }}
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    Rp.
                                                    {{ number_format($item->total_harga, 2, ',', '.') }}
                                                </td>
                                                <td>
                                                    <div class="flex gap-2">
                                                        <form
                                                            action="{{ route('penjual.setujui_pesanan', $item->id_tiket) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit"
                                                                class="btn text-white text-xs btn-success btn-sm rounded-md">
                                                                Setujui
                                                            </button>
                                                        </form>
                                                        <form
                                                            action="{{ route('penjual.batalkan_pesanan', $item->id_tiket) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit"
                                                                class="btn text-white text-xs btn-error btn-sm rounded-md">
                                                                Batalkan
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="100%"
                                                class="p-4 text-center whitespace-nowrap text-sm font-semibold text-gray-900">
                                                Pesanan tidak tersedia.
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
