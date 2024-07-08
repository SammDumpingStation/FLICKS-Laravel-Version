<x-auth.layout>
    <x-slot:heading>
        Authentication
    </x-slot:heading>
    <form action="/auth" method="POST"
        class="max-w-[600px] w-full mx-auto flex flex-col items-center justify-center gap-14">
        @csrf

        <x-auth.head-title span="Log-In" title="with FLICKS Today!" description="Log in to access your personalized dashboard and special offers!"/>

        <section class="w-full flex justify-between flex-wrap">

            <x-auth.select for="guest" icon="{{ Vite::asset('resources/icons/user.png') }}" title="Continue as Guest">
                <x-radio-button id="guest" value="guest" name="option" />
            </x-auth.select>

            <x-auth.select for="auth" icon="{{ Vite::asset('resources/icons/user.png') }}" title="I Have an Account">
                <x-radio-button id="auth" value="user" name="option" />
            </x-auth.select>
        </section>

        <div class="-mt-10 h-4">
            @if (session('error'))
                <p class=" text-red italic">{{ session('error') }}</p>
            @endif
        </div>
        <x-auth.button-container>
            <x-button tag="a" color="transparent" href="/">Cancel</x-button>
            <x-button type="wide"> Continue</x-button>
        </x-auth.button-container>
    </form>
</x-auth.layout>
