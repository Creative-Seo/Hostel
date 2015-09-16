<?php $title = 'Хостел в городе Владимире - Храповицкий';
$description = '';
$keywords = '';

$lang = json_decode('{
}',true);

$root='../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");

include($root."template".$dir."ind.php");
?>