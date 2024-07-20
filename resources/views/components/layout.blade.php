<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ Vite::asset('resources/icons/logo.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $heading }}</title>
</head>

<body class="min-h-[100vh] py-[150px] bg-black text-white flex justify-center relative">
    <x-customer.nav />
    <main class="flex flex-col gap-24 max-w-[1150px] w-full">
        {{ $slot }}
    </main>
</body>

</html>
