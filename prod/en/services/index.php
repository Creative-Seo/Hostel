<?php 
$title = 'Услуги хостела Храповицкий';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"'.$title.'",
"h2":"В стоимость проживания включено"
}',true);

$root='../../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template".$dir."ind.php");
?>