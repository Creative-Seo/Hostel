<?php
$title = 'Контакты, схема проезда - Хостел Храповицкий';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"Контакты",
"time1":"Время заезда: 14:00",
"time2":"Время выезда: 12:00",
"map-yandex-1":"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=TixNOUJi3i9Heghz4ES00Y-r_3yef5Fz",
"map-yandex-2":"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Gz-NbC3GtS575dbx6VG8SL4xgJtjY1j2",
"h2-1":"Как добраться на автобусе",
"p-1":"Шаг вправо, шаг влево - расстрел.",
"h2-2":"Как добраться на автомобиле",
"p-2":"Шаг вправо, шаг влево - расстрел."
}',true);

$root='../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");

include($root."template".$dir."ind.php");
?>