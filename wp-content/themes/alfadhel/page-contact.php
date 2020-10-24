<?php /* Template name: contact */ ?>

<?php
/*
 * Page Template File.
 */
get_header();
?>


		<!-- Start Page Title Area -->
		<div class="page-title-area bg-13">
			<div class="container">
				<div class="page-title-content">
					<h2>Contact us</h2>
					<ul>
						<li>
							<a href="#/">
								Home 
							</a>
						</li>
						
						<li class="active">Contact</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Contact Area -->
		<section class="main-contact-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="contact-wrap ptb-100">
							<div class="contact-form">
								<div class="contact-title">
									<h2>Write us</h2>
								</div>

								<div id="contactForm">
                                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="contact-info ptb-100">
							<h3>Our contact details</h3>
							<p> <?php the_field('our_contact_details') ?></p>                            
							<ul class="address">
								<li class="location">
                                <?php the_field('address') ?>									
								</li>
								<li>
                                <?php the_field('phones') ?>
								</li>
								<li>
                                <?php the_field('email') ?>
								</li>
							</ul>

							<div class="sidebar-follow-us">
								<h3>Follow us:</h3>
			
								<ul class="social-wrap">
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
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Map Area -->
		<div class="map-area">
			<iframe src=" <?php the_field('map') ?>"></iframe>
		</div>
		<!-- End Map Area -->



<?php get_footer(); ?>