
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login Form !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/logs.css" type="text/css" media="all" />
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
                            <input type="email" id="email"  placeholder="Email" >
                            <input type="password" id="password"  placeholder="Your Password">
                            <?php if(isset($_SESSION["username"])); ?>
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
<script src="/js/module.js"></script>
</html>