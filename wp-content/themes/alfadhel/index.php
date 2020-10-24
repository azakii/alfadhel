<?php /* Template name: Homepage */ ?>

<?php
/*
 * Page Template File.
 */
get_header('');
// $home_page_id = icl_object_id(5,'page',false,ICL_LANGUAGE_CODE);

?>


		<!-- Stat Hero Slider Area -->
		<div class="hero-slider-area hero-slider-two owl-carousel owl-theme">
		<?php
        while ( have_rows('slider') ) : the_row();   ?>
			<div class="hero-slider-item" style="background-image: url(<?php the_sub_field('slider_img') ?>);">
				<div class="d-table">
					<div class="d-table-cell">
						<div class="container-fluid">
							<div class="hero-slider-content one">
								<img src="<?php the_sub_field('slider_logo') ?>" alt="Image">
								<h1><?php the_sub_field('slider_title') ?></h1>
								<p><?php the_sub_field('slider_summary') ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php  endwhile;  ?>

			<!-- 
			<div class="hero-slider-item bg-4">
				<div class="d-table">
					<div class="d-table-cell">
						<div class="container-fluid">
							<div class="hero-slider-content two">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-slider-img/slider-logo.png" alt="Image">
								<h1>We are providing best construction service</h1>
								<p>We are a construction & infrastructure services company</p>  
							</div>
						</div>
					</div>
				</div>
			</div> -->

		</div>
		<!-- End Hero Slider Area -->

		<!-- Start Features Area -->
		<section class="feathers-area feathers-area-style-two">
			<div class="container">
				<div class="row">

				<?php
        		while ( have_rows('three_block') ) : the_row();   ?>
					<div class="col-lg-4 col-md-6">
						<div class="single-feathers">
							<i class="<?php the_sub_field('icon') ?>"></i>
							<h3><?php the_sub_field('block_title') ?></h3>
							<p><?php the_sub_field('description_block') ?></p>
						</div>
					</div>
					<?php  endwhile;  ?>

					
				</div>
			</div>
		</section>
		<!-- End Features Area -->

		<!-- Start Who We Are Area -->
		<section class="who-we-are-area who-we-are-area-style-two pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="who-we-are-content">
							<span class="top-title">WHO WE AREA</span>
							<?php
        					while ( have_rows('who_we_area') ) : the_row();   ?>
							<div>
								<h2><?php the_sub_field('who_we_are_title') ?></h2>
								<p><?php the_sub_field('who_we_are_description') ?></p>
							</div>
							<?php  endwhile;  ?>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-who-we-are">
						<?php
        					while ( have_rows('vision') ) : the_row();   ?>
							<div>
							<h2><?php the_sub_field('vision_title') ?></h2>
								<p><?php the_sub_field('vision_description') ?></p>
							</div>
						<?php  endwhile;  ?>
						</div>
					
						<div class="single-who-we-are">
						<?php
        					while ( have_rows('mission') ) : the_row();   ?>
							<div>
							<h2><?php the_sub_field('mission_title') ?></h2>
								<p><?php the_sub_field('mission_description') ?></p>
							</div>
						<?php  endwhile;  ?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="who-we-area-img-3">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/who-we-area-img/who-we-area-img-3.jpg" alt="Image">
			</div>
		</section>
		<!-- End Who We Are Area -->
		
		<!-- Start Services Area -->
		<section class="services-area services-area-style-two pt-100 pb-70">
			<div class="container">
				<div class="section-title white-title">
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
				</div>
			</div>

			<div class="services-bg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services-bg.jpg" alt="Image">
			</div>
		</section>
		<!-- End Services Area -->


		
		<!-- Start Testimonials Area -->
		<section class="testimonials-area testimonials-area-style-two ptb-100">
			<div class="container">
				<div class="section-title white-title">
					<span>TESTIMONIALS</span>
					<h2>What our clients say</h2>
				</div>

				<div class="testimonials-all-content">
					<div class="testimonials-slider owl-theme owl-carousel">
					<?php
					while ( have_rows('testimonials') ) : the_row();   ?>
						<div class="row">
							<div class="col-lg-4">
								<img src="<?php the_sub_field('client_photo') ?>" alt="Image">
							</div>
		
							<div class="col-lg-8">
								<div class="testimonials-content">
									<div class="testimonials-name">
										<i class="flaticon-quotation"></i>
										<h3><?php the_sub_field('client_name') ?></h3>
										<span><?php the_sub_field('position') ?></span>
									</div>

									<p>“<?php the_sub_field('description') ?>”</p>
								</div>
							</div>
						</div>
						<?php  endwhile;  ?>
					</div>
				</div>
			</div>

			<div class="testimonials-shape">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials-img/testimonials-shape.jpg" alt="Image">
			</div>
		</section>
		<!-- End Testimonials Area -->

		<!-- Start Our Skills Area -->
		<section class="our-skills-area ptb-100">
			<div class="container">
			<?php
			while ( have_rows('our_skills') ) : the_row();   ?>
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="skills-content">
							<span class="top-title">OUR SKILLS </span>
							<h2><?php the_sub_field('title') ?></h2>
							<p><?php the_sub_field('description') ?></p>
						</div>

					</div>

					<div class="col-lg-6">
						<div class="skill-img">
							<img src="<?php the_sub_field('image') ?>" alt="Image">

							<div class="video-content">
								<a href="<?php the_sub_field('video_link') ?>" class="video-btn popup-youtube">
									<i class="flaticon-play-button"></i>
								</a>
							</div>
						</div>
					</div>
				<?php  endwhile;  ?>
				</div>
			</div>
		</section>
		<!-- End Our Skills Area -->

		
		<!-- Start Partner Area -->
		<div class="subscribe-area ptb-100">
			<div class="container">
				<div class="partner-slider owl-theme owl-carousel">

				<?php
				while ( have_rows('partner') ) : the_row();   ?>
					<div class="partner-item">
						<a href="<?php the_sub_field('partner_link') ?>">
							<img src="<?php the_sub_field('partner_logo') ?>" alt="Image">
						</a>
					</div>
				<?php  endwhile;  ?>

				</div>
			</div>
		</div>
		<!-- End Partner Area -->


<?php get_footer(''); ?>
