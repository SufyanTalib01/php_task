<?php
echo "Hello World <br/>";

// PHP

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

$sql = "CREATE DATABASE dbtest2";

// Check if database exists
mysqli_query($conn , $sql);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection established successfully";
?>