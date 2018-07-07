	
		</div> <!-- end of container -->

		<div class="container-fluid container-fluid-macsc container-footer">
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-4 footer-left">
							<p><span class="footer-head">PHONE</span><br>518 664 8322</p>
							<p><span class="footer-head">ADDRESS</span><br>PO Box 30<br>6 South Main St<br>Mechanicville, NY 12118</p>
							<p><span class="footer-head">HOURS</span><br>Mon-Fri: &nbsp;9am-5pm<br>Sat &amp; Sun: &nbsp;Closed</p>
						</div>
						<div class="col-md-4 footer-center">
					     	<div class="footer-logo">
				     			<a href="http://localhost:8888/wp-macsc/">
				     				<img src="http://localhost:8888/macsc/wp-content/uploads/2018/07/macsc-logo-2018-white.png">
				     			</a>
				     		</div>
			     			<p>Mechanicville Area Community Services Center</p>
						</div>
						<div class="col-md-4 footer-right">
							<?php wp_nav_menu( array( 'theme_location' => 'secondary' )); ?>
							<p><a class="btn btn-primary btn-donate" href="#">Donate</a></p>
						</div>
					</div> <!-- .row -->
				</div> <!-- .container -->
			</footer>
		</div>

		<?php wp_footer(); ?>

	</body>
</html>