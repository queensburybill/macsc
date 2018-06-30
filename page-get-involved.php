<?php 

// Template Name: Page Get Involved

get_header(); ?>

	<?php

	// <!-- This is the post loop -->
	if ( have_posts() ):
		while( have_posts() ): the_post(); ?>

			<div class="row">
					
				<div class="col-xs-12 get-involved int-content">

					<?php the_content(); ?>

				</div>

			</div> <!-- close row -->

		<?php endwhile;
	endif;
	?>	

<?php get_footer(); ?>