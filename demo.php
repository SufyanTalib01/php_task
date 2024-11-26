10243
atm procedure 
minimum 500


<?php 

    function atm_minimum_amount($minAmount){
        if($minAmount < 500){
            echo "Enter Amount Should be greather than 500";
        }
        else{
            echo "continue";
        }
    }

    

?>