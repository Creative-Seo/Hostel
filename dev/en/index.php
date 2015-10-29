<?php
$title = 'Khrapovitsky Hostel Vladimir';
$description = '';
$keywords = '';

$lang = json_decode('{
"slider-h1_1":"Home-like Hostel in the Heart of Old Vladimir",
"slider-h2_1":"Beds from only <b>350</b> Rub/night",
"slider-h2_2":"Close to railway station and attractions",
"slider-vopros1":"Что за хостел?",
"slider-vopros2":"Что рядом?",
"slider-vopros3":"Как добраться?",
"bottom-h1":"Visit Website",
"rooms-h2":"apartments",
"rooms-url":"/en/apartments/",
"features-h2":"What\'s included",
"about-h2":"General Information",
"map-yandex":"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=TixNOUJi3i9Heghz4ES00Y-r_3yef5Fz"
}',true);

$root='../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template".$dir."ind.php");
?>