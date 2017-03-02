<?php

get_header(); the_post(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="lh-project-content">
				<h1><?php the_title();  ?></h1>
				<p><?php the_content(); ?></p>
				 
				<?php if( get_field('articles') ) : ?>
				<div class="lh-url">

					<?php while( have_rows('articles') ): the_row(); ?>
						<a class="lh-portfolio-item" href="<?php the_sub_field('article_url') ?>" ><?php the_sub_field('article_title') ?> </a>
					<?php endwhile; ?>

				</div><!--lh-url-->

				<?php endif; ?>
			</div><!--lh-project-content-->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();