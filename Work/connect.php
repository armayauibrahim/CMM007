<?php

define (DB_SERVER,'ap-cdbr-azure-east-c.cloudapp.net');
define (DB_USERNAME, 'b48fad490ff0b1');
define (DB_PASSWORD, '0ffa09c0');
define (DB_DATABASE, 'allmywork');

$DB = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>