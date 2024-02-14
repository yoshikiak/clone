<?php
  $question = $_POST['question'];
  $answer = $_POST['answer'];
    if($question == $answer){
	    $rs = "正解";
    }else{
	    $rs= "不正解";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP四択問題結果</title>
  </head>
  <body>
    <h2>クイズ結果</h2>
    <?php echo $rs ?>
  </body>
</html>