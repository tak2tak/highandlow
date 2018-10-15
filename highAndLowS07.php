<?php
    //右側カード用にランダムに0~13の数値を生成する
    $rightCard = mt_rand(0,13);
    //右側カード用に0~13の添字に対応した画像を配列で用意する
    $card = array(0=>"Jk.png",
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
        <img src= "../ch11/<?php echo $card[$_POST[leftCard]] ?>">
        <!-- $rightCardでランダム生成した数値を$cardに渡し対応する画像名を返す -->
        <img src= "../ch11/<?php echo $card[$rightCard] ?>"><br>
        <!-- フォームからselect属性のvalueを表示 -->
        「<?php echo $_POST[select] ?>」を選択しました。<br><br>
        <?php
            /* 左右カードの数値を比較 */
            if ($_POST[leftCard] < $rightCard) {
                /* 右が大きければ文字列Highを変数resultに代入 */
                $result ="High";
            } elseif ($_POST[leftCard] > $rightCard) {
                /* 左が大きければ文字列Lowを変数resultに代入 */
                $result ="Low";
            } else {
                /* それ以外（左右が同じ数値）は変数resultに選択したselectの値を代入 */
                $result = $_POST[select];
            }
            /* High・Low判定と選択した結果が同じか比較 */
            if ($_POST[select] == $result) {
                /* 選択結果と変数resultが同じ=当てた。左右カードが同じの場合も同様。*/
                echo "You Win!".'<br><br>';
            } else {
                /* 選択結果と変数resultが異なる=外れた */
                echo "You Lose!".'<br><br>';
            }
        ?>
        <p><a href="highAndLowS03.php">もう一度挑戦する</a></p>
        <br>
        <p>↓for debug↓</p>
            送信カード番号:<?php echo $_POST[leftCard]; ?><br>
            High/Low選択:<?php echo $_POST[select]; ?><br>
            $result = <?php echo $result; ?>        
    </div>
</body>
</html>