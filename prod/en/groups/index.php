<?php
$title = 'Group Booking: group accommodation at the Khrapovitsky Hostel';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"'.$title.'"
}',true);

$root='../../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template".$dir."ind.php");
?>