<?php
    echo "西暦で年を入力してください\n";
    $x=fgets(STDIN);
    leap_year($x);

    function leap_year($year){
        if($year%4==0&&$year%100!=0||$year%400==0){
            echo "入力された年は、うるう年です\n";
        }else{
            echo "入力された年は、平年です\n";
        }
    }
?>