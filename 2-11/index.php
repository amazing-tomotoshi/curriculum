<form action="result.php" method="post">
  名前：<input type="text" name="my_name" />
  <br>
  メールアドレス：<input type="text" name="email">
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  <input type="submit" value="送信" />
</form>

<?php
echo '<br>';
echo '1. 仕様書・設計書<br>';
echo '仕様書：何を作るのかを説明した資料<br>';
echo '設計書：どうやって作るのかを説明した資料<br>';
echo '2. Git：分散型バージョン管理システムのひとつ。<br>';
echo '3. マージツール：マージするときに用いるツール。<br>';
?>