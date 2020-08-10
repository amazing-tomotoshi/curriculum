<?php
$sum=0;
$i=0;
while($sum<40){
    $i++;
    $num = mt_rand(1,6);
    echo $i.'回目＝'.$num.'<br>';
    $sum +=$num;
}
echo '合計'.$i.'回でゴールしました<br>';

echo '<br>';

$t =date("H", time());
echo "今".$t."時台です<br>";
if($t>=4&&$t<11){
    echo 'おはようございます';
}elseif($t>=11&&$t<18){
    echo 'こんにちは';
}else{
    echo 'こんばんは';
}
?>