<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if( has_post_thumbnail() ): ?>

			<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>

	<?php endif; ?>

	<?php the_title( sprintf('<h2 class="entry-title"><a href="">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
<!-- 		The above line is a more secure way to include a permalink and replaces this line below
		<h2 class="entry-title"<a href=" --- some php code for permalink goes here --- ">< ---some php code to grab the title goes here --- </a></h2> -->

</article>