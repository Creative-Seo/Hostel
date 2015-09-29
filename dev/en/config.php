<?php
$self = explode("/", $_SERVER['REQUEST_URI']);
$name = 'Khrapovitskiy Hostel';
$url = 'http://www.khrapovitsky.ru/en/';
$streetAddress = 'Bolshaya Nizhegorodskaya 67г';
$postalCode = '600020';
$addressLocality = 'Vladimir';
$address = $postalCode.', '.$addressLocality.', '.$streetAddress;
$tel = '+7(4922) 32-65-76';
$tel_dop = '+7(920) 934-66-05';
$email = 'info@hrapovitsky.ru';

$menu = json_decode('{
	"apartments":{"name":"Apartments","url":"/en/apartments/"},
	"groups":{"name":"Group placement","url":"/en/groups/"},
	"services":{"name":"Services","url":"/en/services/"},
	"faq":{"name":"F.A.Q.","url":"/en/faq/"},
	"contacts":{"name":"Contacts","url":"/en/contacts/"}
}',true);
$nomera = json_decode('{
	"1":{"name":"Female Room for 8 people","url":"8-bed-female-dorm/","cost":"400"},
	"2":{"name":"Male Room for 6 people","url":"6-bed-male-dorm/","cost":"400"},
	"3":{"name":"Female Room for 6 people","url":"6-bed-female-dorm/","cost":"400"},
	"4":{"name":"Male Room for 10 people","url":"10-bed-male-dorm/","cost":"400"},
	"5":{"name":"Family Room for 10 people","url":"family-room-1/","cost":"500"},
	"6":{"name":"Family Room for 10 people","url":"family-room-2/","cost":"500"}
}',true);
$inclusive = json_decode('{
	"i1":"Breakfasts", "i2":"Hot showers", "i3":"Towels and linens", "i4":"Kitchen", "i5":"Free Wi-Fi", "i6":"Guest computer", "i7":"24/7 Receptionist", "i8":"Luggage Storage", "i9":"TV", "i10":"City map", "i11":"Board games", "i12":"Lockers"
}',true);

$meta_lang = 'en';
$header_logo = 'Khrapovitskiy<br><span>Hostel</span>';
$header_tel = ' +7(4922) <span>32-65-76</span><p class="tel_svyaz">On call 24 hours</p>';
$bread = 'Home';
?>