<!-- FOOTER -->
<footer class="footer">
  <div class="container">
	<ul class="list-unstyled">
<?php foreach($menu as $key => $row) { 
if ($key>0) { ?>
				<li class="divid"><span></span></li>
<?php } ?>
				<li>
					<a href="<?php echo $row['url']; ?>"><?php echo $row['name']; ?></a>
				</li>
<?php } ?>
	</ul>
	<!-- <div class="row">
			<div class="col-md-3">
				<div class="footer_logo">Храповицкий<br><span>хостел</span></div>
			</div>
			<div class="col-md-3">
				<ul>
					<li><a href="">Как найти</a></li>
					<li><a href="">Как найти</a></li>
					<li><a href="">Как найти</a></li>
					<li><a href="">Как найти</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul>
					<li><a href="">Как найти</a></li>
					<li><a href="">Как найти</a></li>
					<li><a href="">Как найти</a></li>
					<li><a href="">Как найти</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul>
					<li><a href="">Как найти</a></li>
					<li><a href="">Как найти</a></li>
					<li><a href="">Как найти</a></li>
					<li><a href="">Как найти</a></li>
				</ul>
			</div>
		
	</div> -->
  </div>
</footer>

<!-- FOOTER -->

<!-- build:remove -->
<script src="libs/jquery/dist/jquery.min.js"></script>
<script src="libs/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<!-- /build -->

<!-- build:template
<script>
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/css/style.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
	
<script>
var scr = {"scripts":[
	{"src" : "/js/scripts.min.js", "async" : false}
	]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>

/build -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="/js/bootstrap.min.js"></script>-->
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</body>
</html>
