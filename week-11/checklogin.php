<?php
/**
 * Created by PhpStorm.
 * User: 1513072
 * Date: 12/04/2016
 * Time: 09:38
 */
$username = $_POST["name"];
$password = $_POST["password"];

if ($username == "username" && $password == "password");
{
    setcookie('access_level_cookie', 'standarduser');
}

header('Location: loggedin.php');
