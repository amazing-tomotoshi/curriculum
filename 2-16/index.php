<?php
$test_file = "test2.txt";

if (is_readable($test_file)) {
    $fp = fopen($test_file, "r");
    while ($line = fgets($fp)) {
        echo $line.'<br>';
    }
    fclose($fp);
} else {
    echo "not readable!";
    exit;
}

echo '<br><br>';
echo '1. CakePHPの2系・3系の違い：CakePHP2はComposerでのインストールに対応していなかったことに対して、CakePHP3はComposerで簡単にインストールすることができるようになった。モデル周りの構成や、DBからデータを取得する際のコードも比較的簡単になった。<br>';
echo '2. LAMP：データベースを利用したWebアプリケーションを開発・運用するのに適した、人気の高いオープンソースソフトウェアの組み合わせの一つで、OSの「Linux」、Webサーバの「Apache」、データベースの「MySQL」（後にMariaDBも選択肢に追加された）、プログラミング言語および実行環境の「PHP」「Perl」「Python」（のいずれか）の頭文字を繋いだもの。<br>';
echo '3. AWS：Amazon Web Servicesの略。Amazon.comの子会社であるAmazon Web Servicesによって提供されているクラウドコンピューティングサービス。<br>';