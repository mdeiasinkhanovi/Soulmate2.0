<?php

$host = "localhost";

$user = "root";

$dbpassword = "";

$database = "soul";

$connect = new mysqli($host ,$user ,$dbpassword, $database);

if($connect->connect_error){
    die("Connection Failed" . $connect_error);
}

?>
