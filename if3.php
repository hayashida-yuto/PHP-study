<?php
    $temperature=38.0;//例
    if($temperature>=37.5){
        echo "コロナの可能性あり";
    }else if($temperature<=37.0){
        echo "平熱です。";
    }else{
        echo "微熱です";
    }
?>