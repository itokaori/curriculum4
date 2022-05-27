<?php
$x = 0;
$i = 0;
while ($x < 40) {
  $i++;
  $s = mt_rand(1,6);
  echo $i . "回目=" . $s . "\n";
  $x += $s;
  echo "<br>";
}
echo "合計" . $i . "回でゴールしました";
echo "<br>";
echo "<br>";
?>

<?php
echo date("今H時台です", time());
echo "<br>";
$time = date("H", time());
$times = (intval($time));

  if($times >= 00 && $times <= 4) {
    echo "こんばんは！";
  } elseif($times >= 5 && $times <= 9) {
    echo "おはようございます！";
  }elseif($times >= 10 && $times <= 17){
    echo "こんにちは！";
  }elseif($times >= 18 && $times <= 24) {
    echo "こんばんは！";
  }

?>
