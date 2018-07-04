<?php 

// Template Name: Page Who We Are

get_header(); ?>

	<?php

	// <!-- This is the post loop -->
	if ( have_posts() ):
		while( have_posts() ): the_post(); ?>

			<div class="row mx-0">

				<br>
					
				<div class="col-xs-12 who-we-are int-content">

					<?php the_content(); ?>

				</div>

			</div> <!-- close row -->

		<?php endwhile;
	endif;
	?>	

<?php get_footer(); ?>