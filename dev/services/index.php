<?php $root='../';
include("var.php");
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="container">
	<h1><?php echo $title?></h1>

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

<?php include($root."blocks/footer.php"); ?>