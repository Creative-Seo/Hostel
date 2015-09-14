<?php $root='../';
include("var.php");
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="container">
	<h1 class="text-center">Контакты</h1>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<p class="pull-left"><i class="fa fa-home fa-2x"></i></p>
		  	<p> 600000, Владимир, ул. Дворянская, д. 11а</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<p class="pull-left"><i class="fa fa-phone fa-2x"></i></p>
			<p><a href="tel:tel@8(4922) 30-41-65">8(4922) 30-41-65</a></p>
			<p><a href="tel:8(4922) 30-41-65">8(4922) 30-41-65</a></p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<p class="pull-left"><i class="fa fa-envelope-o fa-2x"></i></p>
			<p><a href="mailto:info@hrapovitsky.ru">info@hrapovitsky.ru</a></p>
		</div>
	</div>
	<p class="pull-left"><i class="fa fa-clock-o fa-2x"></i></p>
	<p>Время заезда: 14:00</p>
	<p>Время выезда: 12:00</p>
	<div class="map-yandex">
		  <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=TixNOUJi3i9Heghz4ES00Y-r_3yef5Fz"></script>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="map-yandex">
				<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Gz-NbC3GtS575dbx6VG8SL4xgJtjY1j2"></script>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<p class="h2">Как добраться на автобусе</p>
			<p>Шаг вправо, шаг влево - расстрел.</p>
			<br>
			<p class="h2">Как добраться на автомобиле</p>
			<p>Шаг вправо, шаг влево - расстрел.</p>
		</div>
	</div>
</div>

<?php include($root."blocks/footer.php"); ?>