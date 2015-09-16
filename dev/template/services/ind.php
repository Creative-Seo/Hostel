<?php 
include($root."template/blocks/meta.php");
include($root."template/blocks/header.php");?>

<div class="container">
	<h1><?php echo $lang['h1'];?></h1>

	<h2><?php echo $lang['h2'];?></h2>
	<div class="row">
<?php 
$key = 0;
foreach($inclusive as $num => $row) {
	if ($key>0) {
		$clearfix='';
		if ($key % 2 == 0) {$clearfix = $clearfix.' visible-xs';}
		if ($key % 4 == 0) {$clearfix = $clearfix.' visible-sm';}
		if ($key % 6 == 0) {$clearfix = $clearfix.' visible-md visible-lg';}
		if ($clearfix != '') {echo '<div class="clearfix'.$clearfix.'"></div>';}
	} 
	$key++; ?>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<div class="features_icon"><img src="/img/<?php echo $num;?>.png" alt="" class="img-responsive center-block"></div>
			<div class="features_text"><?php echo $row;?></div>
		</div>
<?php } ?>
	</div>

</div>

<?php include($root."template/blocks/footer.php"); ?>