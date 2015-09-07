<?php
$menu = json_decode('[
	{"name":"О хостеле","url":"/en/about/"},
	{"name":"Номера","url":"/en/apartments/"},
	{"name":"Групповое размещение","url":"/en/groups/"},
	{"name":"Услуги","url":"/en/services/"},
	{"name":"Контакты","url":"/en/contacts/"}
]',true);
$nomera = json_decode('{
	"1":{"name":"Женский номер на 8 челвоек","url":"8-bed-female-dorm/","cost":"400"},
	"2":{"name":"Мужской номер на 6 человек ","url":"6-bed-male-dorm/","cost":"400"},
	"3":{"name":"Женский номер на 6 челвоек","url":"6-bed-female-dorm/","cost":"400"},
	"4":{"name":"Мужской номер на 10 человек ","url":"10-bed-male-dorm/","cost":"400"},
	"5":{"name":"Семейный номер на 10 человек ","url":"family-room-1/","cost":"500"},
	"6":{"name":"Семейный номер на 10 человек ","url":"family-room-2/","cost":"500"}
}',true);
?>