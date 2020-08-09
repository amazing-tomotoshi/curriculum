<?php
// index.php
// 変数：データにつけるラベル（変更可能）
// 定数：変更不可

define("ADMIN_EMAIL", "y-i-group@gmail.com");
define("LIST_COUNT", 15);

echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;

echo '<br><br>';
echo '1. デプロイ：開発したソフトウェアを実際の運用環境に配置・展開すること。<br>';
echo '2. バリデーション：対象がその仕様や文法などに照らして適切に記述・構築されているか否かを検証する。<br>';
echo '3. アジャイル・ウォーターフォール(開発手法)<br>';
echo 'アジャイル開発：小単位での「実装→テスト実行」を繰り返し、徐々に開発を進めていく開発方法。<br>';
echo 'ウォーターフォール開発：あらかじめ全体の機能設計を済ませてから機能を実装する開発方法。<br>';
?>