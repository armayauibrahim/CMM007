<?php
/**
 * Created by PhpStorm.
 * User: 1513072
 * Date: 14/03/2016
 * Time: 10:56
 */
include("connection.php");

    if (empty($_POST["username"])|| empty ($_POST["password"]) )
    {
        echo "Both fields are required";
    }else
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT uid FROM users WHERE username='$username' and password='$password'";

        $result = mysqli_query($db, $sql);

        if (mysqli_num_row($result) == 1) ;
        {
            header("location:home.php");

        } else
        {
            echo "Incorrect username or password";
        }

}
    ?>