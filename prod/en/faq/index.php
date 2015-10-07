<?php $title = 'FAQs Hostel Khrapovitsky';
$description = '';
$keywords = '';

$lang = json_decode('{
"h1":"Frequently asked questions"
}',true);

$root='../../';
$dir= str_replace('/en','',$_SERVER['REQUEST_URI']);
include($root."en/config.php");

include($root."template".$dir."ind.php");
?>