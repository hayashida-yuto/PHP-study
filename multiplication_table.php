<?php
    $number=array(1,2,3,4,5,6,7,8,9);
    for($i=1;$i<=9;$i++){
        for($j=0;$j<9;$j++){
            echo $number[$j]*$i." ";
        }
        echo "\n";
    }
?>