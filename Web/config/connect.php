<?php

$host = 'localhost';
$user = 'qriositiv';
$password = 'admin';
$database = 'vadata';

$connect = mysqli_connect($host, $user, $password, $database);

if (!$connect) {
    die('Error connecting to the database: ' . mysqli_connect_error());
}

?>
