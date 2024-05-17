<nav>
    <div class="navbar bg-success">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl text-white">WonderWoo</a>
        </div>
        <div class="navbar-center">
            <div class="form-control w-72">
                <input type="text" placeholder="Search" class="input input-bordered rounded-full input-sm w-full max-w-xs" />
            </div>
            <a href="/kategori">
                <button class="btn btn-ghost btn-circle">
                    <i class="bi bi-card-text font-semibold text-lg text-white"></i>
                </button>
            </a>
        </div>
        <div class="navbar-end">
            <a href="/favorit" class="btn btn-ghost btn-circle avatar">
                <i class="text-xl text-white bi bi-heart"></i>
            </a>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <i class="text-2xl text-white bi bi-person-circle"></i>
                </div>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a href="/edit_data" class="justify-between">
                            Profile
                        </a>
                    </li>
                    <li><a href="/riwayat_pembelian">Riwayat Pembelian</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>