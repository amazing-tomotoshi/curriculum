<?php
$name = 'taro';
$pass = 'rrrr';
if($name==='taro'){
    if($pass === 'pass'){
        echo 'ログイン成功です';
    }else{
        echo 'パスワードが間違っています';
    }    
}else{
    if($pass === 'pass'){
        echo '名前が間違っています';
    }else{
        echo '入力情報が間違っています';
    }    
}

echo '<br><br>';
echo '1. IDE（統合開発環境）：ソフトウェア開発に必要なソフトウェアを一つに組み合わせ、同じ操作画面から統一的な操作法で利用できるようにしたソフトウェアパッケージ。<br>';
echo '2. JOIN（データベースにおいて）：複数のテーブルのデータをまとめて1つにすること。<br>';
echo '3. コンフリクト：変更履歴の競合のこと。<br>';
?>