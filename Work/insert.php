<?php

include (db_connect.php);

if ((empty($_POST['firstname']))||(empty($_POST['lastname']))){
    echo "Both fields are required";
}
else{

}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$sql = "INSERT INTO forms ('firstname', 'lastname') VALUES ('$firstname', $'lastname')";

if (mysqli_query($sql, $db)){

}
else {
    echo "Error: " . $sql . $mysqli_error($db);
}
header ("location:display.php");
?>