<?php
function checkIfUserIsLoggedIn()
{
    session_start();
    if (!isset($_SESSION[USER_LOGGED_IN]) && !$_SESSION[USER_LOGGED_IN] == true) {
        header("Location: /login.php");
        die();
    }
}
