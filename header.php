<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<div id="back"></div>
	

		<!-- wrapper -->
		<div class="wrapper">
			<div class="pageContent">


			<header class="header">

		  			 <div class="mainLogo" data-menuanchor="home">
		  			 	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		  			 		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Trade Logo">
		  			 	</a>
		  			 </div>
					<div id="toggle">
						<div id="nav-icon1">
							  <!-- Hamburger Icon -->
							  <span></span>
							  <span></span>
							  <span></span>
							  <!-- /Hamburger Icon -->
						</div>
					</div>
					<div class="menuBox">
					  <ul id="menu" class="nav">
					   
					    
					       <li class="pageFadeOut"><a href="membership">MEMBERSHIP <i class="fas fa-chevron-down"></i></a>
					    	<ul id="ulMembership">
								<li><a href="member-perks">MEMBER PERKS</a></li>
							</ul>
					   </li>
					   
					     <li class="hideSmallScreens"><a href="events">EVENTS</a>
						
					    </li>
					    <li class="hideBigScreens"><a href="events">EVENTS</a></li>
						<li class="hideBigScreens"><a href="private-parties">PARTIES</a></li>
						
					    <li class="hideSmallScreens"><a href="#more">MORE <i class="fas fa-chevron-down"></i></a>
							<ul>
							
					
								<li><a href="partners-charities">PARTNERS & CHARITIES</a></li>
								<li><a href="press">TRADE IN THE PRESS</a></li>
						

							</ul>
					    </li>
				
								

					   
					  </ul>
				  	</div>
			</header>
			<!-- /header -->
