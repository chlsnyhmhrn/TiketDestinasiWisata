<!-- start Sidebar -->
<aside class="no-print w-full md:w-64 bg-success text-white sticky top-0 z-49">
    <ul class="py-2 md:py-0 px-3 text-center md:overflow-y-auto">
        <li
            class="block px-4 py-2 mt-6 hover:cursor-pointer {{ Request::routeIs('admin.dashboard') ? 'bg-stone-700' : 'hover:bg-stone-700' }}">
            <div class="flex items-center">
                <i class="bi bi-house-door-fill text-warning text-xl"></i>
                <a href="{{ route('admin.dashboard') }}" class="ml-4 text-l">Dashboard</a>
            </div>
        </li>
        <li
            class="block px-4 py-2 hover:cursor-pointer {{ Request::routeIs('admin.list_pengguna') ? 'bg-stone-700' : 'hover:bg-stone-700' }}">
            <div class="flex items-center">
                <i class="bi bi-person-lines-fill text-warning text-xl"></i>
                <a href="{{ route('admin.list_pengguna') }}" class="ml-4 text-l">Akun Pengguna</a>
            </div>
        </li>
        <li
            class="block px-4 py-2 hover:cursor-pointer {{ Request::routeIs('admin.list_destinasi') ? 'bg-stone-700' : 'hover:bg-stone-700' }}">
            <div class="flex items-center">
                <i class="bi bi-pin-map text-warning text-xl"></i>
                <a href="{{ route('admin.list_destinasi') }}" class="ml-4 text-l">Destinasi Wisata</a>
            </div>
        </li>
        <li class="block px-4 py-2 hover:cursor-pointer {{ Request::routeIs('admin.list_tiket') ? 'bg-stone-700' : 'hover:bg-stone-700' }}">
            <div class="flex items-center">
                <i class="bi bi-ticket-detailed-fill text-warning text-xl"></i>
                <a href="{{ route('admin.list_tiket') }}" class="ml-4 text-l">Tiket Wisata</a>
            </div>
        </li>
    </ul>
</aside>
<!-- End Sidebar -->
