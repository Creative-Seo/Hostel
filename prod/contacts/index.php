<?php
$title = 'Контакты, схема проезда - Хостел Храповицкий';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"Контакты",
"time1":"Время заезда: 14:00",
"time2":"Время выезда: 12:00",
"pod_ezd":"первый подъезд",
"map-yandex-1":"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=M-7EarbO1MbirF2NRD6SnSGZ_-9NOUex&lang=ru_RU&sourceType=constructor",
"h2":"С вокзала до хостела вы можете добраться :",
"h2-0":"Пешком",
"map-yandex-2":"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Gz-NbC3GtS575dbx6VG8SL4xgJtjY1j2&lang=ru_RU&sourceType=constructor",
"h2-1":"На общественном транспорте до остановки Площадь Фрунзе",
"p-1":"Номера троллейбусов: 12 (стоимость проезда 17 рублей).<br>А также вы можете подняться с вокзала на остановку Гостиница \"Владимир\" и с неё добраться до остановки Площадь Фрунзе.<br>Автобусы: 10, 12С, 15, 22, 25, 26 (стоимость проезда 18 рублей).<br>Троллейбусы: 1 (стоимость проезда 17 рублей).",
"h2-2":"На такси",
"p-2":"Номер самого недорогого такси +7 (4922) 41-41-41 (стоимость проезда до хостела 100 рублей)."
}',true);

$root='../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");

include($root."template".$dir."ind.php");
?>