<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icons/logo.png') }}" type="image/png">
    @vite('resources/css/app.css')
    <title>{{ $heading }}</title>
</head>

<body class="min-h-full bg-black text-white p-[150px] relative mb-[1000px]">
    <x-auth.nav></x-auth.nav>
    {{ $slot }}
</body>

</html>
