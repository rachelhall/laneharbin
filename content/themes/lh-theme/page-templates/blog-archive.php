<?php

// Template Name: Blog Archive

get_header(); 

$args = array( 

	'post_type' => 'post'

);

$blog_post = new WP_Query($args);

?>


<div class="lh-blog-container">

	<div class="lh-article-container">
	
			<?php
			if ( $blog_post->have_posts() ) : ?>

				<!-- add wrappers here -->




				<?php
				/* Start the Loop */
				while ( $blog_post->have_posts() ) : $blog_post->the_post(); ?>

				

					<article class="lh-blog-content">

						<!-- // add post markup or templates -->
						<a href="<?php the_permalink() ?>">
							<h1 style="font-size: 24px; text-transform: none;"><?php the_title(); ?></h1>
							<?php the_date(); ?>
							<img src="<?php the_field('blog_header_image') ?>">
						</a>
						
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink() ?>" style="color: #808080; font-weight: 600;">Read More</a>

					</article>
					
					

					
					<?php 	
					endwhile; ?>
			

			<!-- // close wrappers here  -->

		<?php endif; ?>
	</div><!--article-container-->

			<div class="lh-blog-sidebar">
				<!-- 	<img src="<?php the_field('blog_headshot') ?>" style="padding: 50px;"> -->
					<img src="/img/headshot.jpg" style=" border-radius: 50%;">
					<p>Hi, I'm Lane, a writer (and gainfully employed English major) based in Nashville, Tennessee.</p>
					<button>About Me</button>
					
					<div class="social_icons">
						<a href="https://twitter.com/laneharbin"><i class="ion-social-twitter-outline"></i></a>
						<a href="https://www.instagram.com/lane.harbin/"><i class="ion-social-instagram"></i></a>
						<a href="http://www.linkedin.com/in/laneharbin"><i class="ion-social-linkedin"></i>
						<a href="mailto:laneharbin@gmail.com"><i class="ion-ios-email-outline"></i></a>
					</div><!--social icons-->
				</div><!--lh-blog-sidebar-->
</div><!--lh-blog-container-->



<?php

get_footer();
