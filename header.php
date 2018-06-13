<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MACSC</title>
		<?php wp_head(); ?>
	</head>

	<?php

		if( is_front_page() ):
			$macsc_classes = array( 'macsc-class', 'my-class' );
		else:
			$macsc_classes = array( 'no-macsc-class' );
		endif;

	?>

	<body <?php body_class( $macsc_classes ); ?>>

		<div class="container-fluid container-fluid-macsc">

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

		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />