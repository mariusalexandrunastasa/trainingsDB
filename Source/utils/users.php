<?php
require_once 'utils/constants.php';

function checkIfUserIsLoggedIn()
{
    session_start();
    if (!isset($_SESSION[USER_LOGGED_IN]) && !$_SESSION[USER_LOGGED_IN] == true) {
        $_SESSION['page'] = $_SERVER['REQUEST_URI'];
        header("Location: /login.php");
        die();
    }
}