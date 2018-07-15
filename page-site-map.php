
<?php 

// Template Name: Page Site Map

get_header(); ?>

	<?php

	// <!-- This is the post loop -->
	if ( have_posts() ):
		while( have_posts() ): the_post(); ?>

			<div class="row mx-0">
					
				<div class="col-xs-12 who-we-are int-content">

					<?php the_content(); ?>

					<h6>Who We Are</h6>
					<?php wp_nav_menu( array( 'theme_location' => 'site-map-who-we-are' )); ?>

					<h6>What We Do</h6>
					<?php wp_nav_menu( array( 'theme_location' => 'site-map-what-we-do' )); ?>

					<h6>Get Help</h6>
					<?php wp_nav_menu( array( 'theme_location' => 'site-map-get-help' )); ?>

					<h6>Get Involved</h6>
					<?php wp_nav_menu( array( 'theme_location' => 'site-map-get-involved' )); ?>

					<h6>Other Pages</h6>
					<?php wp_nav_menu( array( 'theme_location' => 'site-map-uncategorized' )); ?>

				</div>

			</div> <!-- close row -->

		<?php endwhile;
	endif;
	?>	

<?php get_footer(); ?>

