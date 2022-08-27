
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/logs.css" type="text/css" />
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
                            <button onclick="login()">Login</button>                           
                        </form>
                        <div class="row mx-gutters-2 mb-4">
                            <a href="http://localhost/laravel_login_github/public/login/github/callback">
                                <hr>
                                <button id="git"  type="button" class="btn btn-block btn-github">
                                <img src="https://cdn4.iconfinder.com/data/icons/iconsimple-logotypes/512/github-512.png" height="18% " width="6%"> <i class="fa fa-github mr-2"> Github Account </i>
                            </button>
                            </a>
                        
                        </div>
                        <form>
                            <hr>
                            <button id="gitt">
                                <img src="https://th.bing.com/th/id/R.8e71e53cb7f522b77f08cafbd66827b4?rik=4IL1%2bSsxAuCETg&pid=ImgRaw&r=0" height="18% " width="6%">
                            <a style="color: aliceblue"   href="https://0a41-106-212-124-50.ngrok.io/google/callback/" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw">Login with Google</i> 
                            </a>
                            </button>
                        </form>
                        <h1><u>OR</u></h1>
                        <hr>
                                <div style="padding-top: 10px" class="social-icons">
                             <p>Create Account! <a href="/r">Register</a>. <small>Go free<a href="/welcome"> Here!</a>.</small></p>
                                </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</body>
<script src="/js/module.js"></script>
</html>