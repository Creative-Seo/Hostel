<?php $title = 'Частые вопросы Хостел - Храповицкий';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"Частые вопросы"
}',true);

$root='../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");
include($root."template".$dir."ind.php");
?>