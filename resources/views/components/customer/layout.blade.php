@props(['heading']);

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

<body class="min-h-[100vh] py-[15vh] bg-black text-white flex justify-center items-center relative">
    <x-customer.nav></x-customer.nav>
    {{ $slot }}
</body>

</html>
