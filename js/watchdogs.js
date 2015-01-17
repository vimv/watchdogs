jQuery( function($){
	$('.footer-up').click(function(){
		$('body').animate( {scrollTop:0}, '500' );
	});
	
	$('.nav-h-menu a').click(function(){
		$.scrollTo( this.hash, 500, { easing:'swing' });
		return false;
	});
	
	// Hack to match height in tab section, since plugin didn't work
	var heights = []
	jQuery('.tab-pane').each(function(k, v){
	  jQuery(v).css('visibility', 'visible')
	  jQuery(v).css('visibility', '')
	  heights.push(jQuery(v).height());
	});
	height = Math.max.apply(Math, heights);
	jQuery('.tab-pane').css({'height':height, 'margin-bottom':'50px'});
});