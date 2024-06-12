<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body style="background-color: #E7ECF1">
    @php
        \Carbon\Carbon::setLocale('id');
        $currentDate = \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y');
        $currentTime = \Carbon\Carbon::now()->timezone('Asia/Jakarta')->format('H:i:s');
    @endphp
    @include('penjual.navbar_penjual')
    <div class="flex flex-col h-screen md:flex-row bg-gray-100">
        @include('penjual.sidebar_penjual')
        <!-- Content -->
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto">
            <main>
                <div class="pt-6 px-6">
                    <div class="flex justify-between items-stretch">
                        <div class="self-center">
                            <p class="text-4xl font-bold">Dashboard</p>
                        </div>
                        <div class="self-center flex gap-5">
                            <p class="border h-min py-2 px-3 rounded-md font-semibold border-gray-400">
                                <i class="bi bi-person mr-1"></i> {{ Auth::user()->username }}
                            </p>
                            <p class="border h-min py-2 px-3 rounded-md font-semibold border-gray-400">
                                <i class="bi bi-calendar-week mr-1"></i> {{ $currentDate }}
                            </p>
                            <p class="border h-min py-2 px-3 rounded-md font-semibold border-gray-400">
                                <i class="bi bi-clock mr-1"></i> <span id="current-time">{{ $currentTime }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="flex justify-end">
                                <form method="GET" action="{{ route('dashboard.penjual', ['id_user' => $destinasi->id_user]) }}">
                                    <select name="filter" onchange="this.form.submit()"
                                        class="select select-sm h-min w-min font-semibold rounded-md bg-gray-200">
                                        <option value="daily" {{ $filter == 'daily' ? 'selected' : '' }}>Harian</option>
                                        <option value="weekly" {{ $filter == 'weekly' ? 'selected' : '' }}>Mingguan</option>
                                        <option value="monthly" {{ $filter == 'monthly' ? 'selected' : '' }}>Bulanan</option>
                                    </select>
                                </form>
                            </div>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">Rp. {{ number_format($pendapatan, 2, ',', '.') }}</span>
                                    <h3 class="text-base font-normal text-gray-500">
                                        Pendapatan {{ $filter == 'daily' ? 'Hari Ini' : ($filter == 'weekly' ? 'Minggu Ini' : 'Bulan Ini') }}
                                    </h3>
                                </div>
                                <div
                                    class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 font-bold text-5xl">
                                    <i class="bi bi-cash-stack"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="flex justify-end py-2">
                                <a href="" class="text-sm font-medium text-cyan-600">Lihat ></a>
                            </div>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $proses }} Transaksi</span>
                                    <h3 class="text-base font-normal text-gray-500">Menunggu persetujuan</h3>
                                </div>
                                <div
                                    class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 font-bold text-5xl">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">385</span>
                                    <h3 class="text-base font-normal text-gray-500">User signups this week</h3>
                                </div>
                                <div
                                    class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
                                    -2.7%
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-2 gap-4 mt-5">
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="mb-4 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Latest Transactions</h3>
                                    <span class="text-base font-normal text-gray-500">This is a list of latest
                                        transactions</span>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#"
                                        class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">View
                                        all</a>
                                </div>
                            </div>
                            <div class="flex flex-col mt-8">
                                <div class="overflow-x-auto rounded-lg">
                                    <div class="align-middle inline-block min-w-full">
                                        <div class="shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Transaction
                                                        </th>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Date & Time
                                                        </th>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Amount
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                    <tr>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment from <span class="font-semibold">Bonnie Green</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 23 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $2300
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                            Payment refund to <span class="font-semibold">#00910</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 23 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            -$670
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment failed from <span
                                                                class="font-semibold">#087651</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 18 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $234
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                            Payment from <span class="font-semibold">Lana Byrd</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 15 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $5000
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment from <span class="font-semibold">Jese Leos</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 15 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $2300
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                            Payment from <span class="font-semibold">THEMESBERG
                                                                LLC</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 11 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $560
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment from <span class="font-semibold">Lana Lysle</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 6 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $1437
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="mb-4 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Latest Transactions</h3>
                                    <span class="text-base font-normal text-gray-500">This is a list of latest
                                        transactions</span>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#"
                                        class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">View
                                        all</a>
                                </div>
                            </div>
                            <div class="flex flex-col mt-8">
                                <div class="overflow-x-auto rounded-lg">
                                    <div class="align-middle inline-block min-w-full">
                                        <div class="shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Transaction
                                                        </th>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Date & Time
                                                        </th>
                                                        <th scope="col"
                                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Amount
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                    <tr>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment from <span class="font-semibold">Bonnie
                                                                Green</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 23 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $2300
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                            Payment refund to <span class="font-semibold">#00910</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 23 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            -$670
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment failed from <span
                                                                class="font-semibold">#087651</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 18 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $234
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                            Payment from <span class="font-semibold">Lana Byrd</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 15 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $5000
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment from <span class="font-semibold">Jese Leos</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 15 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $2300
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                            Payment from <span class="font-semibold">THEMESBERG
                                                                LLC</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 11 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $560
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                            Payment from <span class="font-semibold">Lana Lysle</span>
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                            Apr 6 ,2021
                                                        </td>
                                                        <td
                                                            class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                            $1437
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script>
            function updateTime() {
                const now = new Date();
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                const formattedTime = `${hours}:${minutes}:${seconds}`;
                document.getElementById('current-time').innerText = formattedTime;
            }

            setInterval(updateTime, 1000);
            window.onload = updateTime;
        </script>
</body>

</html>
