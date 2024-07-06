<x-auth.layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form class="w-full max-w-[700px] mx-auto flex flex-col gap-14" action="/register" method="post">
        @csrf
        <x-auth.head-title>
            <x-slot:title>Registration Form</x-slot:title>
            <x-slot:description>Register to watch movies and get discounts!</x-slot:description>
        </x-auth.head-title>

        <section class="flex flex-col gap-8">
            <div class="flex w-full gap-8">
                <x-form-container>
                    <x-form-label for="first-name">First Name</x-form-label>
                    <x-form-input class="pl-4" name="first-name" id="first-name" />
                </x-form-container>
                <x-form-container>
                    <x-form-label for="last-name">Last Name</x-form-label>
                    <x-form-input class="pl-4" name="last-name" id="last-name" />
                </x-form-container>
            </div>

            <x-form-container>
                <x-form-label for="email">Email</x-form-label>
                <x-form-input class="pl-4" name="email" id="email" />
            </x-form-container>

            <x-form-container>
                <x-form-label for="phone-number">Phone Number</x-form-label>
                <x-form-input class="pl-4" name="phone-number" id="phone-number" />
            </x-form-container>

            <x-form-container>
                <x-form-label for="password">Password</x-form-label>
                <x-form-input class="pl-4" name="password" id="password" />
                <x-form-icons id="toggleBtn" src="{{ Vite::asset('resources/icons/hide.png') }}" alt=""/>
            </x-form-container>

            <x-form-container>
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <x-form-input class="pl-4" name="password_confirmation" id="password_confirmation" />
                <x-form-icons id="repeatBtn" src="{{ Vite::asset('resources/icons/hide.png') }}" alt=""/>
            </x-form-container>
        </section>

        <x-auth.button-container>
            <x-cancel-transparent href='/check-id'>Cancel</x-cancel-transparent>
            <x-wide-green-button>Create Account</x-wide-green-button>
        </x-auth.button-container>

        <p class="text-center -mt-4">Already have an account? <a class="text-green" href="/login">Log-in</a>
        </p>
    </form>
</x-auth.layout>
