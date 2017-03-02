<?php

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="lh-blog-content">

			<?php
			while ( have_posts() ) : the_post();
			?>

			

				<img src="<?php the_field('blog_header_image') ?>" >

				<h1 style="text-align:center; padding: 25px;"><?php the_title();  ?></h1>
				<p><?php the_content(); ?></p>
			</div><!--lh-blog-content-->

			<?php 
			endwhile; // End of the loop.
			?>
		</div><!--lh-blog-content-->
		
		<div class="lh-blog-sidebar">
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php

get_footer();

?>
