<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Form</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/logs.css" >
</head>
<center>
<body id="div">
<center>
    <form class="" id="form">
    <section style="padding-top: 0px" class="w3l-mockup-form">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="content-wthree">
                        <h2>Register Now</h2>
                        <p style="padding-bottom: 5px; color:green">Follow Daily online Currenceis and Crypto!</p>       
                        <form method="post" action="/registerfor">
                           
                            <input type="text"  id="full_name" placeholder="Full name" required >
                            <input type="email" id="email"  placeholder="Email" required  >
                            <input type="password" id="password"  placeholder="Your New Password" required>
                        </form>
                        <button onclick="register()">Register</button>
                        <div class="social-icons">
                            <p style="padding-top: 5px">Have an account! <a href="/">Login</a>. Go free<a href="/welcome"> Here!</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
</body>
<script src="/js/module.js"></script>
</center>
</html>