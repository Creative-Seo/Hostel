<!-- FOOTER -->
<div><img class="house" src="/img/footer-back.png"></div>
<footer class="footer">
  <div class="container"><div class="row">
	<div class="col-xs-6 col-sm-6 col-md-4">
		<ul class="list-unstyled">
<?php foreach($menu as $key => $row) { 
if (($key%3 == 0)&&($key>0)) {echo '</ul></div><div class="col-xs-6 col-sm-6 col-md-4"><ul class="list-unstyled">';} ?>
				<li>
					<a href="<?php echo $row['url']; ?>"><?php echo $row['name']; ?></a>
				</li>
<?php } ?>
		</ul>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-4">
		<ul class="list-unstyled">
			<li class="phone"><?php echo $tel;?></li>
			<li><a class="mail" href="mailto:info@hrapovitsky.ru"><?php echo $email;?></a></li>
		</ul>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-offset-5">
		<div class="share42init"><span id="share42">
		<span class="share42-item" style="display:inline-block;margin:0 6px 6px 0;height:32px;">
			<a rel="nofollow" style="display:inline-block;width:32px;height:32px;margin:0;padding:0;outline:none;background:url(/js/icons.png) -0px 0 no-repeat" href="#" data-count="fb" onclick="window.open('http://www.facebook.com/sharer.php?m2w&amp;s=100&amp;p[url]=http%3A%2F%2Fhostel.dev%2Fapartments%2F&amp;p[title]=%D0%9D%D0%BE%D0%BC%D0%B5%D1%80%D0%B0%20%D0%B2%20%D1%85%D0%BE%D1%81%D1%82%D0%B5%D0%BB%D0%B5%20%D0%B2%D0%BE%20%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80%D0%B5%20-%20%D0%A5%D0%BE%D1%81%D1%82%D0%B5%D0%BB%20%D0%A5%D1%80%D0%B0%D0%BF%D0%BE%D0%B2%D0%B8%D1%86%D0%BA%D0%B8%D0%B9&amp;p[summary]=&amp;p[images][0]=undefined', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0');return false" title="Поделиться в Facebook" target="_blank"></a>
		</span>
		<span class="share42-item" style="display:inline-block;margin:0 6px 6px 0;height:32px;">
			<a rel="nofollow" style="display:inline-block;width:32px;height:32px;margin:0;padding:0;outline:none;background:url(/js/icons.png) -32px 0 no-repeat" href="#" data-count="gplus" onclick="window.open('https://plus.google.com/share?url=http%3A%2F%2Fhostel.dev%2Fapartments%2F', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0');return false" title="Поделиться в Google+" target="_blank"></a>
		</span>
		<span class="share42-item" style="display:inline-block;margin:0 6px 6px 0;height:32px;">
			<a rel="nofollow" style="display:inline-block;width:32px;height:32px;margin:0;padding:0;outline:none;background:url(/js/icons.png) -64px 0 no-repeat" href="#" data-count="twi" onclick="window.open('https://twitter.com/intent/tweet?text=%D0%9D%D0%BE%D0%BC%D0%B5%D1%80%D0%B0%20%D0%B2%20%D1%85%D0%BE%D1%81%D1%82%D0%B5%D0%BB%D0%B5%20%D0%B2%D0%BE%20%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80%D0%B5%20-%20%D0%A5%D0%BE%D1%81%D1%82%D0%B5%D0%BB%20%D0%A5%D1%80%D0%B0%D0%BF%D0%BE%D0%B2%D0%B8%D1%86%D0%BA%D0%B8%D0%B9&amp;url=http%3A%2F%2Fhostel.dev%2Fapartments%2F', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0');return false" title="Добавить в Twitter" target="_blank"></a>
		</span>
		<span class="share42-item" style="display:inline-block;margin:0 6px 6px 0;height:32px;">
			<a rel="nofollow" style="display:inline-block;width:32px;height:32px;margin:0;padding:0;outline:none;background:url(/js/icons.png) -96px 0 no-repeat" href="#" data-count="vk" onclick="window.open('http://vk.com/share.php?url=http%3A%2F%2Fhostel.dev%2Fapartments%2F&amp;title=%D0%9D%D0%BE%D0%BC%D0%B5%D1%80%D0%B0%20%D0%B2%20%D1%85%D0%BE%D1%81%D1%82%D0%B5%D0%BB%D0%B5%20%D0%B2%D0%BE%20%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80%D0%B5%20-%20%D0%A5%D0%BE%D1%81%D1%82%D0%B5%D0%BB%20%D0%A5%D1%80%D0%B0%D0%BF%D0%BE%D0%B2%D0%B8%D1%86%D0%BA%D0%B8%D0%B9&amp;image=undefined&amp;description=', '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=550, height=440, toolbar=0, status=0');return false" title="Поделиться В Контакте" target="_blank"></a>
		</span>
		</span></div>
	</div>
  </div>
  </div>
</footer>
<!-- FOOTER -->

<!-- build:remove -->
<script src="/js/pmsbook.js"></script>
<script src="/libs/jquery/dist/jquery.min.js"></script>
<script src="/libs/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script src="/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/common.js"></script>
<!-- /build -->

<!-- build:template
<script>
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/css/style.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
<script>
var scr = {"scripts":[{"src" : "/js/scripts.min.js", "async" : false}]};
!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
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
