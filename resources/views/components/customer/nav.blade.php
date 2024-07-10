<header class="fixed top-0 w-full z-10 p-6 bg-secondary-black">
    <nav class="flex justify-between items-center">

        <a href="/" class="flex items-center cursor-pointer gap-4 w-fit flex-1">
            <img src="{{ Vite::asset('resources/icons/logo.png') }}" alt="">
            <h1 class="text-4xl font-bold tracking-[0.7rem]">FLICKS</h1>
        </a>

        <section class="flex gap-x-8 flex-1 h-14 ">
            <x-form.input type="navbar" placeholder="Search for movies..." />
            <button class="bg-green w-12 h-full rounded-md hover:bg-transparent border border-transparent hover:border-white ">
                <img class="mx-auto" src="{{ Vite::asset('resources/icons/search.png') }}" alt="">
            </button>
        </section>

        <section class="flex gap-6 justify-end items-center flex-1">
            @auth
                <h1 class="min-w-max ">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
                <button form="logout"
                    class="px-4 border-green border py-2 hover:bg-green rounded-md min-w-max">Log-out</button>
            @endauth
            @guest
                <h1 class="">Log-in to get discounts!</h1>
                <a href="/auth" class="px-4 border-green border py-2 hover:bg-green rounded-md min-w-max">Log-in</a>
            @endguest
        </section>
    </nav>
    <form id="logout" action="/logout" method="POST" hidden>@csrf</form>
</header>
