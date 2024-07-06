<x-auth.layout>
    <x-slot:heading>
        Authentication
    </x-slot:heading>
    <form action="/auth" method="POST"
        class="max-w-[600px] w-full mx-auto flex flex-col items-center justify-center gap-14">
        @csrf

        <x-auth.head-title>
            <x-slot:title><span class="text-green">Register</span> with FLICKS Today!</x-slot:title>
            <x-slot:description>Log in to access your personalized dashboard and special offers!</x-slot:description>
        </x-auth.head-title>

        <section class="w-full flex justify-between flex-wrap">

            <x-auth.select for="guest">
                <x-radio-button id="guest" value="guest" name="option" />
                <x-slot:icon>
                    {{ Vite::asset('resources/icons/user.png') }}
                </x-slot:icon>
                <x-slot:title>Continue as Guest</x-slot:title>
                <x-slot:for>guest</x-slot:for>
            </x-auth.select>

            <x-auth.select for="auth">
                <x-radio-button id="auth" value="user" name="option" />
                <x-slot:icon>
                    {{ Vite::asset('resources/icons/user.png') }}
                </x-slot:icon>
                <x-slot:title>I have an acount</x-slot:title>
                <x-slot:for>auth</x-slot:for>
            </x-auth.select>
        </section>

        <div class="-mt-10 h-4">
            @if (session('error'))
                <p class=" text-red italic">{{ session('error') }}</p>
            @endif
        </div>
        <x-auth.button-container>
            <x-cancel-transparent href="/">Cancel</x-cancel-transparent>
            <x-wide-green-button> Continue</x-wide-green-button>
        </x-auth.button-container>
    </form>
</x-auth.layout>
