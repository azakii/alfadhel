<?php /* Template name: About */ ?>

<?php
/*
 * Page Template File.
 */
get_header();
?>


		<!-- Start Page Title Area -->
		<div class="page-title-area bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2><?php the_title(); ?></h2>
					<?php the_breadcrumb(); ?>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Who We Are Area -->
		<section class="who-we-are-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="who-we-are-img">
                        <?php
                        while ( have_rows('images_and_video') ) : the_row();   ?>
							<img src="<?php the_sub_field('image1') ?>" alt="Image">

							<div class="who-we-are-img-2">
								<img src="<?php the_sub_field('image2') ?>" alt="Image">
							</div>

							<a href="<?php the_sub_field('video_link') ?>" class="video-button popup-youtube">
								<i class="flaticon-play-button"></i>
								<p>See the video</p>
							</a>
                        <?php  endwhile;  ?>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="who-we-are-content">
							<span class="top-title">WHO WE AREA</span>
                            <?php
				            while ( have_rows('who_we_area') ) : the_row();   ?>
                            <div>
                                <h2><?php the_sub_field('who_we_are_title') ?></h2>
								<p><?php the_sub_field('who_we_are_description') ?></p>
                            </div>
                            <?php  endwhile;  ?>
							<div class="row">
                            
                            <?php
				            while ( have_rows('two_blocks') ) : the_row();   ?>
								<div class="col-lg-6 col-sm-6">
									<div class="single-who-we-are">
										<i class="<?php the_sub_field('icon') ?>"></i>
										<h3><?php the_sub_field('title') ?></h3>
										<p><?php the_sub_field('description') ?></p>
									</div>
								</div>
                                <?php  endwhile;  ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Who We Are Area -->

		<!-- Start Features Area -->
		<section class="feathers-area pt-100 pb-70">
			<div class="container">
				<div class="row">
                <?php
                while ( have_rows('three_blocks') ) : the_row();   ?>
					<div class="col-lg-4 col-sm-6">
						<div class="single-feathers">
							<i class="<?php the_sub_field('icon') ?>"></i>
							<h3><?php the_sub_field('title') ?></h3>
							<p><?php the_sub_field('description') ?></p>
						</div>
					</div>
                    <?php  endwhile;  ?>
				</div>
			</div>
		</section>
		<!-- End Features Area -->


<?php get_footer(); ?>