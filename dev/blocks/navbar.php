<div class="container nav-bar">
	<div class="row">
			<ul>
<?php foreach($menu as $key => $row) { 
if ($key>0) { ?>
				<li class="divid"><span></span></li>
<?php } ?>
				<li>
					<a href="<?php echo $row['url']; ?>"><?php echo $row['name']; ?></a>
				</li>
<?php } ?>
			</ul>
	</div>
</div>