<?php
$title = 'Hostel Khrapovitsky Vladimir';
$description = '';
$keywords = '';

$lang = json_decode('{
"slider-h1_1":"Хостел с домашней атмосферой в историческом центре Владимира",
"slider-h2_1":"Места от <b>350</b> рублей за сутки",
"slider-h2_2":"Недалеко от Вокзала. Рядом с достопримечательностями.",
"slider-vopros1":"Что за хостел?",
"slider-vopros2":"Что рядом?",
"slider-vopros3":"Как добраться?",
"bottom-h1":"Visit Website",
"rooms-h2":"apartments",
"rooms-gold":"Бронируя номер в нашем хостеле, Вы получаете не только комфортное проживание, но и ряд приятных бонусов!",
"rooms-url":"/en/apartments/",
"features-h2":"В стоимость проживания включено",
"about-h2":"General Information",
"map-yandex":"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=TixNOUJi3i9Heghz4ES00Y-r_3yef5Fz"
}',true);

$root='../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template".$dir."ind.php");
?>