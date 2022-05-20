<?php
/* 切り上げ */
$x = 5.8;
$y = 4.1;
echo ceil($x);
echo '<br>';
echo ceil($y);
echo '<br>';
?>

<?php
/* 切り捨て */
$x = 5.8;
$y = 4.1;
echo floor($x);
echo '<br>';
echo floor($y);
echo '<br>';
?>

<?php
/* 四捨五入 */
$x = 5.8;
$y = 4.1;
echo round($x);
echo '<br>';
echo round($y);
echo '<br>';
?>

<?php
/* 円周率 */
function circle($r) {
    $circle_atea = $r * $r * pi();
    echo $circle_atea;
}
circle(3);
echo '<br>'
?>

<?php
/* 乱数 */
echo mt_rand(1, 50);
echo '<br>';
?>

<?php
/* 文字列の長さ */
$English = "abcdefg";
echo strlen($English);
echo '<br>';
?>

<?php
/* 検索 */
$name = "yamamoto";
echo strpos($name, "o");
echo '<br>';
?>

<?php
/* 文字の切り取り */
$name ="yamamoto";
echo substr($name, 4, 4);
echo '<br>';
echo substr($name, -5, 3);
echo '<br>';
?>

<?php
/* 置換 */
$name = "ya ma mo to";
echo str_replace("ya", "YA", $name);
echo '<br>';
echo str_replace(" ", "", $name);
echo '<br>';
?>

<?php
/* mb_strlen */
$japan = "かきくけこ";
echo strlen($japan);
echo '<br>';
echo mb_strlen($japan);
echo '<br>';
?>

<?php
/* mb_strpos */
$search = "ももりんごぶどう";
echo mb_strpos($search, "ご");
echo '<br>';
?>

<?php
/* mb_substr */
$name = "やまもと";
echo mb_substr($name, -2, 2);
echo '<br>';
?>

<?php
/* printf */
$runner = "山本さん";
$limit_hour = 1;
$limit_minute = 5;
printf("%sは%02d時間%02d分でゴールしました。", $runner, $limit_hour, $limit_minute);
echo '<br>';
?>

<?php
/* sprintf */
$runner = "山本さん";
$limit_hour = 1;
$limit_minute = 5;
$time = sprintf("%sは%02d時間%02d分でゴールしました。", $runner, $limit_hour, $limit_minute);
echo $time;
?>

