$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		showNavArrows : 'true',
		helpers	: {
			title	: {type: 'outside'},
			thumbs	: {width: 50,height: 50}
		}
	});
	
	$('#collapsing').click(function(){
		$($(this).attr('data-target')).collapse('toggle');
	});
});