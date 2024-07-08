<x-auth.layout>
    <x-slot:heading>
        Log in
    </x-slot:heading>
    <form action="/login" method="POST"
        class="w-full max-w-[600px] mx-auto flex flex-col border-2 rounded-2xl border-secondary-grey py-14 gap-10 px-16">
        @csrf

        <x-auth.head-title title="Welcome!" description="Log in to get discounts when using FLICKS!" />

        <section class="flex flex-col gap-5">
            <x-form-input id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                <x-slot:for>
                    username
                </x-slot:for>
                <label for="email">
                    <img src="{{ Vite::asset('resources/icons/user.png') }}"
                        class="h-6 w-6 absolute left-4 top-3 cursor-pointer z-10" alt="">
                </label>
            </x-form-input>
            @error('email')
                <p class="-mt-4 text-red italic">{{ $message }}</p>
            @enderror
            <x-form-input id="password" type="password" name="password" placeholder="Password">
                <label for="password">
                    <img src="{{ Vite::asset('resources/icons/padlock.png') }}"
                        class="h-6 w-6 absolute left-4 top-3 cursor-pointer z-10" alt="">
                </label>
                <x-form-icons src="{{ Vite::asset('resources/icons/hide.png') }}" />
            </x-form-input>
            @error('password')
                <p class="-mt-4 text-red italic">{{ $message }}</p>
            @enderror
            <div class="flex gap-4 max-w-fit -mt-2 cursor-pointer">
                <input type="checkbox" name="keep" id="keep" class="cursor-pointer">
                <label for="keep" class="cursor-pointer">Keep me Logged In</label>
            </div>

            <div class="flex flex-col mt-10 gap-4">
                <x-button type="wide">Log-in</x-button>
                <a class="text-center hover:text-green cursor-pointer ">Forgot Password?</a>
            </div>
        </section>
        <div class="flex flex-wrap items-center gap-8 mt-8">
            <hr class="flex-1 ">
            <p class="flex-1 min-w-fit">Don't have a FLICKS account?</p>
            <hr class="flex-1">
        </div>
        <a href="/check"
            class="text-center cursor-pointer mx-auto border border-secondary-grey py-2 px-8 max-w-max rounded-md hover:border-green hover:text-green ">Register
            Here!</a>
    </form>

</x-auth.layout>
