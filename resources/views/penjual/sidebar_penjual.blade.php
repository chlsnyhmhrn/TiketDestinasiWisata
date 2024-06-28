<!-- start Sidebar -->
<aside class="no-print w-full md:w-64 bg-success text-white sticky top-0 z-49">
    <ul class="py-2 md:py-0 px-3 text-center md:overflow-y-auto">
        <a href="{{ route('penjual.dashboard', Auth::user()->id_user) }}">
            <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer mt-6 {{ Request::routeIs('penjual.dashboard') ? 'bg-stone-700' : '' }}">
                <div class="flex items-center">
                    <i class="bi bi-house-door-fill text-warning text-xl"></i>
                    <span class="ml-4 text-l">Dashboard</span>
                </div>
            </li>
        </a>
        <a href="{{ route('penjual.detail', $destinasi->id_destinasi) }}">
            <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer {{ Request::routeIs('penjual.detail') ? 'bg-stone-700' : '' }}">
                <div class="flex items-center">
                    <i class="bi bi-tags text-warning text-xl"></i>
                    <span class="ml-4 text-l">Detail Produk</span>
                </div>
            </li>
        </a>
        <a href="{{ route('penjual.orderan_masuk', $destinasi->id_destinasi) }}">
            <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer {{ Request::routeIs('penjual.orderan_masuk') ? 'bg-stone-700' : '' }}">
                <div class="flex items-center">
                    <i class="bi bi-building-down text-warning text-xl"></i>
                    <span class="ml-4 text-l">Pesanan Masuk</span>
                </div>
            </li>
        </a>     
        <a href="{{ route('penjual.riwayat_pesanan', $destinasi->id_destinasi) }}">
            <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer {{ Request::routeIs('penjual.riwayat_pesanan') ? 'bg-stone-700' : '' }}">
                <div class="flex items-center">
                    <i class="bi bi-building-fill-check text-warning text-xl"></i>
                    <span class="ml-4 text-l">Riwayat Pesanan</span>
                </div>
            </li>
        </a>
    </ul>
</aside>
<!-- End Sidebar -->
