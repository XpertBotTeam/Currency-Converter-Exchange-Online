<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Solving Problems</title>
    <link rel="stylesheet" href="/css/get.css">
</head>
<body>

    <div class="container">
        <form onsubmit="sendEmail();reset();return false()">
            <center>
            <h3 style="padding-bottom: 5px"><u>Describe Your Problem</u>, <u>We will contact You!!</u></h3>
            </center>
            <input style="padding:10px" type="text" id="name" placeholder="Your Name" required>
            <input style="padding:10px"type="text" id="email" placeholder="Email id" required>
            <input style="padding:10px"type="text" id="phone" placeholder="Phone Number" required>
            <textarea style="padding:10px" id="me" rows="4" placeholder="how can we help you sir?"></textarea>
            <button type="submit">Send Form</button>
        </form>

        <script src=" https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail(){
        Email.send({
            Host : "smtp.gmail.com",
            Username : username.value,
            Password : Password.value,
            To : Email.value,
            From : "walidkinaan2002@gmail.com",
            Subject : "This is the Main Form",
            Body : "Name: " + document.getElementById("name").value
            + "<br> Email: " + document.getElementById("email").value
            + "<br> Message: " + document.getElementById("message").value
        }).then(
      message => alert("Message Sent Succesfully!")
    );
    }
        </script>
    </div>
</body>