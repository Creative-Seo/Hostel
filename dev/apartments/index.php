<?php
$title = 'Номера в хостеле во Владимире - Хостел Храповицкий';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"'.$title.'",
"rooms-gold":"Бронируя номер в нашем хостеле, Вы получаете не только комфортное проживание, но и ряд приятных бонусов!",
"rooms-url":"/apartments/"
}',true);

$root='../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");

include($root."template".$dir."ind.php");
?>