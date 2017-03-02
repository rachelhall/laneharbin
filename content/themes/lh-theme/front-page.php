
<?php
get_header(); 
the_post(); 
the_content(); ?>

	<main>
		<div class="lh-about" id="about">

			<div class="lh-about-content">
				<img src="<?php the_field('headshot'); ?>" style="border-radius: 50%; height: 200px;">
				<div class="lh-about-text">
				<a href="/about"><h1><?php the_field('heading_one'); ?></h1></a>
				<h2><?php the_field('content_one'); ?></h2>
				<button>Contact Me</button>
			</div><!--lh-about-text-->
			</div><!--lh-about-content-->

		</div><!--lh-about-->
		
			<div class="lh-portfolio" style="background-image: url(img/portfolio.jpg);" id="portfolio">
				<h1><?php the_field('heading_two'); ?></h1>
				<div class="lh-portfolio-content">


					<div class="lh-copywriting">
						<h2><?php the_field('sub_heading_one'); ?></h2>
						<h3><?php the_field('sub_content_one'); ?></h3>
					</div><!--lh-copywriting-->


					<div class="lh-content-marketing">
						<h2><?php the_field('sub_heading_two'); ?></h2>
						<h3><?php the_field('sub_content_two'); ?></h3>
					</div><!--lh-content-marketing-->


					<div class="lh-blogs">
						<h2><?php the_field('sub_heading_three'); ?></h2>
						<h3><?php the_field('sub_content_three'); ?></h3>
					</div><!--lh-blogs-->

				</div><!--lh-portfolio-content-->

				<button id="js-slider-btn">See My Work</button>
			</div><!--lh-portfolio-->

			

		<div class="lh-portfolio-slider">
			 






				<div class="js-slider" id="js-slider">

					<div class="lh-close-btn">
						<i class="ion-close-round"></i>	
						<p>close</p>
					</div><!--lh-close-btn-->

					<?php $args = array( 

						'post_type' => 'project'

						);

						$project = new WP_Query($args);

					?>





					<?php
				if ( $project->have_posts() ) : ?>

					<!-- add wrappers here -->




					<?php
					/* Start the Loop */
					while ( $project->have_posts() ) : $project->the_post(); ?>

							<!-- // add post markup or templates -->
							<a href="<?php the_permalink() ?>">
								<div class="lh-thumbnail-container">
									<img src="<?php the_field('article_thumbnail'); ?>" width='250' height='250'/>
									<div class="lh-thumbnail-overlay">
	         							<div class="lh-thumbnail-text"><?php the_title() ?></div>
	       							</div><!--lh-thumbnail-overlay-->
								</div><!--lh-thumbnail-container-->
							</a>
						
						
						<?php 	
						endwhile; ?>
				

				<!-- // close wrappers here  -->

			<?php endif; ?>
				</div><!--js-slider-->

				<script type="text/javascript">


				jQuery( '#js-slider-btn' ).click(function() {
             jQuery( '.lh-portfolio-slider').slideDown('1000');
          });


				</script>

				




		</div><!--lh-portfolio-slider-->	



			<div class="lh-detox">
				<div class="lh-detox-content">
					<h1><?php the_field('heading_three'); ?></h1>
					<h2><?php the_field('content_three'); ?></h2>
				</div><!--lh-detox-content-->


				<!-- Trigger/Open The Modal -->
				<button id="myBtn">Download Now</button>

				<!-- The Modal -->
				<div id="myModal" class="modal">

				  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="close">&times;</span>
				    <h2>Receieve Digital Detox</h2>
				    <?php gravity_form('contact') ?>
				  </div><!--modal-content-->

				</div><!--my-modal-->

				<script type="text/javascript">

						// Get the modal
					var modal = document.getElementById('myModal');

					// Get the button that opens the modal
					var btn = document.getElementById("myBtn");

					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName("close")[0];

					// When the user clicks on the button, open the modal 
					btn.onclick = function() {
					    modal.style.display = "block";
					}

					// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
					    modal.style.display = "none";
					}

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
					    if (event.target == modal) {
					        modal.style.display = "none";
					    }
					}

				</script>

			</div><!--lh-detox-->




			<div class="lh-contact" id="contact" style="background-image: url(img/contact.jpg);">
				<h1>Reach Out</h1>
				<?php gravity_form('contact') ?>






				<!-- <div class="lh-form-row">
					<form>
						<input type="text" name="search" placeholder="Name" />
					</form>

					<form>
						<input type="text" name="search" placeholder="Email" />
					</form>
				</div>	
							
				<form>
					<input type="text" name="search" placeholder="Message" />
				</form>

				<button>Send It</button> -->
			</div><!--contact-->


			
	</main>


<?php get_footer(); ?>