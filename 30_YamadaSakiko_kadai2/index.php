<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class=a>
        <p class="challenge text-center1">Let's チャレンジ</p>
        <p class="text-center2">
            <span class="font-pink">ど</span>
            <span class="font-blue">う</span>
            <span class="font-orange">ぶ</span>
            <span class="font-puple">つ</span>
            <span class="font-pink">じ</span>
            <span class="font-blue">ゃ</span>
            <span class="font-orange">ん</span>
            <span class="font-puple">け</span>
            <span class="font-pink">ん</span>
        </p>    

    </div>

    <div class=b>
        <div class="wrapper">
            <h1 class="your-hand text-center">キミの手は……!?</h1>
                <p class="cap text-center">グー・チョキ・パーのなかから出す手をえらんで、マークをおしてね。</p>
                <div class="janken">
                    <div class="janken-item">
                        <form action="index.php" method="post">
                        <input type="submit" value="グーを出す" class="hand-gu text-center"></p>
                        </form>
                        <div class="gazo"><img src="gu.jpg"></div>
                    </div>
                    <div class="janken-item">
                        <form action="index.php" method="post">
                        <input type="submit" value="チョキを出す" class="hand-choki text-center"></p>
                        </form>
                        <div class="gazo"><img src="choki.jpg"></div>
                    </div>
                    <div class="janken-item">
                        <form action="index.php" method="post">
                        <input type="submit" value="パーを出す" class="hand-pa text-center"></p>
                        </form>
                        <div class="gazo"><img src="pa.jpg"></div>
                    </div>
                </div>
        </div>
    </div>


    <div class=c>
    <div class="wrapper">
        <h1 class="animal-hand text-center">どうぶつの手は……!?</h1>
            <?php

            $random=mt_rand(1,3);
            if ($random == 1) {
                echo '<p class="hand-gu text-center">グー</p>';
                echo'<div class="text-center"><img src="animal-gu.jpg"></div>';
            }

            if ($random == 2) {
                echo '<p class="hand-choki text-center">チョキ</p>';
                echo'<div class="text-center"><img src="animal-choki.jpg"></div>';
            }

            if ($random == 3) {
                echo '<p class="hand-pa text-center">パー</p>';
                echo'<div class="text-center"><img src="animal-pa.jpg"></div>';
            }
            ?>
    </div>
    </div>

</body>
</html>