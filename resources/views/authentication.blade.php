<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="/css/log-in-style.css">
</head>

<body id="div">
    <center>
        <section id="specfic">
    <div class="containerlogin" action="">
        <form class="form" id="login">
            <h1 class="form__title"><small><em>Welcome To <u>Currency Exchange</u> App</em></small><br><u style="border-bottom: 3px double"><small>Login to stay Focused!</small> </u></h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="email" name="email" class="form__input" autofocus placeholder="Username or Email" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" required>
                <div class="form__input-error-message"></div>
            </div>
            
            <button v-on="button" name="submit" class="form__button"  formaction="/welcome">Log In</button>
            
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
        <form action="" method="capture" class="form form--hidden" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="email" name="email" class="form__input" autofocus placeholder="Email Address" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="password" id="signupUsername" class="form__input"  autofocus placeholder="Password" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="password" id="signupUsername"  class="form__input" autofocus placeholder="Confirm password" required>
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Register</button>
            <div class="social-icons">
                <p> HAVE AN ACCOUNT!? <a href="/au">Login.</a></p>
            </div>
           <!---
            <p class="form__text">
                <a class="form__link" href="/" id="linkLogin">Already have an account? Sign in</a>
            </p>--> 
             
        </form>
          
    </div>

<script src="/js/login.js"></script>
        </section>
    </center>
</body>