<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>
  @include('pembeli.navbar')
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl py-16 lg:max-w-none">
      <h2 class="text-2xl font-bold text-gray-900">Detail Destinasi Wisata</h2>
      <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
        <div class="group relative">
          <div
            class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="{{ asset('img/1.jpg') }}"
              alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
              class="h-full w-full object-cover object-center">
          </div>
        </div>
        <div class="group relative">
          <div
            class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="../img/2.jpg"
              alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
              class="h-full w-full object-cover object-center">
          </div>
        </div>
        <div class="group relative">
          <div
            class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="../img/3.jpg" alt="Collection of four insulated travel bottles on wooden shelf."
              class="h-full w-full object-cover object-center">
          </div>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4 mt-5">
        <div>
          <article class="text-pretty">
            <h3 class="text-lg font-semibold">Mega Wisata Ocarina, Batam</h3>
            <p class="my-2 ms-2"><i class="bi bi-geo-alt"></i>Sadai, Bengkong, Batam Center, Riau 29444 Indonesia</p>
            <p>
              Megawisata Ocarina Batam adalah sebuah tempat wisata pantai yang terletak di Pulau Batam, Kepulauan Riau.
              Tempat wisata ini diresmikan oleh Presiden Susilo Bambang Yudhoyono pada bulan Januari 2009.
              Ocarina berada di lahan seluas 40 hektare berada di tepian Teluk Kering, dan komplek perumahan mewah
              Coastarina.
              terdapat pantai berpasir putih yang cantik dengan kerindangan pohon pinus, area taman bermain nak,
              panggung terbuka dengan kapasitas 10.000 orang dan taman menghijau dilengkapi gazebo dan jogging track.
            </p>
            <h3 class="text-base font-semibold mt-5">Jam Buka</h3>
            <p><i class="bi bi-alarm mr-1"></i>08:00 - 23:00</p>
          </article>
        </div>
        <div class="flex justify-end">
          <div class="card w-96 bg-base-100 shadow-xl border-0">
            <div class="card-body">
              <h2 class="card-title">Pesan Tiket</h2>
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <p>Hari Kunjungan:</p>
                </div>
                <div>
                  <input type="date" placeholder="Type here" class="input input-sm input-bordered w-full max-w-xs" />
                </div>
                <div>
                  <p>Jumlah Tiket:</p>
                </div>
                <div>
                  <input type="number" placeholder="Jumlah" class="input input-sm input-bordered w-full max-w-xs" />
                </div>
              </div>
              <hr class="my-3">
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <p>Harga Tiket:</p>
                </div>
                <div>
                  <p>Rp. 25,000 / Tiket</p>
                </div>
                <div>
                  <p>Harga Total:</p>
                </div>
                <div>
                  <p>Rp. 25,000</p>
                </div>
              </div>
              <div class="card-actions mt-3">
                <a href="/invoice" class="w-full	btn btn-success text-white">
                  Beli
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>