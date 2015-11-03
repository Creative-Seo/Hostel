<?php
$title = 'Contacts, Driving directions - Khrapovitskiy Hostel';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"Contacts",
"time1":"Check-in time: 14:00",
"time2":"Check-out time: 12:00",
"pod_ezd":"the first entrance",
"map-yandex-1":"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=M-7EarbO1MbirF2NRD6SnSGZ_-9NOUex&lang=en_US&sourceType=constructor",
"h2":"From Railway station to Khrapovitskiy Hostel You can get:",
"h2-0":"On foot (see lower map)",
"map-yandex-2":"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Gz-NbC3GtS575dbx6VG8SL4xgJtjY1j2&lang=en_US&sourceType=constructor",
"h2-1":"By  public transport",
"p-1":"Take trolley bus 12 from railway station and get off at Ploschad  Frunze stop. Trolley bus fare is 17 RUB.<br>When you exit a railway station you will see a Large Cathedral uphill , cross the road and walk up so that  it is on your left until you come to the staires. Climb flight of stairs and go straight through the arc and you are now at Gostinitsya Vladimir bus stop. Take a bus 10/12C/15/22/25 or 26. Get off at Ploschad  Frunze stop. Bus fare is 18 RUB.",
"h2-2":"By taxi",
"p-2":"The cheapest taxi phone number in Vladimir : +7(4922) 41-41-41."
}',true);

$root='../../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template".$dir."ind.php");
?>