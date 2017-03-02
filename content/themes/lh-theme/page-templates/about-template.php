<?php

// Template Name: About

get_header(); ?>

<div class="lh-about-page">
	<h1><?php the_field('about_greeting') ?></h1>
	<h2 style="text-align: center;"><?php the_field('about_sub_greeting') ?></h2>
	<img src="<?php the_field('about_headshot') ?>" style="padding: 50px;">

	<div class="lh-about-page-content">
	

		<h3><?php the_field('about_body_text') ?></h3>
		<h2><?php the_field('about_sub_heading') ?></h2>
		<h3><?php the_field('about_sub_content') ?></h3>
		<h2><?php the_field('about_sub_heading_2') ?></h2>
		<h3><?php the_field('about_sub_content_2') ?></h3>

	</div><!--lh-about-content-->
</div><!--lh-about_page-->


	
	<!-- markup goes here -->


<?php get_footer(); ?>