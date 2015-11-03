<?php
$title = 'Хостел во Владимире Храповицкий недорого, недалеко от центра';
$description = '';
$keywords = '';

$lang = json_decode('{
"slider-h1_1":"Хостел с домашней атмосферой в историческом центре Владимира",
"slider-h2_1":"Места от <b>350</b> рублей за сутки",
"slider-h2_2":"Недалеко от Вокзала. Рядом с достопримечательностями.",
"slider-vopros1":"Что за хостел?",
"slider-vopros2":"Что рядом?",
"slider-vopros3":"Как добраться?",
"bottom-h1":"Посетить веб-сайт",
"rooms-h2":"Номера",
"rooms-url":"/apartments/",
"features-h2":"В стоимость проживания включено",
"about-h2":"О хостеле",
"map-yandex":"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=M-7EarbO1MbirF2NRD6SnSGZ_-9NOUex&lang=ru_RU&sourceType=constructor"
}',true);

$root='';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");

include($root."template".$dir."ind.php");
?>
