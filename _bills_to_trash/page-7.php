<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">
		<?php
		if ( have_posts() ):
			while( have_posts() ): the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
				<hr>
			<?php endwhile;
		endif;
		?>
	</div>

	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>

</div> <!-- close row -->

<?php get_footer(); ?>


<!-- =================================================================================
      Here's some stuff I deleted from content.php but looks pretty helpful/important
     ================================================================================= -->

		<?php the_title( sprintf('<h2 class="entry-title"><a href="">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
<!-- 		The above line is a more secure way to include a permalink and replaces this line below
		<h2 class="entry-title"<a href=" --- some php code for permalink goes here --- ">< ---some php code to grab the title goes here --- </a></h2> -->