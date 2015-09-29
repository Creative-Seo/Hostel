<?php
include($root."template/blocks/meta.php");
include($root."template/blocks/header.php");?>

<div class="container" itemscope itemtype="http://schema.org/Organization">
	<h1 class="text-center"><?php echo $lang['h1'];?></h1>
	<p class="h4"><a href="<?php echo $url;?>" itemprop="url" style="padding:5px;"><span itemprop="name"><?php echo $name;?></span></a></p>
	<div class="row" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" style="margin-top:15px;">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<p class="pull-left"><i class="fa fa-home fa-2x"></i></p>
		  	<p><span itemprop="postalCode"> <?php echo $postalCode;?></span>,&nbsp;
		  		<span itemprop="addressLocality"><?php echo $addressLocality;?></span>,&nbsp;
    			<span itemprop="streetAddress"><?php echo $streetAddress;?></span></p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<p class="pull-left"><i class="fa fa-phone fa-2x"></i></p>
			<p><a href="tel:<?php echo $tel;?>" itemprop="telephone"><?php echo $tel;?></a></p>
			<p><a href="tel:<?php echo $tel_dop;?>" itemprop="telephone"><?php echo $tel_dop;?></a></p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<p class="pull-left"><i class="fa fa-envelope-o fa-2x"></i></p>
			<p><a href="mailto:<?php echo $email;?>" itemprop="email"><?php echo $email;?></a></p>
		</div>
		<div class="col-xs-12">
			<p class="pull-left"><i class="fa fa-clock-o fa-2x"></i></p>
			<p><?php echo $lang['time1'];?></p>
			<p><?php echo $lang['time2'];?></p>
		</div>
	</div>
</div>
<div class="container">
	<div class="map-yandex">
		  <script type="text/javascript" charset="utf-8" src="<?php echo $lang['map-yandex-1'];?>"></script>
	</div>
	<p class="h2"><?php echo $lang['h2'];?></p>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<p class="h2"><?php echo $lang['h2-0'];?></p>
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