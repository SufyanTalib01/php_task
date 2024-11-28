<?php
echo "Hello World <br/>";

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username , $password);

if($conn == true){
    echo "connected";
}
else{
    "not connected";
}


?>