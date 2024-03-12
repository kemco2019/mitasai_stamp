<?php
    $reset=$_GET["reset"];
    if($reset == 1){
        setcookie('page1','true',time()-10);
        setcookie('page2','true',time()-10);
    }
    echo "リセットしました";
?>
<a href="mitasai.php">back</a>