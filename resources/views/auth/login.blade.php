<x-auth>
    <x-slot:heading>
        Log in
    </x-slot:heading>
    <form class="" action="" method="POST">
        <h1 class="title">Welcome</h1>
        <h2 class="title-desc"></h2>
        <section class="main-input">

            <label for="username" class="input-form">
                <img src="" alt="">
                <input id="username" type="text" name="input-user" placeholder="Username or Email">
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
    </form>
    <section class="register">
        <div class="register-header">
            <hr class="line1">
            <p>Don't have a FLICKS account?</p>
            <hr class="line2">
        </div>

        <form class="last-form" action="auth_portal.php" method="get">
            <button type="submit" class="register-button" name="options" value="register">
                Register</button>
        </form>
    </section>
</x-auth>
