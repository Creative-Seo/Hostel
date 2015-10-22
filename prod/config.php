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
$email = 'info@hrapovitsky.ru';

$menu = json_decode('{
	"apartments":{"name":"Номера и бронирование","url":"/apartments/"},
	"groups":{"name":"Групповое размещение","url":"/groups/"},
	"services":{"name":"Услуги","url":"/services/"},
	"faq":{"name":"Частые вопросы","url":"/faq/"},
	"contacts":{"name":"Контакты","url":"/contacts/"}
}',true);
$nomera = json_decode('{
	"1":{"name":"Женский номер на 8 человек","url":"8-bed-female-dorm/","cost":"400"},
	"2":{"name":"Мужской номер на 6 человек","url":"6-bed-male-dorm/","cost":"400"},
	"3":{"name":"Женский номер на 6 челвоек","url":"6-bed-female-dorm/","cost":"400"},
	"4":{"name":"Мужской номер на 10 человек","url":"10-bed-male-dorm/","cost":"400"},
	"5":{"name":"Семейный номер на 10 человек","url":"family-room-1/","cost":"500"},
	"6":{"name":"Семейный номер на 10 человек","url":"family-room-2/","cost":"500"}
}',true);
$inclusive = json_decode('{
	"i2":"Горячий душ", "i3":"Полотенца и белье", "i4":"Кухня", "i5":"Бесплатный Wi-Fi", "i6":"Гостевой компьютер", "i7":"24/7 ресепшн", "i8":"Хранение багажа", "i9":"Телевизор", "i10":"Карта города", "i11":"Настольные игры", "i12":"Локеры"
}',true);

$meta_lang = 'ru';
$header_logo = 'Храповицкий<br><span>хостел</span>';
$header_tel = ' +7(4922) <span>32-65-76</span><p class="tel_svyaz">На связи 24 часа</p>';
$bread = 'Главная';
?>