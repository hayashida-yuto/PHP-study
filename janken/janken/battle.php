<?php
/**
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$player_handに代入してください
(3) コンピューターの手は$pc_handに代入してください
**/
$janken=array("0","2","5");

$result = false;

if($_POST['playerHand']==="0"){
    $player_hand="ぐー";
}else if($_POST['playerHand']==="2"){
    $player_hand="ちょき";
}else if($_POST['playerHand']==="5"){
    $player_hand="ぱー";
}

$com=$janken[array_rand($janken)];

if($com==="0"){
    $pc_hand="ぐー";
}else if($com==="2"){
    $pc_hand="ちょき";
}else if($com==="5"){
    $pc_hand="ぱー";
}

if($player_hand==="ぐー" && $pc_hand==="ぱー"){
    $result="負け!";
}else if($player_hand==="ぐー" && $pc_hand==="ちょき"){
    $result="勝ち!";
}else if($player_hand==="ちょき" && $pc_hand==="ぱー"){
    $result="勝ち!";
}else if($player_hand==="ちょき" && $pc_hand==="ぐー"){
    $result="負け!";
}else if($player_hand==="ぱー" && $pc_hand==="ちょき"){
    $result="負け!";
}else if($player_hand==="ぱー" && $pc_hand==="ぐー"){
    $result="勝ち!";
}else{
    $result="あいこ";
}



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>じゃんけん</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>結果は・・・</h1>
        <div class="result-box">
            <!-- じゃんけんの結果を表示しましょう -->
            <p><?php echo $result; ?></p>
            <p class="result-word"></p>
            <!-- プレイヤーの手を表示しましょう -->
            あなた：<?php echo $player_hand; ?><br>
            <!-- コンピュータの手を表示しましょう -->
            コンピューター：<?php echo $pc_hand; ?><br>

            <p><a class="red" href="index.php">>>もう一回勝負する</a></p>
        </div>
    </body>
</html>