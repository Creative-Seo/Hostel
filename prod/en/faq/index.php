<?php $title = 'Частые вопросы Хостел - Храповицкий';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"Частые вопросы"
}',true);

$root='../../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template".$dir."ind.php");
?>