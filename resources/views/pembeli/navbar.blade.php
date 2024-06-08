<nav>
    <div class="navbar bg-success">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl text-white">WonderWoo</a>
        </div>
        <div class="navbar-center">
            <div class="form-control w-72">
                <form action="{{ route('user.beranda') }}" method="GET">
                    <input type="text" placeholder="Search" name="search" class="input input-bordered rounded-full input-sm w-full max-w-xs">
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
                        <li><a href="">{{$item->nama_kategori}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="navbar-end">
            @if (Auth::check() && Auth::user()->user_type == 'pembeli')
            <a href="{{ route('favorit', Auth::user()->id_user) }}" class="btn btn-ghost btn-circle avatar">
                <i class="text-xl text-white bi bi-heart"></i>
            </a>
            @endif
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <i class="text-2xl text-white bi bi-person-circle"></i>
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
                        <li><a href="/riwayat_pembelian">Riwayat Pembelian</a></li>
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
