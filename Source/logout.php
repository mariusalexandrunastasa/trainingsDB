<?php

require_once 'utils/constants.php';

session_start();
unset($_SESSION[USER_LOGGED_IN]);
header("location:/index.php");

die();
