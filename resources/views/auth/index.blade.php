<x-auth>
    <x-slot:heading>
        Authentication
    </x-slot:heading>
    <form action="/auth" method="POST" class="max-w-[600px] my-[5vh] mx-auto flex flex-col items-center justify-center gap-14">
        @csrf
        <h1 class="title"><span class="text-primary-green">Register</span> with FLICKS Today!</h1>
        <h2 class="-mt-12 text-primary-green italic">Log in to access your personalized dashboard and special offers!
        </h2> {{-- Or Join us today and enjoy exclusive benefits and discounts! --}}
        <section class="w-full flex justify-between flex-wrap">
            <x-auth-select for="guest">
                <input id="guest" type="radio" name="option" value="guest">
                <img src="{{ asset('icons/user.png') }}" alt="" class="h-8 w-8">
                <label class="text-2xl font-semibold cursor-pointer" for="guest">Continue as Guest</label>
            </x-auth-select>


            <x-auth-select for="auth">
                <input id="auth" class="radio" type="radio" name="option" value="user">
                <img src="{{ asset('icons/user.png') }}" class="h-8 w-8" alt="">
                <label for="auth" class="text-2xl font-semibold cursor-pointer" >I have an account</label>
            </x-auth-select>

            <section>
                <a href="/">
                    Cancel
                </a>
                <button type="submit">
                    Continue
                </button>
            </section>
        </section>
    </form>
</x-auth>
