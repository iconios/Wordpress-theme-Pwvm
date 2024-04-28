<!DOCTYPE php>
<php lang="en">
  <head>
  	<!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pwv Management Services | <?php wp_title(); ?></title>
	<link rel='shortcut icon' href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" type='image/x-icon'/>
    
	<?php wp_head(); ?>
	
  </head>
  <body <?php body_class(); ?>>
		
		<!-- HEADER
		=========================================================================== -->
		
    <div class="container">
    	<div id="contact-info-bar" class="well well-sm">
    		<img class="location-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Location%20Icon.jpg" alt="location-icon" data-toggle="tooltip" title="Primewaterview Gardens 1, Off Itedo Rd., Ikate Roundabout, Lekki, Lagos, Nigeria">
        	<span class="hidden-xs" id="location-address">&ensp; Primewaterview Gardens 1, Off Itedo Rd., Ikate Roundabout, Lekki, Lagos, Nigeria
        	</span>
			
			<?php  
				$args = array(
					'post_type' => 'socialmedium',
					'posts_per_page' => 1
				);
				$social_query = new WP_Query( $args );
				
				if(have_posts()) : while($social_query->have_posts()) : $social_query->the_post();
			?>
			
			<span id="locate-on-map"><a href="<?php echo get_field('google_maps_location'); ?>" target="_blank"><span class="glyphicon glyphicon-screenshot" data-toggle="tooltip" title="Locate Us on Google Maps"></span><span class="hidden-xs">&ensp;Locate Us on Google Maps</span></a>
			</span>
			<span><a href="<?php echo get_field('linkedin_account'); ?>" target="_blank"><i id="linkedin-icon" class="fa fa-linkedin-square fa-lg smedia" aria-hidden="true"></i></a>
			</span>
			<span><a href="<?php echo get_field('twitter_account'); ?>" target="_blank"><i id="twitter-icon" class="fa fa-twitter-square fa-lg smedia" aria-hidden="true"></i></a>
			</span>
			<span><a href="<?php echo get_field('facebook_account'); ?>" target="_blank"><i id="facebook-icon" class="fa fa-facebook-square fa-lg smedia" aria-hidden="true"></i></a>
			</span>
			
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
			
		</div>
		<div id="head-panel">
			<a href="<?php bloginfo('url'); ?>"><img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg" alt="logo"></a>
			<div class="tel-nos">
				<p><span class="glyphicon glyphicon-earphone" data-toggle="tooltip" title="+234-01-212-1717"></span><span class="hidden-xs">&ensp;+234-01-212-1717</span></p>
				<p><span class="glyphicon glyphicon-earphone" data-toggle="tooltip" title="+234-01-212-1139"></span><span class="hidden-xs">&ensp;+234-01-212-1139</span></p>
				<p><span class="glyphicon glyphicon-envelope" data-toggle="tooltip" title="info@pwvm-services.com"></span><span class="hidden-xs">&ensp;info@pwvm-services.com</span></p>
			</div>
		</div>
	</div>
		
		<!-- NAVBAR
		=========================================================================== -->
		
	<div class="navbar-wrapper">
		<div class="container" id="navi-head">
			<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="217">
				<div class="container">
					<div class="navbar-header" data-toggle="tooltip"  title="Click hamburger to view menu items">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<p class="navbar-brand visible-xs">MENUBAR:</p> 
					</div>
					
					<?php
						wp_nav_menu(
							array(
							'menu'				=>	'primary-menu',
							'theme_location'	=>	'primary-menu',
							'depth'				=>	2,
							'container'			=>	'div',
							'container_class'	=>	'navbar-collapse collapse',
							'container_id'		=>	'navbar',
							'menu_class'		=>	'nav nav-tabs nav-justified',
							'fallback_cb'		=>	'WP_Bootstrap_Navwalker::fallback',
							'walker'			=> 	new WP_Bootstrap_Navwalker()
							)
						);				
					?>
										
					
				</div>
			</nav>
		</div> 
    </div>