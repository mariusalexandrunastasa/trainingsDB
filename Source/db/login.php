<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'db.php';
require_once '../utils/DTO/login.php';
require_once '../utils/constants.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = new LoginModel($username, $password);

if (logIn($login) != 1) {
    header("Location: /login.php");
    die();
} else {
    session_start();
    $_SESSION[USER_LOGGED_IN] = true;
    header('Location:' . $_SESSION['page']);
    die();
}
