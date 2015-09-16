<?php
$title = 'Групповое бронирование: размещение групп в хостеле Храповицкий';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"'.$title.'"
}',true);

$root='../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");

include($root."template".$dir."ind.php");
?>