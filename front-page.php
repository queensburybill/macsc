<?php get_header(); ?>

	<!-- If you want to insert code from a separate file into this file, check out
	this video at around min. 9 or 10: https://www.youtube.com/watch?v=e8nJMopiH2Q&t=3s -->
	</div>
	<div class="container-fluid container-fluid-macsc">
	
		<div class="row mb-4">
		
			<!-- Bootstrap carousel -->
			<div id="macscCarousel" class="carousel slide" data-ride="carousel">

				<!-- Wrapper for the slides -->
				<div class="carousel-inner">

					<?php 

						// WP_Query
						// In the code in this comment, the maximum number of posts that will show will match the entry in the wp-admin dashboard under Settings>Reading>Blog-pages-show-at-most: __ Posts. If you want to designate a specific number of posts, ie: 5, use 'type=post&posts_per_page-5'. If you use "-1", then the number of posts will be infinite.
						// $sliders = new WP_Query('type=posts');

						// Another format would be...
						$args = array(
							'type' => 'post',
							'posts_per_page' => -1,
							'category_name' => 'slide'
							// 'offset' => 1,   this exludes the first post

							//Used to select only posts with the 'image' post-format
							// 'tax_query' => array(
							// 	array(
							// 		'taxonomy' => 'post_format',
							// 		'field' => 'slug',
							// 		'terms' => 'post-format-image',
							// 	)
							// )
						);
						$sliders = new WP_Query($args);

						if ( $sliders -> have_posts() ):

							$count = 0;
							$bullets = '';

							while( $sliders -> have_posts() ): $sliders -> the_post(); ?>
								
								<div class="carousel-item <?php if($count == 0): echo 'active'; endif; ?>">
									<?php the_post_thumbnail('full'); ?>
									<div class="carousel-caption d-none d-md-block">
										<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
										<p><?php the_content(); ?></p>
									</div>
								</div>

								<?php $bullets .= '<li data-target="#macscCarousel" data-slide-to="'.$count.'" class="'; ?>

                                <?php if($count == 0): $bullets .= 'active'; endif; ?>

								<?php $bullets .=  '"></li>'; ?>

							<?php $count++; endwhile;

						endif;

						wp_reset_postdata();

					?>

					<!-- Indicators -->
					<!-- If you need to troubleshoot the indicators, the Italian guy does his tutorial at around 25:00 at this YouTube URL: https://www.youtube.com/watch?v=0UzwBRLfsbM -->
					<ol class="carousel-indicators">
						<?php echo $bullets; ?>
					</ol>

				</div>
				<!-- Controls -->
				<a class="carousel-control-prev" href="#macscCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#macscCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div> <!-- close carousel -->
				
		</div> <!-- close row -->

	</div>
	
	<div class="container">	

		<div class="row">
			
			<div class="col-xs-12">

				<?php the_content(); ?>

			</div>

		</div> <!-- close row -->

	
<?php get_footer(); ?>
