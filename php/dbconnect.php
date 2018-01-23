<?php
ob_start();
$database = "free_paper";
$host = "localhost";
$username = "root";
$password = "";

$conn  = new mysqli($host,$username,$password,$database);
if($conn->connect_error)
die("Server Error : ".$conn->connect_error);

?>