<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "todo";

$conn = mysqli_connect($host,$user,$pass,$database);

if(!$conn){
    echo "Could not connect to database";
}

?>