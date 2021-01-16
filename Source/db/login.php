<?php
$username = $_POST['username'];
$password = $_POST['password'];

require 'password.php';

$hash = password_hash($password, PASSWORD_BCRYPT);

if (password_verify($password, $hash)) {
    echo "Valid";
} else {
    echo "Invalid";
}
?>
<!-- // CREATE TABLE Users (
//     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     username VARCHAR(50) NOT NULL UNIQUE,
//     password VARCHAR(255) NOT NULL,
// ); -->