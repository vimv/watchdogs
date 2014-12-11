<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title><?php wp_title(); ?></title>				

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
							<img class="top-logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" />
						</div>
					</div>			
				</div>
			</div>
			
			<div id="header-menu" class="container">
				<div class="row header-padding">
					<div class="col-sm-4">						
					</div>
					
					<div class="col-sm-2">
						<ul class="social-h-wrap">
							<li><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" /></li>
							<li><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" /></li>
							<li><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" /></li>
						</ul>
										
					</div>
					
					<div class="col-sm-6">
						<ul class="nav-h-menu">
							<li>
								<a href="#">HOME</a>
							</li>
							<li>
								<a href="#">ABOUT US</a>
							</li>
							<li>
								<a href="#">OUR WORK</a>
							</li>
							<li>
								<a href="#">CONTACT</a>
							</li>
							<li>
								<img src="<?php bloginfo('template_url'); ?>/images/search.png" />
							</li>
						</ul>
						
					</div>
					
				</div>
			</div>	