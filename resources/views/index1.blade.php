<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login Form !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/logs.css" type="text/css" media="all" />

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body id="l">
    <section class="w3l-mockup-form">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="content-wthree">
                             <h2>Log In Now</h2>
                             <p> Many things you  should know, and track ! </p>
                        <form>
                            <input type="email" id="email"  placeholder="Email">
                            <input type="password" id="password"  placeholder="New Password">
                            <p><a href="/forgetpassword" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
                            <button onclick="login()">Login</button>
                        </form>
                                <div class="social-icons">
                             <p>Create Account! <a href="/r">Register</a>. Go free<a href="/welcome"> Here!</a>.</p>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="https://www.gstatic.com/firebasejs/9.9.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.9.2/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.9.2/firebase-auth.js"></script>

<script src="/js/module.js"></script>
</html>