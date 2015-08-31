<?php
$menu = json_decode('[
	{"name":"О нас","url":"javascript: void(0);"},
	{"name":"Номера","url":"javascript: void(0);"},
	{"name":"Бронирование","url":"javascript: void(0);"},
	{"name":"Групповое размещение","url":"javascript: void(0);"},
	{"name":"Услуги","url":"javascript: void(0);"},
	{"name":"Контакты","url":"javascript: void(0);"}
]',true);
$nomera = json_decode('{
	"1":{"name":"Женский номер на 8 челвоек","url":"zhenskiy-nomer-na-8","cost":"400"},
	"2":{"name":"Мужской номер на 6 человек ","url":"muzhskoy-nomer-na-6","cost":"400"},
	"3":{"name":"Женский номер на 6 челвоек","url":"zhenskiy-nomer-na-6","cost":"400"},
	"4":{"name":"Мужской номер на 10 человек ","url":"muzhskoy-nomer-na-10","cost":"400"},
	"5":{"name":"Семейный номер на 10 человек ","url":"semeynyy-nomer-na-4-n5","cost":"500"},
	"6":{"name":"Семейный номер на 10 человек ","url":"semeynyy-nomer-na-4-n6","cost":"500"}
}',true);
?>