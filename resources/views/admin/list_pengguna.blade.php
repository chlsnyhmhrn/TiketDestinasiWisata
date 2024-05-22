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
    @include('admin.navbar_admin')

<div class="flex flex-col md:flex-row h-screen bg-gray-100">
    @include('admin.sidebar_admin')

    <div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">List Pengguna</h1>
    <div class="overflow-x-auto card bg-base-100 shadow-xl border-0 m-5">
        <table class="table w-full">
            <thead>
                <tr class="font-bold text-l">
                    <th></th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nama Lengkap</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Buyer_01</td>
                    <td>firstbuyer01@gmail.com</td>
                    <td>First Buyer</td>
                    <td>Pembeli</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Buyer_02</td>
                    <td>secondbuyer02@gmail.com</td>
                    <td>Second Buyer</td>
                    <td>Pembeli</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Seller_01</td>
                    <td>firstseller01@gmail.com</td>
                    <td>First Seller</td>
                    <td>Penjual</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Buyer_03</td>
                    <td>thirdbuyer03@gmail.com</td>
                    <td>Third Buyer</td>
                    <td>Pembeli</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Seller_03</td>
                    <td>thidrseller03@gmail.com</td>
                    <td>Third Seller</td>
                    <td>Penjual</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Buyer_04</td>
                    <td>fourthbuyer04@gmail.com</td>
                    <td>Fourth Buyer</td>
                    <td>Pembeli</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Buyer_05</td>
                    <td>fifthbuyer05@gmail.com</td>
                    <td>Fifth Buyer</td>
                    <td>Pembeli</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Seller_04</td>
                    <td>fourthseller04@gmail.com</td>
                    <td>Fourth Seller</td>
                    <td>Penjual</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Buyer_06</td>
                    <td>sixthbuyer06@gmail.com</td>
                    <td>Sixth Buyer</td>
                    <td>Pembeli</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Seller_05</td>
                    <td>fifthseller05@gmail.com</td>
                    <td>Fifth Seller</td>
                    <td>Penjual</td>
                </tr>
                <!-- Tambahkan lebih banyak data destinasi sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</div>

    
</div>
</body>
</html>