<link rel="stylesheet" href="answer.css">

<?php 
    $poot = $_POST['poot'];
    $language = $_POST['language'];
    $command = $_POST['command'];

    $poot_answer = $_POST['poot_answer'];
    $language_answer = $_POST['language_answer'];
    $command_answer = $_POST['command_answer'];

    $your_names = $_POST['your_names'];
?>
<?php
    $result_1 ="";
    if($poot == $poot_answer) {
        $result_1 = "正解！";
    }else{
        $result_1 = "残念・・・";
    }
    $result_2 ="";
    if($language == $language_answer) {
        $result_2 = "正解！";
    }else{
        $result_2 = "残念・・・";
    }
    $result_3 ="";
    if($command = $command_answer) {
        $result_3 = "正解！";
    }else{
        $result_3 = "残念・・・";
    }
?>




    <div class="container">
<p><?php echo $your_names; ?>さんの結果は・・・？</p>

<p>①の答え</p>
  <p><?php echo $result_1; ?></p>

<p>②の答え</p>
    <p><?php echo $result_2; ?></p>
       
<p>③の答え</p>
    <p><?php echo $result_3; ?></P>
       
</div>
  
