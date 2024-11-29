<?php 
		
		echo rand(). "<br>";

		$servername = "localhost";
		$username = "root";
		$pass = "";
		$database = "dbtest";

		$conn = mysqli_connect($servername , $username , $pass , $database);
		if($conn){
			echo "connected";
		}
		else{
			"not connected";
		}

		$createTable = "CREATE TABLE  `newstudent2` (`id` INT NOT NULL AUTO_INCREMENT , `fname` INT NOT NULL , `semester` INT NOT NULL , `school` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`))";

		mysqli_query($conn , $createTable);



 ?>