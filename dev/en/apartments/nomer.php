<?php
$lang = json_decode('{
"slider-cost":" RUB/night",
"features-h2":"What\'s Included",
"map-yandex":""
}',true);

$root='../../../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template/apartments/nomer.php");
?>