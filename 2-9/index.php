<?php
for($i=1;$i<101;$i++){
    if($i%3===0&&$i%5==0){
        echo 'FizzBuzz!!<br>';
    }elseif($i%3===0){
        echo 'Fizz!<br>';
    }elseif($i%5===0){
        echo 'Buzz!<br>';
    }else{
        echo $i.'<br>';
    }
}

echo '<br>';
echo '1. パフォーマンス：コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、通信回線・ネットワークなどの伝送速度・容量などのこと。<br>';
echo '2. スロークエリ：データベースにおいて、時間のかかっているSQLのこと。<br>';
echo '3. クエリログ：実行したSQLクエリの履歴が全て記録されていくログ。<br>';
?>