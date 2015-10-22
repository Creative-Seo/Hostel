<?php $title = 'Khrapovitskiy Hostel is in Vladimir';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"About Khrapovitskiy Hostel"
}',true);

$root='../../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template".$dir."ind.php");
?>