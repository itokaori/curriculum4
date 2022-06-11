<link rel="stylesheet" href="q-a.css">

<?php
$your_name = $_POST['your_name'];
?>
<?php
$poot_a = ["80","22","20","21"];
$language_a = ["PHP", "Python", "JAVA", "HTML"];
$command_a = ["join", "select", "insert", "update"];

$poot_answer = $poot_a[0];
$language_answer = $language_a [2];
$command_answer = $command_a[1];


?>

<div class="container">
<p>お疲れ様です<?php echo $your_name; ?>さん</p>


<form action="answer.php" method="POST"> 

<h2>①ネットワークのポート番号は何番？</h2>
  <p> <?php
   foreach($poot_a as $value) { ?>
    <input type="radio" name="poot" value="<?php echo $value;?>">
    <?php echo $value;
   }?></p>
   
<h2>②Webページを作成するための言語は？</h2>
  <p> <?php
   foreach($language_a as $value) { ?>
    <input type="radio" name="language" value="<?php echo $value;?>">
    <?php echo $value;
   }?></p>
   
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
   <p><?php
   foreach($command_a as $value) { ?>
    <input type="radio" name="command" value="<?php echo $value;?>">
    <?php echo $value;
   }?></p>
   <br>
   <input type="hidden" name="poot_answer" value="<?php echo $poot_answer?>">
   <input type="hidden" name="language_answer" value="<?php echo $language_answer?>">
   <input type="hidden" name="command_answer" value="<?php echo $command_answer?>">
   <input type="hidden" name="your_names" value="<?php echo $your_name?>">

   <p><input type="submit" value="解答する" /></p>
</div>

   </form>




