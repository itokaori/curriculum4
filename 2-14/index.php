<?php
/* 要素の数を数える*/
$students = ["mukai", "nakagawa", "akiba", "kawasima", "yamada"];
echo count($students);
echo '<br>';
?>

<?php
/*要素の並べ替え*/
$students = ["mukai", "nakagawa", "akiba", "kawasima", "yamada"];
sort($students);
var_dump($students);
echo '<br>';
$numbers = [52, 4, 81, 36, 20];
sort($numbers);
var_dump($numbers);
echo '<br>';
?>

<?php
/* 要素があるか調べる 検索*/
$students = ["mukai", "nakagawa", "akiba", "kawasima", "yamada"];
var_dump(in_array("mukai", $students));
echo '<br>';

if(in_array("akiba", $students)) {
    echo "秋葉君は出席しています";
} else {
    echo "秋葉君は欠席です";
}
echo '<br>';
?>

<?php
/*配列を結合して文字列に変換*/
$students = ["mukai", "nakagawa", "akiba", "kawasima", "yamada"];
$members = implode("!!", $students);
var_dump($members);
echo '<br>';

$re_students = explode("!!", $members);
var_dump($re_students);
?>
