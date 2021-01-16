<?php
$username = $_POST['username'];
$password = $_POST['password'];

require 'password.php';
require 'db.php';
$hash = hash('sha512', $password);
if (logIn($username, $hash) != 1) {
    header("Location: /login.php");
    die();
} else {
    session_start();
    $_SESSION[USER_LOGGED_IN] = true;
    echo $_SESSION['page'];
    header('Location:' . $_SESSION['page']);
    die();
}
