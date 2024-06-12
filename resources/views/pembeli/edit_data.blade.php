<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    @include('pembeli.navbar')

    @if (session('success'))
        <div id="success-alert" class="fixed top-20 right-4 z-50">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative shadow-md" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-6">
        <div class="mx-auto max-w-2xl lg:max-w-none w-96 py-14">
            <div class="flex justify-center">
                <i class="bi bi-person-circle text-success" style="font-size: 100px;"></i>
            </div>
            <input type="checkbox" id="edit-toggle" class="toggle toggle-success" />
            <form id="data-form" action="{{ route('user.edit', Auth::user()->id_user) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <label for="full_name" class="block text-gray-700 font-bold">Nama:</label>
                        <input type="text" value="{{ $data->full_name }}" id="full_name" name="full_name" disabled
                            class="editable w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="col-span-2">
                        <label for="username" class="block text-gray-700 font-bold">Username:</label>
                        <input type="text" value="{{ $data->username }}" id="username" name="username" disabled
                            class="editable w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="col-span-2">
                        <label for="email" class="block text-gray-700 font-bold">Email:</label>
                        <input type="email" value="{{ $data->email }}" id="email" name="email" disabled
                            class="editable w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="col-span-2">
                        <button type="submit" class="btn btn-success text-white mt-2 w-full" disabled>Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('edit-toggle');
            const form = document.getElementById('data-form');
            const inputs = form.querySelectorAll('.editable');
            const button = form.querySelector('button[type="submit"]');

            toggle.addEventListener('change', function() {
                if (toggle.checked) {
                    inputs.forEach(input => input.disabled = false);
                    button.disabled = false;
                } else {
                    inputs.forEach(input => input.disabled = true);
                    button.disabled = true;
                }
            });

            // Close alert after 2 seconds
            setTimeout(function() {
                const alert = document.getElementById('success-alert');
                if (alert) {
                    alert.remove();
                }
            }, 5000);
        });
    </script>
</body>

</html>
