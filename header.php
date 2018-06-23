<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MACSC</title>
		<?php wp_head(); ?>
	</head>


	<!-- Use this code if you want to differentiate styles between the front page and the rest of your pages. See Tutorial part 5 @ 14:00. https://www.youtube.com/watch?v=pJ4NTBdvyj4&t=321s  -->
	<?php

		if( is_front_page() ):
			$macsc_classes = array( 'macsc-class', 'my-class' );
		else:
			$macsc_classes = array( 'no-macsc-class' );
		endif;

	?>

	<body <?php body_class( $macsc_classes ); ?>>

		<div class="container-fluid container-fluid-macsc">

<!-- 			Adding a bootstrap menu is covered in the 27th minute of 
				the tutorial: https://www.youtube.com/watch?v=OSYbTkzuyDg&t=4218s -->
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

					<div class="container">

						<a class="navbar-brand" href="#">MACSC</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
							<span class="navbar-toggler-icon"></span>
						</button>
			
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php wp_nav_menu( array( 
								'theme_location'	=> 'primary',
								'menu' 				=> 'Primary Header Navigation',
					            'depth'             => 2,
					            'container'         => 'div',
					            'container_class'   => 'ml-auto',
					            'container_id'      => '',
					            'menu_class'        => 'navbar-nav',
					            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					            'walker'            => new wp_bootstrap_navwalker()
							)); ?>
						</div>

					</div> <!-- end container -->

				</nav>
		</div> <!-- end container-fluid -->

		<div class="container">