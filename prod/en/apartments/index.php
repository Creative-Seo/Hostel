<?php
$title = 'Types of Rooms';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"'.$title.'",
"rooms-gold":"All our dorms are single-sex!",
"rooms-url":"/en/apartments/"
}',true);

$root='../../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template".$dir."ind.php");
?>