<?php
$title = 'Contacts, Driving directions - Khrapovitskiy Hostel';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"Contacts",
"time1":"Время заезда: 14:00",
"time2":"Время выезда: 12:00",
"map-yandex-1":"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=TixNOUJi3i9Heghz4ES00Y-r_3yef5Fz",
"h2":"You can get From Rilway station to Khrapovitskiy Hostel:",
"h2-0":"On foot",
"map-yandex-2":"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Gz-NbC3GtS575dbx6VG8SL4xgJtjY1j2",
"h2-1":"На троллейбусе до остановки Площадь Фрунзе",
"p-1":"Номера троллейбусов 12 (стоимость проезда 17 рублей).<br>А также вы можете подняться с вокзала на остановку Вокзальный спуск и с неё добраться до остановки Площадь Фрунзе.<br>Автобусы: 10, 12С, 15, 22, 25, 26 (стоимость проезда 18 рублей).<br>Троллейбусы: 1 (стоимость проезда 17 рублей).",
"h2-2":"На такси",
"p-2":"Номер самого недорогого такси +7 (4922) 41-41-41 (стоимость проезда до хостела 100 рублей)."
}',true);

$root='../../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template".$dir."ind.php");
?>