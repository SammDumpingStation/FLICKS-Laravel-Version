<x-auth.layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form class="w-full max-w-[700px] mx-auto flex flex-col gap-14" action="/register" method="POST">
        @csrf
        <x-auth.head-title title="Registration Form" description="Register to watch movies and get discounts!"/>

    <section class="flex flex-col gap-8">
            <div class="flex w-full gap-8">
                <x-form-container>
                    <x-form-label for="first-name">First Name</x-form-label>
                    <x-form-input class="pl-4" name="first_name" id="first_name" value="{{ old('first_name') }}" />
                    @error('first_name')
                        @php
                            $message = str_replace('_', ' ', $message);
                        @endphp
                        <p class="text-red italic">{{ $message }}</p>
                    @enderror
                </x-form-container>

                <x-form-container>
                    <x-form-label for="last-name">Last Name</x-form-label>
                    <x-form-input class="pl-4" name="last_name" id="last_name" value="{{ old('last_name') }}" />
                    @error('last_name')
                        @php
                            $format = str_replace('_', ' ', $message);
                        @endphp
                        <p class=" text-red italic">{{ $format }}</p>
                    @enderror
                </x-form-container>
            </div>


            <x-form-container>
                <x-form-label for="email">Email</x-form-label>
                <x-form-input class="pl-4" name="email" id="email" value="{{ old('email') }}" />
                @error('email')
                    <p class=" text-red italic">{{ $message }}</p>
                @enderror
            </x-form-container>

            <x-form-container>
                <x-form-label for="phone-number">Phone Number</x-form-label>
                <x-form-input class="pl-4" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" />
                @error('phone_number')
                    @php
                        $message = str_replace('_', ' ', $message);
                    @endphp
                    <p class=" text-red italic">{{ $message }}</p>
                @enderror
            </x-form-container>

            <x-form-container>
                <x-form-label for="password">Password</x-form-label>
                <x-form-input type="password" class="pl-4" name="password" id="password">
                    <x-form-icons id="toggleBtn" src="{{ Vite::asset('resources/icons/hide.png') }}"
                        alt="" /></x-form-input>
                @error('password')
                    <p class=" text-red italic">{{ $message }}</p>
                @enderror
            </x-form-container>

            <x-form-container>
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <x-form-input type="password" class="pl-4" name="password_confirmation" id="password_confirmation">
                    <x-form-icons id="repeatBtn" src="{{ Vite::asset('resources/icons/hide.png') }}"
                        alt="" /></x-form-input>
            </x-form-container>
        </section>

        <x-auth.button-container>
            <x-cancel-transparent href='/check-id'>Cancel</x-cancel-transparent>
            <x-wide-green-button type="submit">Create Account</x-wide-green-button>
        </x-auth.button-container>

        <p class="text-center -mt-4">Already have an account? <a class="text-green" href="/login">Log-in</a>
        </p>
    </form>
</x-auth.layout>
