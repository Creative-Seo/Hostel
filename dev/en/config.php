<?php
$self = explode("/", $_SERVER['REQUEST_URI']);
$name = 'Hostel Khrapovitsky';
$url = 'http://www.khrapovitsky.ru/en/';
$streetAddress = 'Bolshaya Nizhegorodskaya 67g';
$postalCode = '600020';
$country = 'Russian Federation';
$addressRegion = 'Vladimir region';
$addressLocality = 'Vladimir';
$address = $postalCode.', '.$addressLocality.', '.$streetAddress;
$tel = '+7(4922) 32-65-76';
$tel_dop = '+7(920) 934-66-05';
$email = 'info@khrapovitsky.ru';

$menu = json_decode('{
	"apartments":{"name":"Apartments","url":"/en/apartments/"},
	"groups":{"name":"Group placement","url":"/en/groups/"},
	"faq":{"name":"F.A.Q.","url":"/en/faq/"},
	"contacts":{"name":"Contacts","url":"/en/contacts/"}
}',true);
$nomera = json_decode('{
	"1":{"name":"Female Room for 8 people","url":"8-bed-female-dorm/","cost":"350","razmer":"5х7"},
	"2":{"name":"Male Room for 6 people","url":"6-bed-male-dorm/","cost":"350","razmer":"4,5х3"},
	"3":{"name":"Female Room for 6 people","url":"6-bed-female-dorm/","cost":"350","razmer":"6х3"},
	"4":{"name":"Male Room for 10 people","url":"10-bed-male-dorm/","cost":"350","razmer":"6х7"},
	"5":{"name":"Family Room for 10 people","url":"family-room-1/","cost":"350","razmer":"3,5х6,2"},
	"6":{"name":"Family Room for 10 people","url":"family-room-2/","cost":"350","razmer":"4,5х6,5"}
}',true);
$inclusive = json_decode('{
	"i2":"Hot showers", "i3":"Towels and linens", "i4":"Kitchen", "i5":"Free Wi-Fi", "none1":"Hairdryer", "i7":"24/7 Receptionist", "i8":"Luggage Storage", "i9":"TV", "i10":"City map", "i11":"Board games", "i12":"Lockers", "none2":"Good mood"
}',true);

$meta_lang = 'en';

$header_logo = 'Khrapovitsky<br><span>Hostel</span>';
$header_tel = ' +7(4922) <span>32-65-76</span>';
$header_teltext = ' On call 24 hours';
$bread = 'Home';

$services ='Services';
?>