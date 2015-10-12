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
	"1":{"name":"Мужской номер на 8 человек","url":"8-bed-male-dorm/","cost":"350","razmer":"5х7"},
	"2":{"name":"Женский номер на 6 человек","url":"6-bed-female-dorm/","cost":"350","razmer":"4,5х3"},
	"3":{"name":"Мужской номер на 6 челвоек","url":"6-bed-male-dorm/","cost":"350","razmer":"6х3"},
	"4":{"name":"Женский номер на 10 человек","url":"10-bed-female-dorm/","cost":"350","razmer":"6х7"},
	"5":{"name":"Семейный номер","url":"family-room-1/","cost":"2000","razmer":"3,5х6,2"},
	"6":{"name":"Семейный номер","url":"family-room-2/","cost":"2000","razmer":"4,5х6,5"}
}',true);
$inclusive = json_decode('{
	"ic_3":"Горячий душ", "ic_6":"Полотенца и белье", "ic_5":"Кухня", "ic_1":"Бесплатный Wi-Fi", "ic_12":"Фен", "ic_4":"24/7 ресепшн", "ic_10":"Хранение багажа", "ic_7":"Телевизор", "ic_11":"Карта города", "ic_2":"Настольные игры", "ic_9":"Локеры", "ic_8":"Хорошее настроение"
}',true);

$meta_lang = 'ru';
$header_logo = 'Храповицкий<br><span>хостел</span>';
$header_tel = ' +7(4922) <span>32-65-76</span>';
$header_teltext = ' На связи 24 часа';
$bread = 'Главная';

$services ='Услуги';

$pms_h1_1 = 'Онлайн бронирование';
$pms_dfrom = 'Дата заезда';
$pms_dto = 'Дата выезда';
$pms_adults = 'Взрослые';
$pms_children = 'Дети';
$pms_offer = 'Вы согласны с условиями оферты';
$pms_btn_1 = 'Забронировать';
$pms_href_1 = 'Отменить бронирование';
$pms_h1_1 = 'Отмена бронирования';
$pms_h1_2 = 'Код';
$pms_email = 'E-mail';
$pms_ok = 'Ваше бронирование было отменено';
$pms_btn_2 = 'Отменить бронирование';
$pms_href_2 = 'Цены и наличие';

$created = 'Создание сайтов';
?>