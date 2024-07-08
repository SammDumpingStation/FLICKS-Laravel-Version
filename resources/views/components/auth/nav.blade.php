<header class="fixed top-0 w-full p-6 pt-8 z-50">
    <nav class="flex justify-between items-center">
        <a class="flex items-center cursor-pointer gap-4" href="/auth">
            <img class="" src="{{ Vite::asset('resources/icons/logo.png') }}" alt="">
            <h1 class="text-4xl font-bold tracking-[0.7rem]">FLICKS</h1>
        </a>
        @if (request()->is('check'))

        @elseif (request()->is('register'))
            <a href="/login" class="min-w-max text-green" name="options" value="">Login Here!</a>
        @else
            <a href="/check" class="min-w-max text-green" name="options" value="">Register Here!</a>
        @endif
    </nav>
</header>
