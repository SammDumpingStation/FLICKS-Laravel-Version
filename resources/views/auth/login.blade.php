<x-auth.layout>
    <x-slot:heading>
        Log in
    </x-slot:heading>
    <form action="/login" method="POST"
        class="w-full max-w-[600px] mx-auto flex flex-col border-2 rounded-2xl border-secondary-grey py-14 gap-10 px-16">

        <x-auth.head-title>
            <x-slot:title>Welcome!</x-slot:title>
            <x-slot:description>Log in to get discounts when using FLICKS!</x-slot:description>
        </x-auth.head-title>

        <section class="flex flex-col gap-5">
            <x-form-input id="username" type="text" name="username" placeholder="Username or Email">
                <x-slot:for>
                    username
                </x-slot:for>
                <label for="username">
                    <img src="{{ Vite::asset('resources/icons/user.png') }}"
                        class="h-6 w-6 absolute left-4 top-3 cursor-pointer" alt="">
                </label>
            </x-form-input>

            <x-form-input id="password" type="password" name="pwd" placeholder="Password">
                <label for="password">
                    <img src="{{ Vite::asset('resources/icons/padlock.png') }}"
                        class="h-6 w-6 absolute left-4 top-3 cursor-pointer" alt="">
                </label>
            </x-form-input>

            <div class="flex gap-4 max-w-fit -mt-2 cursor-pointer">
                <input type="checkbox" name="keep" id="keep" class="cursor-pointer">
                <label for="keep" class="cursor-pointer">Keep me Logged In</label>
            </div>

            {{-- Error code goes here --}}

            <div class="flex flex-col mt-10 gap-4">
                <x-wide-green-button>Log-in</x-wide-green-button>
                <a class="text-center hover:text-green cursor-pointer ">Forgot Password?</a>
            </div>
        </section>
        <div class="flex flex-wrap items-center gap-8 mt-8">
            <hr class="flex-1 ">
            <p class="flex-1 min-w-fit">Don't have a FLICKS account?</p>
            <hr class="flex-1">
        </div>
        <a href="/check-id"
            class="text-center cursor-pointer mx-auto border border-secondary-grey py-2 px-8 max-w-max rounded-md hover:border-green hover:text-green ">Register
            Here!</a>
    </form>

</x-auth.layout>
