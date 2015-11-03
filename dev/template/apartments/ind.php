<?php
include($root."template/blocks/meta.php");
include($root."template/blocks/header.php");?>

<div class="container">
	<h1><?php echo $lang['h1'];?></h1>

	<p class="center-block rooms-gold"><?php echo $lang['rooms-gold'];?></p>
	<div class="row">
<?php $key=0;
foreach($nomera as $number => $row) {
	if ($key>0) {
		$clearfix='';
		if ($key % 2 == 0) {$clearfix = $clearfix.' visible-sm';}
		if ($key % 3 == 0) {$clearfix = $clearfix.' visible-md visible-lg';}
		if ($clearfix != '') {echo '<div class="clearfix'.$clearfix.'"></div>';}
	}
	$key++; ?>
		<div class="col-sm-6 col-md-4">
			<a href="<?php echo $lang['rooms-url'],$row['url'];?>"><img src="/image/apartments/<?php echo $row['url'];?>glav.jpg" class="img-responsive" alt="<?php echo $row['name'];?>"></a>
			<p class="rooms_number">№<?php echo $number;?>&nbsp;&mdash;&nbsp;<?php echo $row['name'];?> <br> <span class="rooms_price"><?php echo $row['cost'];?> <i class="fa fa-rub"></i></span></p>
		</div>
<?php } ?>
	</div>

</div>

<?php include($root."template/blocks/footer.php"); ?>