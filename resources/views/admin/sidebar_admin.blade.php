    <!-- start Sidebar -->
    <aside class="no-print w-full md:w-64 bg-success text-white sticky top-0 z-49">
        <ul class="py-2 md:py-0 px-3 text-center md:overflow-y-auto">
            <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer mt-6">
                <div class="flex items-center">
                    <i class="bi bi-house-door-fill text-warning text-xl"></i>
                    <a href="{{ route('admin.dashboard') }}" class="ml-4 text-l">Dashboard</a>
                </div>
            </li>
            <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer">
                <div class="flex items-center">
                    <i class="bi bi-person-lines-fill text-warning text-xl"></i>
                    <a href="/admin/list_pengguna" class="ml-4 text-l">Akun Pengguna</a>
                </div>
            </li> 
            <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer">
                <div class="flex items-center">
                    <i class="bi bi-pin-map text-warning text-xl"></i>
                    <a href="/admin/list_destinasi" class="ml-4 text-l">Destinasi Wisata</a>
                </div>
            </li>
            <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer">
                <div class="flex items-center">
                    <i class="bi bi-ticket-detailed-fill text-warning text-xl "></i>
                    <a href="/admin/list_tiket" class="ml-4 text-l">Tiket Wisata</a>
                </div>
            </li>
            <li class="block px-4 py-2 hover:bg-stone-700 hover:cursor-pointer">
                <div class="flex items-center">
                    <i class="bi bi-clock-history text-warning text-xl"></i>
                    <a href="/" class="ml-4 text-l">Riwayat Transaksi</a>
                </div>
            </li>
        </ul>
    </aside>
