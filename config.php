<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "micheck_db";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
?>