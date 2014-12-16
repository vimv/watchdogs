<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title><?php bloginfo('name'); ?></title>				

    	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->							
		
		<?php wp_head(); ?>			
		
		<script>var homeurl = "<?php bloginfo('home'); ?>";</script>		
	</head>

	<body>	
		<div id="content-wrap">
			<div class="top-nav">
				<div class="container">
					<div class="row">
						<div class="logo relative">
							<img class="top-logo" src="<?php echo get_theme_mod('header_logo') ?>"  alt="Header Logo" />
						</div>
					</div>			
				</div>
			</div>
			
			<div id="header-menu" class="container">
				<div class="row header-padding">
					<div class="col-sm-3">						
					</div>
					
					<div class="col-sm-3 col-md-2">
						<ul class="social-h-wrap">
							<li><a href="<?php echo get_theme_mod('face_link') ?>" target="_blank"><img src="<?php echo get_theme_mod('header_social_face') ?>" alt="icon" /></a></li>
							<li><a href="<?php echo get_theme_mod('twitter_link') ?>" target="_blank"><img src="<?php echo get_theme_mod('header_social_twitter') ?>" alt="icon" /></a></li>
							<li><a href="<?php echo get_theme_mod('linkedin_link') ?>" target="_blank"><img src="<?php echo get_theme_mod('header_social_linked') ?>" alt="icon "/></a></li>
						</ul>
										
					</div>
					<div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
					<div class="col-sm-6 col-md-7">
					<nav class="navbar" role="navigation">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav nav-h-menu">
								<li>
									<a href="#slider">HOME</a>
								</li>
								<?php 
									query_posts(array(
										'posts_per_page' => -1,
										'meta_key' => 'weight',
										'orderby' => 'meta_value',
										'order' => 'ASC'
									));
								?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<?php $image = (has_post_thumbnail( get_the_ID() )) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ) : ''?>
									<?php $menu_id = str_replace('-', '_', sanitize_title(get_the_title())) . '_link';?>
									<li>
										<a href="<?php echo '#' . $menu_id; ?>"><?php echo get_theme_mod($menu_id); ?></a>
									</li>
									<?php $i++;?>
								<?php endwhile; endif; ?>
								<li>
									<img src="<?php bloginfo('template_url'); ?>/images/search.png" alt="icon" />
								</li>
							</ul>
						</div>
						
					</nav>
				</div>
			</div>
		</div>		