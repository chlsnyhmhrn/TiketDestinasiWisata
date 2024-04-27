<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <nav>
        <div class="navbar bg-success">
            <div class="navbar-start">
                <a class="btn btn-ghost text-xl text-white">WonderWoo</a>
            </div>
            <div class="navbar-center">
                <div class="form-control w-72">
                    <input type="text" placeholder="Search" class="input input-bordered rounded-full input-sm w-full max-w-xs" />
                </div>
                <button class="btn btn-ghost btn-circle">
                    <i class="bi bi-card-text font-semibold text-lg text-white"></i>
                </button>
            </div>
            <div class="navbar-end">
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <i class="text-2xl text-white bi bi-person-circle"></i>
                    </div>
                    <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container px-6 mx-auto">
        <div class="mt-10">
            <div class="flex justify-start w-full py-10">
                <h2 class="text-2xl font-bold text-gray-900">Kategori Destinasi Wisata</h2>
            </div>
            <div class="lg:grid lg:grid-cols-4 gap-6">
                <div class="group relative">
                    <div class="relative card bg-base-100 h-full shadow-xl group-hover:opacity-75 image-full">
                        <figure class="max-h-48"><img class="h-full w-full object-cover object-center" src="{{ asset('img/1.jpg') }}" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="card-title w-48">Hiburan</h2>
                        </div>
                    </div>
                </div>
                <div class="group relative">
                    <div class="relative card bg-base-100 h-full shadow-xl group-hover:opacity-75 image-full">
                        <figure class="max-h-48"><img class="h-full w-full object-cover object-center" src="{{ asset('img/kebunraya.png') }}" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="card-title w-48">Alam</h2>
                        </div>
                    </div>
                </div>
                <div class="group relative">
                    <div class="relative card bg-base-100 h-full shadow-xl group-hover:opacity-75 image-full">
                        <figure class="max-h-48"><img class="h-full w-full object-cover object-center" src="{{ asset('img/kampungviet.png') }}" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="card-title w-48">Sejarah</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>