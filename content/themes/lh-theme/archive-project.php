<?php 
	get_header();

	?>


<?php
		if ( have_posts() ) : ?>

			<!-- add wrappers here -->

			<div style="display: flex; justify-content: center; padding: 25px;"><h1>My Portfolio</h1></div>
			<div class="lh-portfolio-container">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<!-- // add post markup or templates -->

			<a href="<?php the_permalink() ?>">
				<div class="lh-thumbnail-container">
	        		<img src="<?php the_field('article_thumbnail') ?>" class="lh-thumbnail">
	        		<div class="lh-thumbnail-overlay">
	         			<div class="lh-thumbnail-text"><?php the_title() ?></div>
	       			</div><!--lh-thumbnail-overlay-->
	    		</div><!--lh-thumbanil-container-->
    		</a>
				
			<?php endwhile; ?>

			<!-- // close wrappers here -->

		</div><!--lh-portfolio-container-->


			<?php 
		endif; ?>






<?php
	get_footer()

?>
