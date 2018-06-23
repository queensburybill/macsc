
<!-- =============================================================
       This file represents the theme's "Standard" post  format
     ============================================================= -->

<!-- This article code sets the article ID to the same ID as the post ID 
	and also gives the article the same classes as the post type-->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row my-4">

		<?php if( has_post_thumbnail() ): ?>

			<div class="col-xs-12 col-sm-4 col-md-3 col-xl-2">
				<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-9 col-xl-10">
				<?php the_title(); ?>
				<?php the_content(); ?>
			</div>

		<?php else: ?>

			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>

		<?php endif; ?>

	</div> <!-- end row -->

</article>

