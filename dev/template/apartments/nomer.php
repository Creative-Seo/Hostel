<?php 
$dir_img= 'image'.$dir;
include($root."template/blocks/meta.php");
include($root."template/blocks/header.php");?>

<!-- SLIDER -->
<div class="slider">
	<div class="slider-img"><img src="<?php echo '/',$dir_img;?>glav.jpg" class="slider-responsive" alt="<?php echo $nomera[$id]['name'];?>"></div>
	<div class="container"><div class="row"><div class="col-xs-10 col-sm-5 col-md-4 col-lg-4 col-xs-offset-1 col-sm-offset-7 col-md-offset-8"><div class="slider-pms">
<?php include($root."template/blocks/pms.php");?>
	</div></div></div></div>
	<div class="slider-content">
		<div class="slider-board hidden-xs">
			<div class="container"><div class="row">
				<div class="col-sm-7 col-md-8 col-lg-8 hidden-xs">
					<p class="h1"><?php echo $nomera[$id]['name'];?></p>
					<p class="h2"><b><?php echo $nomera[$id]['cost'];?></b><?php echo $lang['slider-cost'];?></p>
				</div>
			</div></div>
		</div>
		<div class="container hidden-xs"><div class="row">
			<div class="col-sm-7 col-md-8 col-lg-8">
				<p class="h2"><?php echo $lang['slider-h2'];?></p>
			</div>
		</div></div>
	</div>
</div>
<!-- SLIDER -->

	<ul class="list-inline text-center">
<?php 
$images = scandir($root.$dir_img);
if (false !== $images) {
    $imgarray = preg_grep('/\\.(?:jpe?g)$/', $images);
	foreach($imgarray as $row) { ?>  
		<li class="nomer-image">
			<a href="<?php echo '/',$dir_img,htmlspecialchars(urlencode($row));?>" class="fancybox-thumb" rel="group" title="<?php echo $nomera[$id]['name'];?>">
				<img height="100px" src="<?php echo '/',$dir_img,htmlspecialchars(urlencode($row));?>" alt="<?php echo $nomera[$id]['name'];?>">
			</a>
		</li>
<?php }} ?>
	</ul>

<!-- НОМЕРА -->
<div class="container">
<?php include("content.php"); ?>
</div>
<!-- НОМЕРА -->

<!-- FEATURES -->
<div class="container features">
	<h2><?php echo $lang['features-h2'];?></h2>
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
			<div class="features_icon">
				<?php if (strpos($num,'none') === false) { ?><img src="/img/<?php echo $num;?>.png" alt="" class="img-responsive center-block"><?php } ?>
			</div>
			<div class="features_text"><?php echo $row;?></div>
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
			<script type="text/javascript" charset="utf-8" src="<?php echo $lang['map-yandex'];?>"></script>
		</div>
	</div>
</div> -->
<!-- MAP -->

<?php include($root."template/blocks/footer.php"); ?>