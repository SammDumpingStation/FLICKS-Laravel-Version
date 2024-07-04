<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/css/Log-In/auth_portal.css">
  <title> Landing Page</title>
</head>
<body>
  <form action="" method="get">
    <h1 class="title"><span class="operation-type">Register</span> with FLICKS Today!</h1>
   <h2 class="title2">Log in to access your personalized dashboard and special offers!</h2>  {{-- Or Join us today and enjoy exclusive benefits and discounts! --}}
    <section class="option-section">
      <label for="have-account" class="option">
        <input id="have-account" class="radio" type="radio" name="options" value="Customer">
        <span class="custom-radio"></span>
        <img src="" alt="">
        <label for="have-account">I'm a Customer</label>
      </label>

      <label for="no-account" class="option">
        <input id="no-account" class="radio" type="radio" name="options" value="Admin">
        <span class="custom-radio"></span>
        <img src="" alt="">
        <label for="no-account">I'm an Admin</label>
      </label>
      <section class="portal-button">
        <button class="go-back" name="portal-button" value="cancel">
            Cancel
        </button>
        <button class="proceed" name="portal-button" value="continue">
            Continue
        </button>
      </section>
  </form>
  </main>
</body>
</html>
