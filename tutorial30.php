<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbtest3";

    $connection = mysqli_connect($servername , $username , $password , $database);
    echo "connected" . "<br>";

    // $sql = "DELETE FROM `student` WHERE `name` =  'ahmed' LIMIT 11 ";
    // $sql = "INSERT INTO `student` (`name`, `class`, `school`) VALUES ('ahmed', 'nine', 'moon')";
    // $sql = "SELECT * FROM `student` WHERE `name` = 'ahmed' ";


    // $result = mysqli_query($connection , $sql);
    // echo mysqli_num_rows($result);

    // echo mysqli_num_rows($result) . "<br>";

    // while($row = mysqli_fetch_assoc($result)){
    //     echo $row['name'] . " " . $row['school'] . "<br>";
    // }


    $insert = false;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "inotes";

    $connection = mysqli_connect($servername , $username , $password , $database);
    
    $sql = "ALTER TABLE inotesdata AUTO_INCREMENT = 1";

    mysqli_query($connection , $sql);



?>