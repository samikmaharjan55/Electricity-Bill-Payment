<?php

$pstatus=0;
$servername = "localhost";
$username = "neacase";
$password = "neacase";
$dbname = "neacase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}
// echo "Connected Successfully";
?>