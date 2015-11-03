<?php 
include($root."template/blocks/meta.php");
include($root."template/blocks/header.php");
?>

<!-- SLIDER -->
<div class="slider">
	<div class="slider-img"><img src="/image/top.jpg" class="slider-responsive" alt="<?php echo $title;?>"></div>
	<div class="container"><div class="row"><div class="col-xs-10 col-sm-6 col-md-5 col-lg-4 col-xs-offset-1 col-sm-offset-6 col-md-offset-7 col-lg-offset-8"><div class="slider-pms">
<?php include($root."template/blocks/pms.php");?>
	</div></div></div></div>
	<div class="slider-content">
		<div class="slider-board hidden-xs">
			<div class="container"><div class="row">
				<div class="col-sm-6 col-md-7 col-lg-8 hidden-xs">
					<p class="h1"><?php echo $lang['slider-h1_1']; ?></p>
					<p class="h2"><?php echo $lang['slider-h2_1']; ?></p>
				</div>
			</div></div>
		</div>
		<div class="container hidden-xs"><div class="row">
			<div class="col-sm-6 col-md-7 col-lg-8">
					<p class="h2"><?php echo $lang['slider-h2_2']; ?></p>
			</div>
		</div></div>
	</div>
</div>	
<!--<div class="description_icons hidden-sm hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-4"><?php echo $lang['slider-vopros1']; ?></div>
			<div class="col-md-4"><?php echo $lang['slider-vopros2']; ?></div>
			<div class="col-md-4"><?php echo $lang['slider-vopros3']; ?></div>
		</div>
	</div>
</div>-->
<!-- SLIDER -->

<!-- PREMIUM 
<div class="premium">
	<div class="container"><div class="row">
		<div class="col-md-6"><div class="row">
			<div class="col-md-5 "><img class="premium-img" src="/image/block-1.png"></div>
			<div class="col-md-7"><img class="premium-img" src="/image/block-2.png"></div>
		</div></div>
		<div class="col-md-6"><img class="premium-img" src="/image/block-3.png"></div>
		<div class="col-md-6"><div class="row">
			<div class="col-md-7"><img class="premium-img" src="/image/block-4.png"></div>
			<div class="col-md-5"><img class="premium-img" src="/image/block-5.png"></div>
		</div></div>
		<div class="col-md-6"><div class="row">
			<div class="col-md-7"><img class="premium-img" src="/image/block-6.png"></div>
			<div class="col-md-5"><img class="premium-img" src="/image/block-7.png"></div>
		</div></div>
	</div></div>
</div>
 PREMIUM -->

<!-- НОМЕРА -->
<div class="rooms">
<div class="container">
	<h1 itemprop="name" class="text-center"><?php echo $name; ?></h1>
	<meta itemprop="currenciesAccepted" content="RUB" />
	<div class="h2"><?php echo $lang['rooms-h2']; ?></div>
	<p class="center-block rooms-gold"><?php echo $lang['rooms-gold']; ?></p>
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
		<div class="col-sm-6 col-md-4" itemprop="makesOffer" itemscope itemtype="http://schema.org/Offer">
			<a href="<?php echo $lang['rooms-url'],$row['url'];?>"><img itemprop="image" src="/image/nomer-<?php echo $number;?>.jpg" class="img-responsive" alt="<?php echo $row['name'];?>"></a>
			<p class="rooms_number">
				<span itemprop="name">№<?php echo $number;?>&nbsp;&mdash;&nbsp;<?php echo $row['name'];?></span><br>
				<span class="rooms_price"><span itemprop="price"><?php echo $row['cost'];?></span>
				<meta itemprop="priceCurrency" content="RUB" /> <i class="fa fa-rub"></i></span></p>
		</div>
<?php } ?>
	</div>
</div>
</div>
<!-- НОМЕРА -->

<!-- FEATURES -->
<div class="container features">
	<h2><?php echo $lang['features-h2']; ?></h2>
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

<!-- about -->
<div class="container">
	<h2><?php echo $lang['about-h2']; ?></h2>
<?php include("about/content.php"); ?>
</div>
<!-- about -->

<div class="container">
	<div class="map-yandex">
		<script type="text/javascript" charset="utf-8" src="<?php echo $lang['map-yandex']; ?>"></script>
	</div>
</div>

<?php include($root."template/blocks/footer.php"); ?>