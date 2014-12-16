	</div><!--/content-wrap-->
	
	<div id="footer-top" class="relative">
		
		<div class="separator-footer"></div>
				
		<div class="container">
			<div class="row">			
				<div class="col-sm-3">
					<img src="<?php echo get_theme_mod('footer_logo'); ?>" alt="Footer Logo" />
				</div>			
				<div class="col-sm-9">
					<?php 
						wp_nav_menu( 
							array( 'theme_location' => 'footer-menu', 
								'container_class' => 'footer-top-menu1' 
							) 
						);
					?>					
					<img class="footer-up" src="<?php bloginfo('template_url'); ?>/images/arrowup.png" alt="arrow" />
					<ul class="footer-top-section2">
						<li>
							<img src="<?php bloginfo('template_url'); ?>/images/pin.png" alt="icon"/>
							<?php echo get_theme_mod('footer_location_text'); ?>
						</li>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="icon"/>
							<?php echo get_theme_mod('footer_email_text'); ?>
						</li>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/images/phone.png" alt="icon"/>
							<?php echo get_theme_mod('footer_phone_text'); ?>
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
						<li><a href="<?php echo get_theme_mod('face_link') ?>" target="_blank"><img  src="<?php echo get_theme_mod('footer_social_face'); ?>" alt="img icon face"/></a></li>
						<li><a href="<?php echo get_theme_mod('twitter_link') ?>" target="_blank"><img src="<?php echo get_theme_mod('footer_social_twitter'); ?>" alt="img icon twitter" /></a></li>
						<li><a href="<?php echo get_theme_mod('linkedin_link') ?>" target="_blank"><img src="<?php echo get_theme_mod('footer_social_linked'); ?>"  alt="img icon linked" /></a></li>						
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