<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 24/04/2016
 * Time: 13:31
 */
define ('SERVER','ap-cdbr-azure-east-c.cloudapp.net' );
define ('USER','b3a465ce6af9b4');
define ('PASSWORD','3ebfd1d6');
define ('HOST','CMM007ALDB-1513072');
$sercon=mysqli_connect (SERVER,USER,PASSWORD,HOST);

/*if ($sercon->connect_error) {
    die("Connection failed: " . $sercon->connect_error);
}
echo "Connected successfully";
*/




