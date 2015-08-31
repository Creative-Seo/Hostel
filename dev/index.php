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

<!-- PmsCloud Javascript Library Eventually, put it inside your <head/> tag --> 
<script src="https://pmscloud.com/app/pbb/js/pmsbook.js"></script>
<!-- put the following div where widget be placed. Make sure to preserve the div contents (backlink)-->
<script> var Pms = new _Pms('705486'); var params = { hotelId: '705486', button: '2195456', height:350, textColor:'#000', width:300, hostname: "https://pmscloud.com/app/form"}; Pms.widget("_pmsWidget_", params); </script>
<!-- that's all :) Thank you for using PmsCloud! -->

<!-- НОМЕРА -->
<div class="rooms">
<div class="container">
	<div class="row">
	    <div class="h2">Номера</div>
	    <p class="center-block">Бронируя номер в нашем хостеле, Вы получаете не только комфортное проживание, но и ряд приятных бонусов!</p>
<?php foreach($nomera as $key => $row) { 
if (($key>0)&&($key % 4 ==0)) {echo '<div class="clearfix hidden-sm hidden-xs"></div>';} ?>
		<div class="col-sm-6 col-md-4">
			<a href="/<?php echo $row["url"];?>"><img src="/<?php echo $row["url"];?>/img/glav.jpg" class="img-responsive" alt="<?php echo $row["name"];?>"></a>
			<div class="rooms_number">№ <?php echo $row["id"];?> - <?php echo $row["name"];?> <br> <span class="rooms_price"><?php echo $row["cost"];?> <i class="fa fa-rub"></i></span></div>
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
		<div class="col-xs-6 col-sm-3 col-xs-4 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i1.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">Завтраки</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i2.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">Горячий душ</div>
		</div>
	<div class="clearfix visible-xs"></div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i3.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">Полотенца и белье</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i4.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">Кухня</div>
		</div>
	<div class="clearfix visible-sm visible-xs"></div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i5.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">Бесплатный Wi-Fi</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i6.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">Гостевой компьютер</div>
		</div>
	<div class="clearfix hidden-sm"></div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i7.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">24/7 ресепшн</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i8.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">Хранение багажа</div>
		</div>
	<div class="clearfix visible-sm visible-xs"></div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i9.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">Телевизор</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i10.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">Карта города</div>
		</div>
	<div class="clearfix visible-xs"></div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i11.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">Настольные игры</div>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/i12.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text">Локеры</div>
		</div>
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
