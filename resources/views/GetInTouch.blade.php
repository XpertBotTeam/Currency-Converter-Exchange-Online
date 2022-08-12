@extends('layouts.master')
@section('title','authentication')
@section('content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Problems Contacts</title>
    <link rel="stylesheet" href="/css/get.css">
</head>
<body>

    <div class="container">
        <form onsubmit="sendEmail();reset();return false()">
            <h3><u>Let Us Help you!</u></h3>
            <input type="text" id="name" placeholder="Your Name" required>
            <input type="text" id="email" placeholder="Email id" required>
            <input type="text" id="phone" placeholder="Phone Number" required>
            <textarea id="me" rows="4" placeholder="how can we help you?"></textarea>
            <button type="submit">Send Form</button>
        </form>

        <script src=" https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail(){
        Email.send({
            Host : "smtp.gmail.com",
            Username : "username",
            Password : "password",
            To : 'walidkinaan2002@gmail.com',
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
@endsection