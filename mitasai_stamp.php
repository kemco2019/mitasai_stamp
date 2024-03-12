<?php
$pass = $_GET["pass"];
if (strcmp($pass, "mitasai2023") == 0) {
    setcookie('page1', 'true', time() + 60 * 60 * 24 * 50);
} else if (strcmp($pass, "KeMCo2021") == 0) {
    setcookie('page2', 'true', time() + 60 * 60 * 24 * 50);
} else {
    $alert = "<script type='text/javascript'>alert('パスワードが違います'); location.href='mitasai.php';</script>";
    echo $alert;
}
?>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" rel="stylesheet" />
</head>

<body>
    <p class="notifications">
        <i class="fa-solid fa-circle-check"></i>スタンプが押されました！
    </p>
    <button class="back-to-stamp-rally-button"><a href="mitasai.php" class="back-to-stamp-rally">スタンプラリーに戻る</a></button>
</body>