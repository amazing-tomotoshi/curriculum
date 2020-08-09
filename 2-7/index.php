<?php
$fruits = ['red'=>'赤', 'blue'=>'青', 'green'=>'緑'];
var_dump($fruits);
echo '<br>';
$fruits['yellow']='黄色';
var_dump($fruits);
echo '<br><br>';
echo '1. プルリクエスト（マージリクエスト）：コードの変更をレビュワーに通知し、マージを依頼する機能。<br>';
echo '2. Git Flow：マスター（master）とデベロップ（develop）という 2本の柱を軸に、3本の補助柱を設けてブランチの運用をスマートにするもの。<br>';
echo '3. CRON：UNIX系システム(Unix OS、Linux OS)で使用されるジョブを自動実行するスケジューラー。<br>';
?>