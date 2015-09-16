<?php
$lang = json_decode('{
"slider-cost":" рублей за сутки",
"slider-h2":"Просторная комната с зоной отдыха.",
"features-h2":"В стоимость проживания включено",
"map-yandex":""
}',true);

$root='../../';
$dir=$_SERVER['REQUEST_URI'];
include($root."config.php");

include($root."template/apartments/nomer.php");
?>