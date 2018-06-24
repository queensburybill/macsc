<?php get_header(); ?>

	<!-- This is the default wordpress page (which is the posts page) -->
	<?php

	// <!-- This is the post loop -->
	if ( have_posts() ):
		while( have_posts() ): the_post(); ?>

<!-- 		This code inserts the code from content.php if the post format
			is "standard" or otherwise inserts code from the appropriate file.
			For example, if get_post_format() returns 'image', then Wordpress will
			grab the code from the content-image.php file -->
			<?php get_template_part('content', get_post_format()); ?>

		<?php endwhile;
	endif;
	?>	
	
<?php get_footer(); ?>
