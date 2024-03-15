# 三田祭スタンプラリー
参考URL: https://studio.kemco.keio.ac.jp/mitasai/mitasai.php

# スタンプが押される仕組み
mitasai_stampの最初でcookieの登録をしている。

今回はパスワード制なのでフォームで送られたpassが一致すればcookieを登録するようになっている。
```
setcookie('page1', 'true', time() + 60 * 60 * 24 * 50);
```
setcookie()の引数は(cookie名, cookie内の値, time()+持続時間)

time()-1にするとcookieを消去できる

else ifでつなげていけばスタンプ数もどんどん増やしていける、cookie名は都度変えること。

cookie内の値は$_COOKIE['cookie名']で確認できる。
```
$_COOKIE['page1'] == 'true'
```
