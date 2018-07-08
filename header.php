<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
		<title>MACSC</title>
		<?php wp_head(); ?>
	</head>


	<!-- IF you want to differentiate styles in the body on different pages, see Tutorial part 4 @ 14:00 to create custom body classes. https://www.youtube.com/watch?v=pJ4NTBdvyj4&t=321s  -->

	<body>
	<div class="body-wrap"> <!-- This wrapper helps to keep the footer at the bottom of the page -->
<!-- ===========================================
                        HEADER
     =========================================== -->
	     <div class="header">
	     	<div class="logo">
     			<a href="http://localhost:8888/wp-macsc/">
     				<img src="http://localhost:8888/wp-macsc/wp-content/uploads/2018/07/macsc-logo-2018-clr-whitebg.png">
     			</a>
     		</div>
     	</div>

<!-- ===========================================
                        NAVBAR
     =========================================== -->

<!-- 	Adding a bootstrap menu is covered in the 27th minute of 
		the tutorial: https://www.youtube.com/watch?v=OSYbTkzuyDg&t=4218s -->

		<div class="container-fluid-macsc">
				<div class="row">
					<div class="col-xs-12 container nav-container">

						<nav class="navbar navbar-expand-md">

							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-nav">
								<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
							</button>
				
							<!-- See the Walker Class tutorial here: https://www.youtube.com/watch?v=ArEmwJV6M7s -->
								<?php wp_nav_menu( array( 
									'theme_location'	=> 'primary',
									'menu' 				=> 'Primary Header Navigation',
						            'depth'             => 2,
						            'container'         => 'div',
						            'container_class'   => 'collapse navbar-collapse',
						            'container_id'      => 'primary-nav',
						            'menu_class'        => 'navbar-nav mx-auto',
						            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						            'walker'            => new wp_bootstrap_navwalker()
								)); ?>

						</nav> <!-- end nav -->

					</div> <!-- end col -->
				</div> <!-- end row -->
		</div> <!-- end container -->

		<div class="nav-rule"></div>

		<div class="container">