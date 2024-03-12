<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="title-section">
            <div class="subtitle">
                ＼デジタル×アート体験／
            </div>
            <h1 class="title">
                モバイル</br>スタンプラリー
            </h1>
        </div>

        <form action="images/mitasai_stamp.php" method="get" class="form">
            <input name="pass" placeholder="パスワードを入力" class="textbox">
            <button type="submit" class="button"><i class="fa-solid fa-play"></i></button>
        </form>

        <div class="stamps">
            <img <?php if (!empty($_COOKIE['page1'])) {
                echo 'src="images/stamp_hidari.png"';
            } ?> class="stamp_img_left">
            <img <?php if (!empty($_COOKIE['page2'])) {
                echo 'src="images/stamp_migi.png"';
            } ?> class="stamp_img_right">
        </div>

        <div class="how-to">
            スタンプラリーの進め方
        </div>

        <hr>
        <?php
            $day = date("Y/m/d");
            if (strcmp($day, "2023/11/24") == 0 or (strcmp($day, "2023/11/25") == 0)){
                echo '<div class="instructions">';
                echo '<p class="instruction-number">1</p>';
                echo '<p class="instruction-text">大学院校舎 351-A教室とKeMCoを訪れよう！</p>';
                echo '</div>';
            }else{
                echo '<div class="instructions">';
                echo '<p class="instruction-number">1</p>';
                echo '<p class="instruction-text">大学院校舎 351-A教室とKeMCoM X(旧Twitter)を訪れよう！</p>';
                echo '</div>';
            }
        ?>
        <figure>
            <img class="images/stamp-completion" src="images/stamp-completion.jpg">
            <figcaption>スタンプ完成図</figcaption>
        </figure>
        <hr>
        <div class="instructions">
            <p class="instruction-number">2</p>
            <p class="instruction-text">
                1でゲットしたパスワードを入力して、スタンプを集めよう！
            </p>
        </div>
        <br>
        <figure>
            <input name="pass" placeholder="sample" class="textbox">
            <button type="submit" class="button"><i class="fa-solid fa-play"></i></button>
            <figcaption>入力欄(サンプル)</figcaption>
        </figure>
        <br>
        <hr>
        <div class="instructions">
            <p class="instruction-number">3</p>
            <p class="instruction-text">
                大学院校舎 351-A教室でKeMCoMから特製グッズをプレゼント！
            </p>
            <figure>
                <img class="yukichi" src="images/yukichi.png">
                <figcaption>特製グッズ(一例)</figcaption>
            </figure>
        </div>
        <p class="notices">
            ※スタンプラリーをご利用いただくには、ご使用のブラウザが「Cookieを受け入れる」設定になっている必要がございます。<br>
            ※スタンプラリーには何度でもご参加いただけますが、特製グッズの受け渡しはお一人様につき一回限りとさせていただきます。<br>
            ※スタンプの蓄積に不具合等が生じた場合はスタッフにお声がけください。
        </p>
        <form action="mitasai_reset.php" method="get">
            <input type="hidden" name="reset" value="1">
            <button type="submit">reset</button>
        </form>
    </div>
</body>
