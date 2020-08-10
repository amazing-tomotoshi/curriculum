<form action="result.php" method="post">

    お名前：<input type="text" name="name">
    <br>
    ご希望商品：
    <input type="radio" name="abc" value="A賞">A賞
    <input type="radio" name="abc" value="B賞">B賞
    <input type="radio" name="abc" value="C賞">C賞
    <br>
    個数：
    <select name="num">
        <?php 
        for($i=1;$i<=10;$i++){
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>
    <br>
    <input type="submit" value="申込" />
</form>

<?php 
echo '<br>';
echo '1. モジュール：ハードウェアやソフトウェアにおける、ひとまとまりの機能・要素のこと。<br>';
echo '2. バージョン管理システム：ファイルの変更履歴の保存・管理を行うソフトウェア。<br>';
echo '3. サブクエリ：データベースなどの問い合わせ（クエリ）文の内部に含まれる、別の問い合わせ文のこと。<br>';
?>