		<!-- Start Footer Top Area -->
		<footer class="footer-top-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-footer-widget">
							<a href="/">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/white-logo.png" alt="Image">
							</a>

							<p>Leading builder in diverse market segments. The company has earned recognition for undertaking large, complex projects.</p>

							<ul class="social-icon">
							<?php
							while ( have_rows('social_media_links', options) ) : the_row();   ?>
								<li>
									<a href="<?php the_sub_field('link') ?>">
										<i class="bx bxl-<?php the_sub_field('icon') ?>"></i>
									</a>
								</li>
							<?php  endwhile;  ?>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-footer-widget">
							<h3>Contact us</h3>
							<?php the_field('contact_us', options) ?>

						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-footer-widget">
							<h3>Business hours</h3>
							<p>We support our clients 24 hours a day. Our office is open at times.</p>
							<?php the_field('business_hours', options) ?>
							
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Top Area -->

		<!-- Start Footer Bottom Area -->
		<footer class="footer-bottom-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12 text-center">
						<p>Copyright @2020 alfadhel. Designed By <a href="http://webdashsolutions.com/" target="blank">Web dashsolutions</a></p>
					</div>

				</div>
			</div>
		</footer>
		<!-- End Footer Bottom Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
		<!-- End Go Top Area -->
		

        <!-- Jquery-3.5.1.Slim.Min.JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.slim.min.js"></script>
        <!-- Popper JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.meanmenu.js"></script>
        <!-- Wow JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
        <!-- Owl Magnific JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.nice-select.min.js"></script>
		<!-- Parallax JS --> 
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/parallax.min.js"></script>        <!-- Custom JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
    </body>

</html>



<?php the_field('qplast_info', 'option') ?>
