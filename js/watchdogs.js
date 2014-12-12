jQuery( function($){
	$('.footer-up').click(function(){
		$('body').animate( {scrollTop:0}, '500' );
	});
	
	$('.nav-h-menu a').click(function(){
		$.scrollTo( this.hash, 500, { easing:'swing' });
		return false;
	});
});