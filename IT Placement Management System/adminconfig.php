<?php
// LOCALHOST MYSQL
// $database_host= 'localhost';
// $database_username = 'root';
// $database_password = '';
// $database_name = 'itm2023';

$database_host = 'db4free.net:3306';
$database_username ='khaos_x';
$database_password = 'Jaybo$$007';
$database_name = 'myonlinedb1';

$con = mysqli_connect($database_host, $database_username, $database_password, $database_name);


if($con === false){
    die("Error: Connection Error. " . mysqli_connect_error());
}

?>