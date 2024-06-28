@if (session('logout'))
<div id="alert" class="fixed top-20 right-4 z-50">
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative shadow-md"
        role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('logout') }}</span>
    </div>
</div>
@endif
<nav>
    <div class="navbar bg-success">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl text-white">WonderWoo</a>
        </div>
        <div class="navbar-center">
            <div class="form-control w-72">
                <form action="{{ route('user.beranda') }}" method="GET">
                    <input type="text" placeholder="Cari" name="search" class="input input-bordered rounded-full input-sm w-full max-w-xs">
                </form>
            </div>
            <div class="dropdown">
                <div tabindex="1" role="button" class="btn btn-ghost btn-circle avatar">
                    <i class="bi bi-card-text font-semibold text-lg text-white"></i>
                </div>
                <ul tabindex="1"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <div class="p-2">
                        <p class="font-semibold">Kategori</p>
                    </div>
                    <hr>
                    @foreach ($kategori as $item)
                        <li><a href="{{ route('halaman.kategori', $item->id_kategori) }}">{{$item->nama_kategori}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="navbar-end">
            @if (Auth::check() && Auth::user()->user_type == 'pembeli')
            <a href="{{ route('favorit', Auth::user()->id_user) }}" class="btn btn-ghost btn-circle avatar">
                <i class="text-xl text-white bi bi-heart"></i>
            </a>
            <a href="{{ route('riwayatPembelian', Auth::user()->id_user) }}" class="btn btn-ghost btn-circle avatar">
                <i class="text-xl text-white bi bi-clock-history"></i>
            </a>
            @endif
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <i class="text-xl text-white bi bi-person-circle"></i>
                </div>
                @if (Auth::check() && Auth::user()->user_type == 'pembeli')
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
                @else
                    <ul tabindex="0"
                        class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <p class="font-semibold"><i class="bi bi-person-circle"></i>Hello Guest</p>
                        </li>
                        <hr>
                        <li>
                            <a href="{{ route('login') }}" class="justify-between">
                                Login
                            </a>
                        </li>
                    </ul>
                @endif
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
        }, 3000);
    });
</script>
