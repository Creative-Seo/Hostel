<?php $root='../';
include("var.php");
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="container">
	<h1><?php echo $title?></h1>

	<p class="center-block rooms-gold">Бронируя номер в нашем хостеле, Вы получаете не только комфортное проживание, но и ряд приятных бонусов!</p>
	<div class="row">
<?php $key=0;
foreach($nomera as $key => $row) {
	if ($key>0) {
		$clearfix='';
		if ($key % 2 == 0) {$clearfix = $clearfix.' visible-sm';}
		if ($key % 3 == 0) {$clearfix = $clearfix.' visible-md visible-lg';}
		if ($clearfix != '') {echo '<div class="clearfix'.$clearfix.'"></div>';}
	}
	$key++; ?>
		<div class="col-sm-6 col-md-4">
			<a href="/apartments/<?php echo $row['url'];?>"><img src="/apartments/<?php echo $row['url'];?>img/glav.jpg" class="img-responsive" alt="<?php echo $row['name'];?>"></a>
			<p class="rooms_number">№ <?php echo $row['id'];?> - <?php echo $row['name'];?> <br> <span class="rooms_price"><?php echo $row['cost'];?> <i class="fa fa-rub"></i></span></p>
		</div>
<?php } ?>
	</div>

</div>

<?php include($root."blocks/footer.php"); ?>