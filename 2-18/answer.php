<link rel="stylesheet" href="q-a.css">

<?php 
    $poot = $_POST['poot'];
    $language = $_POST['language'];
    $command = $_POST['command'];

    $poot_answer = $_POST['poot_answer'];
    $language_answer = $_POST['language_answer'];
    $command_answer = $_POST['command_answer'];

    $your_names = $_POST['your_names'];

  function question($A, $B) {
    if($A == $B) {
        print "正解！";
    }else{
        print "残念・・";
    }
  } 

     
?>
    <div class="container">
<p><?php echo $your_names; ?>さんの結果は・・・？</p>

<p>①の答え</p>
    <p><?php question($poot, $poot_answer);?></p>

<p>②の答え</p>
    <p><?php question($language, $language_answer); ?></p>
       
<p>③の答え</p>
    <p><?php question($command,  $command_answer); ?></P>
       
</div>
  