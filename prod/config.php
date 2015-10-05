<?php
$self = explode("/", $_SERVER['REQUEST_URI']);
$name = 'Хостел Храповицкий';
$url = 'http://www.khrapovitsky.ru/';
$streetAddress = 'Большая Нижегородская 67г';
$postalCode = '600020';
$country = 'Россия';
$addressRegion = 'Владимирская область';
$addressLocality = 'Владимир';
$address = $postalCode.', '.$addressLocality.', '.$streetAddress;
$tel = '+7(4922) 32-65-76';
$tel_dop = '+7(920) 934-66-05';
$email = 'info@khrapovitsky.ru';
$price = '350';

$menu = json_decode('{
	"apartments":{"name":"Номера и бронирование","url":"/apartments/"},
	"groups":{"name":"Групповое размещение","url":"/groups/"},
	"faq":{"name":"Частые вопросы","url":"/faq/"},
	"contacts":{"name":"Контакты","url":"/contacts/"}
}',true);
$nomera = json_decode('{
	"1":{"name":"Женский номер на 8 человек","url":"8-bed-female-dorm/","cost":"350","razmer":"5х7"},
	"2":{"name":"Мужской номер на 6 человек","url":"6-bed-male-dorm/","cost":"350","razmer":"4,5х3"},
	"3":{"name":"Женский номер на 6 челвоек","url":"6-bed-female-dorm/","cost":"350","razmer":"6х3"},
	"4":{"name":"Мужской номер на 10 человек","url":"10-bed-male-dorm/","cost":"350","razmer":"6х7"},
	"5":{"name":"Семейный номер","url":"family-room-1/","cost":"2000","razmer":"3,5х6,2"},
	"6":{"name":"Семейный номер","url":"family-room-2/","cost":"2000","razmer":"4,5х6,5"}
}',true);
$inclusive = json_decode('{
	"i2":"Горячий душ", "i3":"Полотенца и белье", "i4":"Кухня", "i5":"Бесплатный Wi-Fi", "none2":"Фен", "i7":"24/7 ресепшн", "i8":"Хранение багажа", "i9":"Телевизор", "i10":"Карта города", "i11":"Настольные игры", "i12":"Локеры", "none1":"Хорошее настроение"
}',true);

$meta_lang = 'ru';
$header_logo = 'Храповицкий<br><span>хостел</span>';
$header_tel = ' +7(4922) <span>32-65-76</span>';
$header_teltext = ' На связи 24 часа';
$bread = 'Главная';

$services ='Услуги';
?>