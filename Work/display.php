<?php
include ("connect.php");

$sql_query = "SELECT * FROM forms";

$result = $db->query($sql_query);


    while ($row = $result->fetch_array()){
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        echo "<li> My name is ($firstname)" . " " . "($lastname)";
    }


?>