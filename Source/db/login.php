<?php
$username = $_POST['username'];
$password = $_POST['password'];

require 'password.php';

echo password_hash($password, PASSWORD_BCRYPT);
echo phpversion();

// CREATE TABLE Users (
//     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     username VARCHAR(50) NOT NULL UNIQUE,
//     password VARCHAR(255) NOT NULL,
// );