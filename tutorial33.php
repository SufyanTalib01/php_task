<?php 

    require 'tutorial29.php'; 

    while(($row = mysqli_fetch_assoc($result))){
        echo $row['sno'] . "<br>";
    }

?>