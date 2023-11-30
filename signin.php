<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Ludiflex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Welcome</header>
            <p>We are happy to have you back!</p>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" id="email" autocomplete="off" required>
            <label for="email">Email or phone</label>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" id="password" autocomplete="off" required>
            <label for="password">Password</label>
        </div>
        <div class="forgot">
            <section>
                <input type="checkbox" id="check">
                <label for="check">Remember me</label>
            </section>
            <section>
                <a href="#" class="forgot-link">Forgot password?</a>
            </section>
        </div>
        <div class="input-box">
            <input type="submit" class="input-submit" value="Sign In">
        </div>
        <div class="middle-text">
            <hr>
            <p class="or-text">Or</p>
        </div>
        <div class="social-sign-in">
            <button class="input-google">
                 <img src="images/google.png" alt="">
                 <p>Sign In with Google</p>
            </button>
            <button class="input-twitter">
                <img src="images/twitter.png" alt="">
            </button>
        </div>
        <div class="sign-up">
            <p>Don't have account <a href="#">Sign up</a></p>
        </div>
    </div>
</body>
</html>