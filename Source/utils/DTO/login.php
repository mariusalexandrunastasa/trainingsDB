<?php
require 'password.php';

class LoginModel
{
    public $Username;
    public $Password;
    public function __construct($Username, $Password)
    {
        $this->Username = $Username;
        $this->Password = hash('sha512', $Password);
    }
}
