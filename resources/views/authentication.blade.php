<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="/css/log-in-style.css">
</head>
<!--<div id = "div" class="container-fluid">   
 <img style="clip-path: circle();margin-left: -88%;" src="https://img.freepik.com/premium-photo/blockchain-market-usd-currency-concept-with-blue-glowing-digital-dollar-symbol-abstract-technological-backdrop-with-world-map-waving-lines-3d-rendering_670147-524.jpg?size=626&ext=jpg"width="150"height="100"> 
</div> -->
<body id="div">
    <center>
        <section id="specfic">
    <div class="containerlogin">
        <form class="form" id="login">
            <h1 class="form__title"><small><em>Welcome To <u>Currency Exchange</u> App</em></small><br><u style="border-bottom: 3px double"><small>Login to stay Focused!</small> </u></h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Username or Email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <center>
            <button  class="form__button" type="submit"><a href="/welcome">Continue</a></button>
            </center>
            <p class="form__text">
                <a href="./checkform" class="form__link">Forgot/Reset your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="/GetInTouch"> CAN'T SIGN IN?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
          
    </div>
    <script src="/js/login.js"></script>
    <script src="/js/checkform.js"></script>
        </section>
    </center>
</body>