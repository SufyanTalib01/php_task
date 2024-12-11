<?php 

    $f = fopen("myfile.txt" , "r");
    // echo fgets($f) . "<br>";
    // echo fgets($f);
    // echo fgets($f);

    while($a = fgetc($f)){
        echo $a;
        if($a == "."){
            break;
        }
    }

?>