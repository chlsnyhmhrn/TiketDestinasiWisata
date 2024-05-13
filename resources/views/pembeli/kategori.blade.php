<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    @include('pembeli.navbar')

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