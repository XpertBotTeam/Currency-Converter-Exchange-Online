<?php

session_start();

$username ="";
$email = "";
$error = array();

$db = mysqli_connect('localhost', 'root', '', 'mygame');

if(isset(_Post['registration'])){
    $username = mysqli_connect_escape_string($_Post['username']);
    $email = mysqli_connect_escape_string($_Post['email']);
    $password = mysqli_connect_escape_string($_Post['password']);

    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($email)){
        array_push($errors, "Email is required");
    }
    if(empty($password)){
        array_push($errors, "password is required");
    }

    if(count($errors)==0){
        $password = md5($password_1);
        $sql = "INSERT INTO ('$username', '$email', '$password')"
        VAUALES ('$username', '$email', '$password');
        mysqli_query($db, $sql);

        $_SESSION['username']= $username;
        $_SESSION['success'] = "You will be here";
        header('location: /index11');
    }
}
?>