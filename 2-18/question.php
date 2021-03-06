<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //POST送信で送られてきた名前を受け取って変数を作成
    $name=$_POST['name'];
    //①画像を参考に問題文の選択肢の配列を作成してください。
    $ports=[80,22,21,20];
    $langs=['PHP', 'Python', 'Java', 'HTML'];
    $sqls=['join', 'select', 'insert', 'update'];
    //② ①で作成した、配列から正解の選択肢の変数を作成してください
    $ans1=$ports[0];
    $ans2=$langs[3];
    $ans3=$sqls[1];
    ?>

    <p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $name;?>さん</p>
    <!--フォームの作成 通信はPOST通信で-->
    <form action="answer.php" method="post">
        <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach($ports as $port): ?>
            <input type="radio" name="port" value="<?php echo $port; ?>"><?php echo $port; ?>
        <?php endforeach; ?>
        <h2>②Webページを作成するための言語は？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach($langs as $lang): ?>
            <input type="radio" name="lang" value="<?php echo $lang; ?>"><?php echo $lang; ?>
        <?php endforeach; ?>

        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach($sqls as $sql): ?>
            <input type="radio" name="sql" value="<?php echo $sql; ?>"><?php echo $sql; ?>
        <?php endforeach; ?>
        <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <input type="hidden" name="ans1" value="<?php echo $ans1; ?>">
        <input type="hidden" name="ans2" value="<?php echo $ans2; ?>">
        <input type="hidden" name="ans3" value="<?php echo $ans3; ?>">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <br>
        <input type="submit" value="回答する">

    </form>
    </body>
</html>