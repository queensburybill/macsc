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

	  <!-- BEGIN: header -->
	  <header>
	    <div class="container-fluid">
	      <div class="row">
			  <!-- *************** HEADER LARGE SCREENS *************** -->
	          <!--HEADER LEFT SIDE  -->
						<div class="col-sm-5 company-header">
              <h6 class="company-name">Mechanicville Area Community Service Center, Inc.</h6>
              <h5 class="company-name-macsc">MACSC</h5>
            </div>

	          <!--  HEADER MIDDLE  -->
	          <div class="col-md-2">
	          	<div class="header-logo">
		            <a href="#"><img src="http://162.144.28.82/~mechanr4/wp-content/uploads/2018/07/macsc-logo-2018-clr-whitebg.png" alt="macsclogo"></a>
	            </div>
	          </div>

	          <!--HEADER RIGHT SIDE  -->
	          <div class="col-md-5 header-right">
	              <!-- <a href="#" class="btn btn-secondary btn-donate">Donate</a> -->
								<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_flow&SESSION=6sXBJIKZkekxXXIPNWjUGQIjvmby3zs7pFXL9vdLD40LpttLS-Sv-4QQecK&dispatch=5885d80a13c0db1f8e263663d3faee8db8175432b4df92754f4b4adb5a123d61&rapidsState=Donation__DonationFlow___StateDonationBilling&rapidsStateSignature=ac88b521ff0a05fc69d256f6657a35b15288a472" target="_blank" class="header-btn-donate">Donate</a>
                <a href="https://www.facebook.com/MechanicvilleCommunityCenter/" target="_blank" class="header-facebook">Facebook</a>
                <a href="https://www.facebook.com/MechanicvilleCommunityCenter/" target="_blank" class="header-btn-fb"><i class="fab fa-facebook-square fa-sm" id="glyph"></i></a>

								<div class="clearfix"></div>

		      </div>
	        <!--END OF HEADER RIGHT SIDE  -->

		      <div class="clearfix"></div>
		    </div> <!-- END: row -->
		</div> <!-- END: container-fluid -->
	  </header>
	  <!-- END: header -->

<!-- ===========================================
                        NAVBAR
     =========================================== -->

<!-- 	Adding a bootstrap menu is covered in the 27th minute of
		the tutorial: https://www.youtube.com/watch?v=OSYbTkzuyDg&t=4218s -->

		<div class="container-fluid-macsc">
				<div class="row">
					<div class="col-xs-12 container nav-container">

						<nav class="navbar navbar-expand-md">

							<div class="company-name-responsive">
								<p>MACSC</p>
							</div>

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
