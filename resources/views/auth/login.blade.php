<x-auth.layout>
    <x-slot:heading>
        Log in
    </x-slot:heading>
    <form action="" method="POST" class="w-full max-w-[800px] mx-auto flex flex-col border-2 rounded-2xl border-secondary-grey py-14 gap-10 px-20">

        <x-auth.head-title>
            <x-slot:title>Welcome!</x-slot:title>
            <x-slot:description>Log in to get discounts when using FLICKS!</x-slot:description>
        </x-auth.head-title>

        <section class="">
            <label for="username" class="relative">
                <img src="" alt="">
                <input id="username" type="text" name="username" placeholder="Username or Email"
                    class="bg-transparent w-full border-grey border-2 py-4 px-4 rounded-xl">
            </label>

            <label for="password" class="input-form">
                <img src="" alt="">
                <input id="password" type="password" name="pwd" placeholder="Password">
                <img src="" alt="">
            </label>

            <label for="keep-login" class="keep-login">
                <input type="checkbox" name="keep-login" id="keep-login">
                <p>Keep me Logged In</p>
            </label>

            <h3 class="verdict"></h3>
            <button class="proceed" name="Log-in" value="Log-in">Log-in</button>
            <button class="forgot">Forgot Password?</button>
        </section>
        <hr class="line1">
        <p>Don't have a FLICKS account?</p>
        <hr class="line2">

        <button type="submit" class="register-button" name="options" value="register">
            Register</button>
    </form>

</x-auth.layout>
