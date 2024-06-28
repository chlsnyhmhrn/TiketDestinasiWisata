@if (session('success'))
    <div id="alert" class="fixed top-20 right-4 z-50">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative shadow-md"
            role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    </div>
@endif
@if (session('error'))
    <div id="alert" class="fixed top-20 right-4 z-50">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative shadow-md" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    </div>
@endif
<nav class="sticky top-0 z-50">
    <div class="navbar bg-success">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl text-white mr-20">WonderWoo</a>
            @if (Request::routeIs('admin.dashboard'))
                <p class="text-xl text-white font-semibold">Dashboard</p>
            @elseif (Request::routeIs('admin.list_pengguna'))
                <p class="text-xl text-white font-semibold">Akun Pengguna</p>
            @elseif (Request::routeIs('admin.detail_pengguna'))
                <p class="text-xl text-white font-semibold">Detail Akun Pengguna</p>
            @endif
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <i class="text-xl text-white bi bi-person-circle"></i>
                </div>
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <p class="font-semibold"><i class="bi bi-person-circle"></i>Hello
                            {{ Auth::user()->username }}</p>
                    </li>
                    <hr>
                    <li>
                        <a href="/user/{{ Auth::user()->id_user }}" class="justify-between">
                            Profile
                        </a>
                    </li>
                    <li><a href="{{ route('actionLogout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            const alert = document.getElementById('alert');
            if (alert) {
                alert.remove();
            }
        }, 5000);
    });
</script>
