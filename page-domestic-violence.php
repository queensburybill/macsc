<?php 

// Template Name: Page Domestic Violence

get_header(); ?>

	<?php

	// <!-- This is the post loop -->
	if ( have_posts() ):
		while( have_posts() ): the_post(); ?>

			<div class="row mx-0 dv">
					
				<div class="col-xs-12 what-we-do int-content">

					<?php the_content(); ?>

				</div>

				<div class="dv-escape-btn">
					<a href="https://www.google.com/" itemprop="url">EXIT<br>THIS PAGE<br>QUICKLY</p>
				</div>

			</div> <!-- close row -->

		<?php endwhile;
	endif;
	?>	

<?php get_footer(); ?>