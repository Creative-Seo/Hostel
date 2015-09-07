<?php $root='';
include("var.php");
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<!-- SLIDER -->
<div class="slider">
	<div class="slider-img"><img src="/img/top.jpg" class="slider-responsive" alt="<?php echo $title;?>"></div>
	<div class="container-fluid"><div id="_pmsWidget_"></div></div>
	<div class="slider-content">
		<div class="description hidden-xs">
			<div class="container"><div class="row">
				<div class="col-sm-7 col-md-7 col-lg-9 col-sm-offset-5 col-md-offset-5 col-lg-offset-3 hidden-xs">
					<div class="h1">Европейский хостел в историческом центре Владимира</div>
					<div class="h2">Номера от <b>500</b> рублей в сутки</div>
				</div>
			</div></div>
		</div>
		<div class="container hidden-xs"><div class="row">
			<div class="col-sm-7 col-md-7 col-lg-9 col-sm-offset-5 col-md-offset-5 col-lg-offset-3">
					<div class="h2">Недалеко от Вокзала. Рядом с достопримечательностями. <br>Большой завтрак.</div>
			</div>
		</div></div>
		<div class="description_icons hidden-sm hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-4">Что за хостел?</div>
					<div class="col-md-4">Что рядом?</div>
					<div class="col-md-4">Как добраться?</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<!-- SLIDER -->

<!-- НОМЕРА -->
<div class="rooms">
<div class="container">
	<div class="h2">Номера</div>
	<p class="center-block rooms-gold">Бронируя номер в нашем хостеле, Вы получаете не только комфортное проживание, но и ряд приятных бонусов!</p>
	<div class="row">
<?php $key=0;
foreach($nomera as $row) {
	if ($key>0) {
		$clearfix='';
		if ($key % 2 == 0) {$clearfix = $clearfix.' visible-sm';}
		if ($key % 3 == 0) {$clearfix = $clearfix.' visible-md visible-lg';}
		if ($clearfix != '') {echo '<div class="clearfix'.$clearfix.'"></div>';}
	}
	$key++; ?>
		<div class="col-sm-6 col-md-4">
			<a href="/en/apartments/<?php echo $row['url'];?>"><img src="/apartments/<?php echo $row['url'];?>img/glav.jpg" class="img-responsive" alt="<?php echo $row['name'];?>"></a>
			<p class="rooms_number">№ <?php echo $row['id'];?> - <?php echo $row['name'];?> <br> <span class="rooms_price"><?php echo $row['cost'];?> <i class="fa fa-rub"></i></span></p>
		</div>
<?php } ?>
	</div>
</div>
</div>
<!-- НОМЕРА -->

<!-- FEATURES -->
<div class="container features">
	<h2>В стоимость проживания включено</h2>
	<div class="row">
<?php $inclusive = [['i1','Завтраки'],['i2','Горячий душ'],['i3','Полотенца и белье'],['i4','Кухня'],['i5','Бесплатный Wi-Fi'],['i6','Гостевой компьютер'],['i7','24/7 ресепшн'],['i8','Хранение багажа'],['i9','Телевизор'],['i10','Карта города'],['i11','Настольные игры'],['i12','Локеры']];
foreach($inclusive as $key => $row) {
	if ($key>0) {
		$clearfix='';
		if ($key % 2 == 0) {$clearfix = $clearfix.' visible-xs';}
		if ($key % 4 == 0) {$clearfix = $clearfix.' visible-sm';}
		if ($key % 6 == 0) {$clearfix = $clearfix.' visible-md visible-lg';}
		if ($clearfix != '') {echo '<div class="clearfix'.$clearfix.'"></div>';}
	} ?>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/<?php echo $row[0];?>.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text"><?php echo $row[1];?></div>
		</div>
<?php } ?>
	</div>
</div>
<!-- FEATURES -->

<!-- MAP -->
<!-- <div class="container-fluid map">
	<div class="row">
		<h2>Расположение хостела</h2>
		<div class="map_yandex">
		<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=qnghkP4W_wvwMGKITCXQ_h-IQKXUOdZo&width=auto&height=350"></script>
		</div>
	</div>
</div> -->
<!-- MAP -->

<?php include($root."blocks/footer.php"); ?>