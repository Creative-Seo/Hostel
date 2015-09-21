<?php
error_reporting(0);

// Ключ
define('KEY', 'asdfagfh54w3rtg54tsert4s4s');

// Разрешаем доступ только тем, кто знает ключ
if ($_POST['key'] != KEY) { header('HTTP/1.0 404 Not Found'); exit(); }

// POST VARS
$hotelId = 705486;
$button = 2195456;
$startD = (isset($_POST['startD'])) ? _fd($_POST['startD']) : '';
$endD = (isset($_POST['endD'])) ? _fd($_POST['endD']) : '';
$adults = (isset($_POST['adults'])) ? _fd($_POST['adults']) : '';
$children = (isset($_POST['children'])) ? _fd($_POST['children']) : '';
$curr = (isset($_POST['curr'])) ? _fd($_POST['curr']) : '';

$params = array(
'hotelId' => $hotelId,
'startD' => $startD,
'endD' => $endD,
'adults' => $adults,
'children' => $children,
'curr' => $curr,
'button' => $button
);
// MESSAGE BODY
$url = 'https://pmscloud.com/app/button#/?'.http_build_query($params);

echo $url;
// FILTER
function _fd($str) {
	return trim(strip_tags(addslashes(trim($str))));
}

?>
