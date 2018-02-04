<?php
$connection = mysqli_connect('webpagesdb.it.auth.gr','evape','123aaa','GhibliCom');

if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

if (!$connection){
	die("Connection to database failed: " .mysqli_connect_error());
}