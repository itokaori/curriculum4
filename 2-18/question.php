<link rel="stylesheet" href="question.css">

<?php
$your_name = $_POST['your_name'];
?>
<?php
$poot_r = ["80", "22", "20", "21"];
$language_r = ["PHP", "Python", "JAVA", "HTML"];
$command_r = ["join", "select", "insert", "update"];

$poot_answer = $poot_r[0];
$language_answer = $language_r[3];
$command_answer = $command_r[1];
 
$your_names = $your_name;
?>

<div class="container">
<p>お疲れ様です<?php echo $your_name; ?>さん</p>


<form action="answer.php" method="POST"> 

<h2>①ネットワークのポート番号は何番？</h2>
   <?php
   foreach($poot_r as $value) { ?>
    <input type="radio" name="poot">
    <?php echo $value;
   }?>
   
<h2>②Webページを作成するための言語は？</h2>
   <?php
   foreach($language_r as $value) { ?>
    <input type="radio" name="language">
    <?php echo $value;
   }?>
   
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
   <?php
   foreach($command_r as $value) { ?>
    <input type="radio" name="command">
    <?php echo $value;
   }?>
   <br>
   <input type="hidden" name="poot_answer">
   <input type="hidden" name="language_answer">
   <input type="hidden" name="command_answer">
   <input type="hidden" name="your_names">

   <input type="submit" value="解答する" />
</div>

   </form>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->



