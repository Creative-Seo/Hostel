<?php
error_reporting(0);

// Ключ
define('KEY', 'asdfagfh54w3rtg54tsert4s4s');

// Разрешаем доступ только тем, кто знает ключ
if ($_POST['key'] != KEY) { header('HTTP/1.0 404 Not Found'); exit(); }

// POST VARS
$hotelId = 705486;
$code = (isset($_POST['code'])) ? _fd($_POST['code']) : '';
$email = (isset($_POST['email'])) ? _fd($_POST['email']) : '';
// MESSAGE BODY
$url = 'https://pmscloud.com/app/api/bookings/'.$code.'/refused';
$params = array(
    'email' => $email,
    'hotelId' => $hotelId,
);

if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
	$res = curl_exec($curl);
    if(!$res) {
        $error = curl_error($curl).'('.curl_errno($curl).')';
        echo $error;
    }
    else {
        echo "Извините, данная функция не доступа. Воспользуйтесь телефоном для отмены бронирования.";
    }
    curl_close($curl);
}
// FILTER
function _fd($str) {
	return trim(strip_tags(addslashes(trim($str))));
}

?>