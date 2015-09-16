<?php 
$title = 'Услуги хостела Храповицкий';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"'.$title.'",
"h2":"В стоимость проживания включено"
}',true);

$root='../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");

include($root."template".$dir."ind.php");
?>