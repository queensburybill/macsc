<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( sprintf('<h2 class="entry-title"><a href="">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
<!-- 		The above line is a more secure way to include a permalink and replaces this line below
		<h2 class="entry-title"<a href=" --- some php code for permalink goes here --- ">< ---some php code to grab the title goes here --- </a></h2> -->
		<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
	</header>

	<div class="row">

		<?php if( has_post_thumbnail() ): ?>

			<div class="col-xs-12 col-sm-4">
				<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
			</div>
			<div class="col-xs-12 col-sm-8">
				<?php the_content(); ?>
			</div>

		<?php else: ?>

			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>

		<?php endif; ?>

	</div> <!-- end row -->

</article>