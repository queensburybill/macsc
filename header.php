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
	          <div class="col-md-5 company-header">
	            <h6 class="company-name">Mechanicville Area Community Service Center</h6>
	            <div class="header-list-contact">
	              <ul class="header-list-address">
	                <li>
	                  <a href="https://www.google.com/maps/place/Mechanicville+Area+Community+Services/@42.902585,-73.6888737,17z/data=!3m1!4b1!4m5!3m4!1s0x89de17c7bce17ce7:0x953f8c3d9fdb7a3e!8m2!3d42.902585!4d-73.686685?hl=en"
	                  target="_blank" class="header-address">6 South Main St. Mechanicville, NY 12118 | (518) 664-8322</a>
	                </li>
	              </ul>
	            </div>
	          </div>

	          <!--  HEADER MIDDLE  -->
	          <div class="col-md-2">
	          	<div class="header-logo">
		            <a href="#"><img src="http://162.144.28.82/~mechanr4/wp-content/uploads/2018/07/macsc-logo-2018-clr-whitebg.png" alt="macsclogo"></a>
	            </div>
	          </div>

	          <!--HEADER RIGHT SIDE  -->
	          <div class="col-md-5 header-right">
	              <a href="#" class="btn btn-secondary btn-donate">Donate</a>
	              <a href="https://www.facebook.com/MechanicvilleCommunityCenter/" class="header-btn-fb" target="_blank"><i class="fab fa-facebook-square fa-2x" id="glyph"></i></a>

	              <div class="clearfix"></div>

	              <div class="header-hours">
	                <table class="header-table">
	                  <tr><th class="header-non-bold">Mon&nbsp;-&nbsp;Fri&nbsp;:</th><td class="left-align-hours">&nbsp;9am-5pm</td></tr>
	                  <tr><th class="header-non-bold">Sat&nbsp;&amp;&nbsp;Sun&nbsp;:</th><td class="left-align-hours">&nbsp;Closed</td></tr>
	                </table>
	              </div>
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