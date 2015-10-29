<?php
$title = 'Номера в хостеле во Владимире - Хостел Храповицкий';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"'.$title.'",
"rooms-url":"/apartments/"
}',true);

$root='../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");

include($root."template".$dir."ind.php");
?>