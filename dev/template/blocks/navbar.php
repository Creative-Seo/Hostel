<div id="cd-main-header" class="cd-main-header">
	<ul class="cd-header-buttons">
		<li><a class="cd-nav-trigger" href="javascript: menu();"><span></span></a></li>
	</ul>
</div>
<main class="cd-main-content"></main>
<div class="cd-overlay"></div>
<!--<div class="container nav-bar">
		<div class="collapse navbar-collapse" id="menu-collapse">
			<ul>-->
<nav class="cd-nav container-fluide">
		<ul id="cd-primary-nav" class="cd-primary-nav nav-is-fixed">
<?php foreach($menu as $key => $row) { 
if ($key>0) { ?>
				<li class="divid hidden-xs hidden-sm"><span></span></li>
<?php } ?>
				<li>
					<a href="<?php echo $row['url']; ?>"><?php echo $row['name']; ?></a>
				</li>
<?php } ?>
		</ul>
</nav>
<!--			</ul>
		</div>
</div>-->