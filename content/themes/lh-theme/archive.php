<?php

get_header(); ?>

<div class="lh-sidebar">
	<img src="<?php the_field('about_headshot') ?>" style="padding: 50px;">
	<div><!--lh-sidebar-->

	
		<?php
		if ( have_posts() ) : ?>

			<!-- add wrappers here -->




			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<!-- // add post markup or templates -->
			<img src="<?php the_field('blog_header_image') ?>">
			<p><?php the_excerpt(); ?></p>
			<p><?php the_content(); ?></p>

			
			<?php 	
			endwhile; ?>

			<!-- // close wrappers here  -->

		<?php endif; ?>


<?php
get_sidebar();
get_footer();
