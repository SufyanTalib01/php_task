<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbtest3";

    $connection = mysqli_connect($servername , $username , $password , $database);

    if($connection){
        echo "connected" . "<br>";
    }

    $sql = "SELECT * FROM `student`";

    $result = mysqli_query($connection , $sql);

    $num = mysqli_num_rows($result);
    echo $num . "<br>";

    while($row = mysqli_fetch_assoc($result)){
        echo "My name is " . $row['name'] . " and I study in Class " . $row['class'] . " in " . $row['school'];
        echo "<br>";
    }
    
?>