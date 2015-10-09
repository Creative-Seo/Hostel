<?php
$self = explode("/", $_SERVER['REQUEST_URI']);
$name = 'Hostel Khrapovitsky';
$url = 'http://www.khrapovitsky.ru/en/';
$streetAddress = '67 G Bolshaya Nizhegorodskaya St.';
$postalCode = '600020';
$country = 'Russian Federation';
$addressRegion = 'Vladimir region';
$addressLocality = 'VLADIMIR';
$address = $postalCode.', '.$addressLocality.', '.$streetAddress;
$tel = '+7(4922) 32-65-76';
$email = 'info@khrapovitsky.ru';

$menu = json_decode('{
	"apartments":{"name":"Apartments","url":"/en/apartments/"},
	"groups":{"name":"Group booking","url":"/en/groups/"},
	"faq":{"name":"F.A.Q.","url":"/en/faq/"},
	"contacts":{"name":"Contacts","url":"/en/contacts/"}
}',true);
$nomera = json_decode('{
	"1":{"name":"8 Bed men-only Dorm","url":"8-bed-male-dorm/","cost":"350","razmer":"5х7"},
	"2":{"name":"6 Bed women-only Dorm","url":"6-bed-female-dorm/","cost":"350","razmer":"4,5х3"},
	"3":{"name":"6 Bed men-only Dorm","url":"6-bed-male-dorm/","cost":"350","razmer":"6х3"},
	"4":{"name":"10 Bed women-only Dorm","url":"10-bed-female-dorm/","cost":"350","razmer":"6х7"},
	"5":{"name":"Private Family Room","url":"family-room-1/","cost":"350","razmer":"3,5х6,2"},
	"6":{"name":"Private Family Room","url":"family-room-2/","cost":"350","razmer":"4,5х6,5"}
}',true);
$inclusive = json_decode('{
	"ic_3":"Hot Showers", "ic_6":"Towels and linen", "ic_5":"(Fully Equipped) Kitchen", "ic_1":"Free Wi-Fi", "ic_12":"Hairdryer", "ic_4":"24 hour reception", "ic_10":"Free Luggage Storage", "ic_7":"TV", "ic_11":"Free City Maps", "ic_2":"Table games", "ic_9":"Lockers", "ic_8":"Good mood"
}',true);

$meta_lang = 'en';

$header_logo = 'Khrapovitsky<br><span>Hostel</span>';
$header_tel = ' +7(4922) <span>32-65-76</span>';
$header_teltext = ' Round the clock';
$bread = 'Home';

$services ='Services';


$pms_h1_1 = 'Online booking';
$pms_dfrom = 'Arriving';
$pms_dto = 'Departing';
$pms_adults = 'Adults';
$pms_children = 'Children';
$pms_offer = 'You agree with the offer';
$pms_btn_1 = 'Book now';
$pms_href_1 = 'Cancel reservation';
$pms_h1_1 = 'Cancel reservation';
$pms_h1_2 = 'Code';
$pms_email = 'E-mail';
$pms_ok = 'Your reservation has been canceled';
$pms_btn_2 = 'Cancel reservation';
$pms_href_2 = 'Availability and Prices';
?>