<?php
$n=1;
$ar_num=range(0,9);
shuffle($ar_num);
for($k=0;$k<3;$k++){
    $rand[$k]=$ar_num[$k];
}
for($i=0;$i!=1;){
    $number=array();
    echo "□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□\n";
    echo $n."回目のチャレンジ\n";
    echo "3桁の半角数字を重複なしで入力してください：";
    $number = fgets(STDIN);
    $number_digit = strlen($number);
    if(($number_digit-1)==3){
    for($j1=0;$j1<$number_digit;$j1++){
        $number_rank[$j1]=substr($number,($number_digit-2-$j1),1);
    }
    }else{
        $number_rank=array(0,0,0);
    }
    if(($number_digit-1)!=3){
        echo "エラー：3桁の半角数字を重複なしで入力してください！\n";
        $n++;
    }else if(check($number_rank)==false){
        echo "エラー：3桁の半角数字を重複なしで入力してください！\n";
        $n++;
    }else{
        /*echo "ナイス";
        echo $rand[0];
        echo $rand[1];
        echo $rand[2];*/
        $hit=0;
        $blow=0;
        for($j2=0;$j2<3;$j2++){
            if($number_rank[$j2]==$rand[2-$j2]){
                    ++$hit;
                }
            for($j3=0;$j3<3;$j3++){
                if($j3!=$j2){
                    if($number_rank[$j2]==$rand[2-$j3]){
                        ++$blow;
                    }
                }
            }
        }
        if($hit==3){
            echo "正解です！".$n."回目でクリアです！！\n";
            echo "□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□\n";
            break;
        }else{
            echo "Hit:".$hit.", Blow:".$blow." です。\n";
            $n++;
        }
        
    }
    
 }
 
 
 
 function check($array){
     $checkarray=array_count_values($array);
     $maxcount=count($array);
     $repetition=true;
     for($i1=0;$i1<$maxcount;$i1++){
         if($checkarray[$array[$i1]]>1){
             $repetition=false;
         }
     }
     return $repetition;
 }
    
?>