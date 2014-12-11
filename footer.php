	</div><!--/content-wrap-->
	
	<div id="footer-top" class="relative">
		
		<div class="separator-footer"></div>
				
		<div class="container">
			<div class="row">			
				<div class="col-sm-3">
					<img src="<?php echo get_theme_mod('footer_logo') ?>" />
				</div>			
				<div class="col-sm-9">					
					<ul class="footer-top-menu1">
						<li><a href="#">MAIN</a></li>
						<li><a href="#">NAVIGATION</a></li>
						<li><a href="#">SECTIONS</a></li>
						<li><a href="#">IN A STICK</a></li>
						<li><a href="#">MENU</a></li>
					</ul>
					<img class="footer-up" src="<?php bloginfo('template_url'); ?>/images/arrowup.png" />
					<ul class="footer-top-section2">
						<li>
							<img src="<?php bloginfo('template_url'); ?>/images/pin.png" />
							9891 MONTGOMERY ROAD #203 
							<br/> CINCINNATI, OH 45242
						</li>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/images/email.png" />
							info@watchdogevents.com
						</li>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/images/phone.png" />
							513 297 2834
						</li>						
					</ul>
				</div>
			</div>		
		</div>
	</div>
	
	<div id="footer-bottom">
		<div class="container">
			<div class="row">			
				<div class="col-sm-4"></div>			
				<div class="col-sm-4">					
					<ul class="footer-bottom-social">
						<li><a href="<?php echo get_theme_mod('face_link') ?>" target="_blank"><img src="<?php echo get_theme_mod('footer_social_face') ?>" /></a></li>
						<li><a href="<?php echo get_theme_mod('twitter_link') ?>" target="_blank"><img src="<?php echo get_theme_mod('footer_social_twitter') ?>" /></a></li>
						<li><a href="<?php echo get_theme_mod('linkedin_link') ?>" target="_blank"><img src="<?php echo get_theme_mod('footer_social_linked') ?>" /></a></li>						
					</ul>					
					<ul class="footer-bot-menu-priv">
						<li>
							&copy; 2014 
						</li>
						<li>
						|
						</li>
						<li>
							<a href="#">PRIVACY POLICY.</a>Site by Sideways8
						</li>										
					</ul>
				</div>
				<div class="col-sm-4"></div>	
			</div>		
		</div>
	</div>
						
	<?php wp_footer(); ?>
	</body>
</html>