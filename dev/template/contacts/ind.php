<?php
include($root."template/blocks/meta.php");
include($root."template/blocks/header.php");?>

<div class="container">
	<h1 class="text-center"><?php echo $lang['h1'];?></h1>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<p class="pull-left"><i class="fa fa-home fa-2x"></i></p>
		  	<p><?php echo $address;?></p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<p class="pull-left"><i class="fa fa-phone fa-2x"></i></p>
			<p><a href="tel:tel@8(4922) 30-41-65"><?php echo $tel;?></a></p>
			<p><a href="tel:8(4922) 30-41-65"><?php echo $tel_dop;?></a></p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<p class="pull-left"><i class="fa fa-envelope-o fa-2x"></i></p>
			<p><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></p>
		</div>
	</div>
	<p class="pull-left"><i class="fa fa-clock-o fa-2x"></i></p>
	<p><?php echo $lang['time1'];?></p>
	<p><?php echo $lang['time2'];?></p>
	<div class="map-yandex">
		  <script type="text/javascript" charset="utf-8" src="<?php echo $lang['map-yandex-1'];?>"></script>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="map-yandex">
				<script type="text/javascript" charset="utf-8" src="<?php echo $lang['map-yandex-2'];?>"></script>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<p class="h2"><?php echo $lang['h2-1'];?></p>
			<p><?php echo $lang['p-1'];?></p>
			<br>
			<p class="h2"><?php echo $lang['h2-2'];?></p>
			<p><?php echo $lang['p-2'];?></p>
		</div>
	</div>
</div>

<?php include($root."template/blocks/footer.php"); ?>