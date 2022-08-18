<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forget Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/logs.css">
</head>
<body id="q">
    <section class="w3l-mockup-form">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="content-wthree">
                        <h2>Forgot Password</h2>
                        <p>Put your Email address to got you! </p>
                        <form action="" method="capture">
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                            <button name="submit" class="btn" type="submit">Send Reset Link
                                <script>
                                    alert("We will talk to you!");
                                    </script>
                            </button>
                        </form>
                        <div class="social-icons">
                            <p> Back to! <a href="/"> Login </a>. /or/ <a href="/r"> Registration</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
       alert("Go back for registration!");
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

</body>
</html>