<?php
$lang = json_decode('{
"slider-cost":" рублей за сутки",
"slider-h2":"Просторная комната с зоной отдыха.",
"features-h2":"В стоимость проживания включено",
"map-yandex":""
}',true);

$root='../../../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template/apartments/nomer.php");
?>