<?php

define (DB_SERVER,'ap-cdbr-azure-east-c.cloudapp.net');
define (DB_USERNAME, 'baa958ae16e55a');
define (DB_PASSWORD, 'afe8ff9e');
define (DB_DATABASE, 'armayau1513072');

$DB = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>