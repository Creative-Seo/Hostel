<?php $root='../';
include("var.php");
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="container">
	<h1><?php echo $title?></h1>
	<div class="map row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cont">
		  <div class="cont2"><i class="fa fa-home fa-2x"></i> 600000, Владимир, ул. Дворянская, д. 11а</div>
		  <div class="cont2"><i class="fa fa-clock-o fa-2x"></i> пн-вс: 9:00-22:00</div>
		  <div class="cont2">
			<table>
			  <tbody><tr>
				<td><i class="fa fa-phone fa-2x"></i> Телефон:</td>
				<td class="cont-tel">8(4922) 30-41-65</td>
			  </tr>
			  <tr>
				<td><i class="fa fa-envelope-o fa-2x"></i> E-mail:</td>
				<td class="cont-mail"><a href="mailto:info@hostel.ru">info@hostel.ru</a></td>
			  </tr>
			</tbody></table>
		  </div>
		</div>	
	
		<div class="map-yandex col-md-6">
			<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=xy4Y5e34o_oSvIvagpI0L-NmLwY2VxiO"></script>
		</div>
	</div>
</div>

<?php include($root."blocks/footer.php"); ?>