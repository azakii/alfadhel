<?php /* Template name: services */ ?>

<?php
/*
 * Page Template File.
 */
get_header();
?>


		<!-- Start Page Title Area -->
		<div class="page-title-area bg-22">
			<div class="container">
				<div class="page-title-content">
                    <h2><?php the_title(); ?></h2>
                    <?php the_breadcrumb(); ?>
                </div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Services Area -->
		<section class="services-area ptb-100">
			<div class="container">
				<div class="section-title">
					<span>OUR SERVICES</span>
					<h2>Providing quality services</h2>
				</div>

				<div class="row">
                    <?php
                    while ( have_rows('providing_quality_services') ) : the_row();   ?>

					<div class="col-lg-4 col-sm-6">
						<div class="single-services">
							<i class="<?php the_sub_field('services_icon') ?>"></i>
							<h3><?php the_sub_field('services_title') ?></h3>
							<p><?php the_sub_field('services_description') ?></p>
						</div>
					</div>
					<?php  endwhile;  ?>


					<!-- <div class="col-lg-12 col-md-12">
						<div class="pagination-area">
							<a href="#" class="prev page-numbers">
								<i class="bx bx-chevron-left"></i>
							</a>

							<span class="page-numbers current" aria-current="page">1</span>
							<a href="#" class="page-numbers">2</a>
							<a href="#" class="page-numbers">3</a>
							<a href="#" class="page-numbers">4</a>
							
							<a href="#" class="next page-numbers">
								<i class="bx bx-chevron-right"></i>
							</a>
						</div>
					</div> -->
				</div>
			</div>
		</section>
		<!-- End Services Area -->



<?php get_footer(); ?>