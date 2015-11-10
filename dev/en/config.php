<?php
$self = explode("/", $_SERVER['REQUEST_URI']);
$name = 'Khrapovitsky Hostel';
$url = 'http://www.khrapovitsky.ru/en/';
$streetAddress = '67 G Bolshaya Nizhegorodskaya St.';
$postalCode = '600020';
$country = 'Russian Federation';
$addressRegion = 'Vladimir region';
$addressLocality = 'VLADIMIR';
$address = $streetAddress.', '.$addressLocality.', '.$postalCode;
$tel = '+7(4922) 32-65-76';
$tel_dop = '+7 (930) 837-57-37';
$email = 'info@khrapovitsky.ru';
$price = 'From 350';

$menu = json_decode('{
	"apartments":{"name":"Dormitory rooms","url":"/en/apartments/"},
	"groups":{"name":"Group booking","url":"/en/groups/"},
	"faq":{"name":"F.A.Q.","url":"/en/faq/"},
	"contacts":{"name":"Contacts","url":"/en/contacts/"}
}',true);
$nomera = json_decode('{
	"1":{"name":"8 Bed Dorm men-only","url":"8-bed-male-dorm/","cost":"from 350","razmer":"5х7"},
	"2":{"name":"6 Bed Dorm","url":"6-bed-female-dorm/","cost":"from 350","razmer":"4,5х3"},
	"3":{"name":"6 Bed Dorm","url":"6-bed-male-dorm/","cost":"from 350","razmer":"6х3"},
	"4":{"name":"10 Bed Dorm women-only","url":"10-bed-female-dorm/","cost":"from 350","razmer":"6х7"},
	"5":{"name":"Private Family Room","url":"family-room-1/","cost":"from 1300","razmer":"3,5х6,2"},
	"6":{"name":"Private Family Room","url":"family-room-2/","cost":"from 1300","razmer":"4,5х6,5"}
}',true);
$inclusive = json_decode('{
	"ic_3":"Hot Showers", "ic_6":"Towels and linen", "ic_5":"self-catering kitchen", "ic_1":"Free Wi-Fi", "ic_12":"Hairdryer", "ic_4":"24 hour reception", "ic_10":"Free Luggage Storage", "ic_7":"TV", "ic_11":"Free City Maps", "ic_2":"Table games", "ic_9":"Lockers", "ic_8":"Good mood"
}',true);

$meta_lang = 'en';

$header_logo = 'Khrapovitsky<br><span>Hostel</span>';
$header_tel = ' +7(4922) <span>32-65-76</span>';
$header_teltext = 'We are on call 24hours/7days a week';
$bread = 'Home';

$services ='Services';


$pms_h1_1 = 'Online booking';
$pms_dfrom = 'Arriving';
$pms_dto = 'Departing';
$pms_adults = 'Adults';
$pms_children = 'Children';
$pms_offer = 'I agree to the terms and conditions';
$pms_btn_1 = 'Book now';
$pms_href_1 = 'Cancel reservation';
$pms_h1_1 = 'Cancel reservation';
$pms_h1_2 = 'Code';
$pms_email = 'E-mail';
$pms_ok = 'Your reservation has been canceled';
$pms_btn_2 = 'Cancel Reservation';
$pms_href_2 = 'Availability & Prices';

$created = 'Website development';
?>