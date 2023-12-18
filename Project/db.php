<?php 

$server = "localhost";
$user = "root";
$pass = "1234";
$database = "allphptricks";

$con = mysqli_connect("localhost","root","1234","allphptricks");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }