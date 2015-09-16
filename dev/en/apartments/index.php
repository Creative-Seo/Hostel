<?php
$title = 'Номера в хостеле во Владимире - Хостел Храповицкий';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"'.$title.'",
"rooms-gold":"Бронируя номер в нашем хостеле, Вы получаете не только комфортное проживание, но и ряд приятных бонусов!",
"rooms-url":"/en/apartments/"
}',true);

$root='../../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template".$dir."ind.php");
?>