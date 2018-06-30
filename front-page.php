<?php get_header(); ?>

	<!-- If you want to insert code from a separate file into this file, check out
	this video at around min. 9 or 10: https://www.youtube.com/watch?v=e8nJMopiH2Q&t=3s -->
	</div>

		
		<!-- BEGIN OWL CAROUSEL2 HTML SETUP -->
		<div class="slider-wrapper cap-container">
			<div class="slider-holder">
				<div class="owl-carousel owl-theme" id="carousel">

					<?php 

					$args = array(
						'type' => 'post',
						'posts_per_page' => -1,
						'post_type' => 'slides'
					);

					$sliders = new WP_Query($args);

					if ( $sliders -> have_posts() ):

						$count = 0;
						$bullets = '';

						while( $sliders -> have_posts() ): $sliders -> the_post(); ?>
							
							<div class="item" style="background-image:url('<?php echo get_field( "image" ); ?>');">
								<div class="cap-text">									
									<h2 class="cap-title"><?php echo get_field( "headline" ); ?></h2>
									<p class="cap-desc"><?php echo get_field( "subhead" ); ?></p>
								</div>
							</div>
							<!-- Indicators -->
							<!-- If you need to troubleshoot the indicators, the Italian guy does his tutorial at around 25:00 at this YouTube URL: https://www.youtube.com/watch?v=0UzwBRLfsbM -->

						<?php $count++; endwhile;

					endif;

					wp_reset_postdata();

					?>

				</div>
			</div>
		</div>

	  <div class="clearfix"></div>
	
	<div class="container">	

		<div class="row">
			
			<div class="col-xs-12">

				<?php the_content(); ?>

			</div>

		</div> <!-- close row -->

	
<?php get_footer(); ?>
