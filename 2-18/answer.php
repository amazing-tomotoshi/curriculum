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
    //[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
    $name=$_POST['name'];
    $port=$_POST['port'];
    $lang=$_POST['lang'];
    $sql=$_POST['sql'];
    $ans1=$_POST['ans1'];
    $ans2=$_POST['ans2'];
    $ans3=$_POST['ans3'];

    //選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
    function result($myans, $abans){
        if($myans==$abans){
            echo '正解！<br>';
        }else{
            echo '残念・・・<br>';
        }
    }
    ?>
    <p><!--POST通信で送られてきた名前を表示--><?php echo $name;?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php result($port,$ans1);?>
    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php result($lang,$ans2);?>
    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php result($sql,$ans3);?>
</body>
</html>