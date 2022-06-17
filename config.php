<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "aircargo_system";
$port = "3307";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>