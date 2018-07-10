	
			</div> <!-- .container -->

			<!-- <div class="footer-fix"></div> --> <!-- helps keep footer at bottom -->

		</div> <!-- .body-wrap -->

		<!-- <div class="container-fluid container-fluid-macsc container-footer"> -->
			<footer>
				<div class="signup">
					<div class="container">
						<div class="signup-inner">
							<i class="fa fa-envelope"></i>
							<button href="#" type="input">Sign up for our mailing list!</button>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-4 footer-left">
							<p><span>PHONE</span><br>518 664 8322</p>
							<p><span>ADDRESS</span><br>PO Box 30<br>6 South Main St<br>Mechanicville, NY 12118</p>
							<p><span>HOURS</span><br>Mon-Fri: &nbsp;9am-5pm<br>Sat &amp; Sun: &nbsp;Closed</p>
						</div>
						<hr>
						<div class="col-md-4 footer-center">
					     	<div class="footer-logo">
				     			<a href="http://localhost:8888/wp-macsc/">
				     				<img src="http://localhost:8888/wp-macsc/wp-content/uploads/2018/07/macsc-logo-2018-white.png">
				     			</a>
				     		</div>
			     			<p>Mechanicville Area<br>Community Services Center</p>
						</div>
						<hr>
						<div class="col-md-4 footer-right">
							<?php wp_nav_menu( array( 'theme_location' => 'secondary' )); ?>
							<p><a class="btn btn-secondary btn-donate" href="#">DONATE</a></p>
						</div>
					</div> <!-- .row -->
				</div> <!-- .container -->
			</footer>
		<!-- </div> --> <!-- .container-footer -->

		<?php wp_footer(); ?>

	</body>
</html>