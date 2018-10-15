<?php 
    //左側カード用にランダムに0~13の数値を生成する
    $leftCard= mt_rand(0,13);
    //0~13の添字に対応した画像を配列で用意する
    $cards = array(0=>"Jk.png",
                1=>"01.png",
                2=>"02.png",
                3=>"03.png",
                4=>"04.png",
                5=>"05.png",
                6=>"06.png",
                7=>"07.png",
                8=>"08.png",
                9=>"09.png",
                10=>"10.png",
                11=>"11.png",
                12=>"12.png",
                13=>"13.png",                      
                );
?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>High & Low GAME</title>
</head>
<body>
    <div id="header" style=text-align:center>
        <h1>High & Low GAME</h1><hr>
    </div>
        <div id="content" style=text-align:center>
            <!-- 変数cardsに$leftcardの数値を渡し対応する画像名を返す -->
            <img src= "../ch11/<?php echo $cards[$leftCard]?>">
            <img src= "../ch11/bg.png">
            <!-- 画面遷移先へPOSTでフォームデータを渡す -->
            <form action="highAndLowS07.php" method="POST">
                <!-- select属性で文字列Highを送信 -->
                <input type="radio" name="select" value="High">High
                <!-- select属性で文字列Lowを送信 -->
                <input type="radio" name="select" value="Low">Low
                <br>
                <input type="submit" value="決定">
                <!-- 隠しデータとしてleftCard属性でランダム生成した数値を渡す -->
                <input type="hidden" name="leftCard" value="<?php echo $leftCard?>">
           </form>    
        </div>
</body>
</html>