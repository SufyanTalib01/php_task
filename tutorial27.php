<?php
	
	$servername = "localhost";
	$username = "root";
	$pass = "";
	$databse = "dbtest";

	$connect = mysqli_connect($servername , $username , $pass , $databse);
	echo "connected";

	// $createTable = "CREATE TABLE `newstudent3` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `semester` VARCHAR(255) NOT NULL , `school` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`))";


	// mysqli_query($connect, $createTable);


	$insertTable = "INSERT INTO `newstudent3` (`id`, `name`, `semester`, `school`) VALUES (NULL, 'Jibran', 'Eight', 'University of Sindh')";


	mysqli_query($connect , $insertTable);


?>