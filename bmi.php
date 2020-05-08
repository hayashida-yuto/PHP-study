<?php
    echo "身長を入力してください(cm)： ";//改良
    $x=fgets(STDIN);
    echo "体重を入力してください(kg)： ";//改良
    $y=fgets(STDIN);
    
    bmi($x,$y);



    function bmi($height,$weight){
        $height_m=$height/100;
        $result=$weight/($height_m*$height_m);
        if($result<18.5){
            echo "あなたは、低体重です。\n";
        }else if($result>25){
            echo "あなたは、肥満です。";
        }else{
            echo "あなたは、普通体重です。\n";
        }
    }
?>