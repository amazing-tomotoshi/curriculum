<?php
$num=[4,67,23,66,88];
var_dump($num);
echo '<br>';
echo count($num);
echo '<br>';
echo sort($num);
echo '<br>';
if(in_array(88,$num)){
    echo '88は含まれます';
}else{
    echo '88は含まれません';
}
echo '<br>';
$num2=implode('￥',$num);
var_dump($num2);
echo '<br>';
$num3=explode('￥',$num2);
var_dump($num3);
echo '<br>';
echo '<br>';

echo '1. 要件定義(要求仕様書)：システムやソフトウェアの開発において、実装すべき機能や満たすべき性能などのを明確にしていく作業のこと。';
echo '2. 単体テスト・結合テスト<br>';
echo '単体テスト：プログラムがモジュール単位で正常に動作するかを確かめるテスト工程。<br>';
echo '結合テスト：開発中のソフトウェアのテスト手法の一つで、複数のモジュール（部品）を組み合わせて行うテスト。<br>';
echo '3. テスト仕様書(どのようなもの、項目)：システムやソフトウェアが、クライアントのヒアリングをもとに作り上げた要件定義書の通りに機能するかどうか、テストするポイントをまとめたドキュメント。<br>';

?>