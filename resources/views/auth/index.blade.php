<x-auth.layout>
    <x-slot:heading>
        Authentication
    </x-slot:heading>
    <form action="/auth" method="POST"
        class="max-w-[600px] my-[5vh] mx-auto flex flex-col items-center justify-center gap-14">
        @csrf

        <x-auth.head-title>
            <x-slot:title><span class="text-green">Register</span> with FLICKS Today!</x-slot:title>
            <x-slot:description>Log in to access your personalized dashboard and special offers!</x-slot:description>
        </x-auth.head-title>

        <section class="w-full flex justify-between flex-wrap">
            <x-auth.select for="guest">
                <x-radio-button id="guest" value="guest" name="option" />
                <img src="{{ Vite::asset('resources/icons/user.png') }}" alt="" class="h-8 w-8">
                <label class="text-2xl font-medium cursor-pointer group-hover:text-green" for="guest">Continue as
                    Guest</label>
            </x-auth.select>


            <x-auth.select for="auth">
                <x-radio-button id="auth" value="user" name="option" />
                <img src="{{ Vite::asset('resources/icons/user.png') }}" class="h-8 w-8" alt="">
                <label for="auth" class="text-2xl font-medium cursor-pointer group-hover:text-green">I have an
                    account</label>
            </x-auth.select>
        </section>

        <section class="flex w-full gap-8">
            <a href="/"
                class="flex-1 basis-full text-center p-3 border border-transparent rounded-md hover:bg-red">
                Cancel
            </a>
            <x-wide-green-button>
                Continue
            </x-wide-green-button>
        </section>
    </form>
</x-auth.layout>
