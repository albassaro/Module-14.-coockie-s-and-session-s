<?php
session_start();
$user_list = [
    ['login' => 'Sergey', 'password' => password_hash(123,PASSWORD_DEFAULT)], //123
    ['login' => 'Agata', 'password' => password_hash(234,PASSWORD_DEFAULT)], //234
];
