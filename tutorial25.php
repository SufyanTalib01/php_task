<?php 
	
	echo rand();

	$server = "localhost";
	$name = "root";
	$pass = "";

	$newdb = mysqli_connect($server, $name , $pass);

	$sql = "CREATE DATABASE dbtest5";

	mysqli_query($newdb , $sql);

 ?>