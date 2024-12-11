<?php 

    echo "Hello World";
    $ftpr = fopen("myfile2.txt" , "w");
    fwrite($ftpr , 'bye bye');
    fclose($ftpr);

?>