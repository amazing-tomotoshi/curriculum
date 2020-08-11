<?php
function tyouhou($tate, $yoko, $takasa){
    $ans=$tate*$yoko*$takasa;
    return $tate.'cm × '.$yoko.'cm × '.$takasa.'cm = '.$ans.'cm3<br>';
}

echo tyouhou(5,10,8);

echo '<br>';
echo '1. ハッシュ化：元のデータから一定の計算手順に従ってハッシュ値と呼ばれる規則性のない固定長の値を求め、その値によって元のデータを置き換えること。パスワードの保管などでよく用いられる手法。<br>';
echo '2. 総合テスト：開発中のソフトウェアや情報システムのテスト手法の一つで、開発の最終段階にシステム全体を対象に行われるテスト。<br>';
echo '3. デバッグ：コンピュータプログラムに潜む欠陥を探し出して取り除くこと。<br>';
?>