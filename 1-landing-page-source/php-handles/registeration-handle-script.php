<?php

include '../php-classes/php-curd-class.php';

$dataObj = new DatabaseCURD();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];



?>