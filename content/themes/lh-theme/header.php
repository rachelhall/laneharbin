<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display|Varela+Round" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="/content/themes/lh-theme/public/css/slick.css"/>






<!-- 
<?php gravity_form_enqueue_scripts(); ?> -->

<?php wp_head(); ?>
</head>
<?php $file_path = get_template_directory_uri(); ?>
<body <?php body_class(); ?>>

	<header style="background-image: url(<?php the_field('hero_image'); ?>);" id="home">
		
		<nav>
			<div class="lh-master-nav-container">

				<div class="mobile-nav-container">
					<div class="lh-mobile-toggle">
						<i class="ion-navicon-round"></i>
					</div><!--lh-mobile-toggle-->
				<div class="lh-header-logo">
					<img src="<?php echo $file_path ?>/img/logo.gif" style="width: 300px; height: auto;">
				</div><!--lh-header-logo-->
			</div><!--mobile-nav-container-->
				<div class="lh-nav-container">



					<?php

					if ( is_front_page() ) {
						wp_nav_menu( array(
						'menu'	=>	'home-nav'
					));
					}

					else {
						wp_nav_menu( array(
						'menu'	=>	'interior-nav'
					));
					}

					 ?>

					</div><!--lh-nav-container-->
			</div><!--lh-master-nav-container-->		
			
		</nav>
		<div class="lh-hero-content">
			<h1><?php the_field('greeting'); ?></h1>
		</div><!--lh-hero-content-->
	</header>
