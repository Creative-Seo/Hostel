<?php
$address = '600000, Владимир, Большая Нижегородская 67г';
$tel = '+7(4922) 32-65-76';
$tel_dop = '+7(920) 934-66-05';
$email = 'info@hrapovitsky.ru';

$menu = json_decode('{
	"apartments":{"name":"Apartments","url":"/en/apartments/"},
	"groups":{"name":"Group placement","url":"/en/groups/"},
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
	"i1":"Завтраки", "i2":"Горячий душ", "i3":"Полотенца и белье", "i4":"Кухня", "i5":"Бесплатный Wi-Fi", "i6":"Гостевой компьютер", "i7":"24/7 ресепшн", "i8":"Хранение багажа", "i9":"Телевизор", "i10":"Карта города", "i11":"Настольные игры", "i12":"Локеры"
}',true);

$meta_lang = 'en';
$header_logo = 'Khrapovitskiy<br><span>Hostel</span>';
$header_tel = ' +7(4922) <span>32-65-76</span><p class="tel_svyaz">На связи 24 часа</p>';
$bread = 'Главная';
?>