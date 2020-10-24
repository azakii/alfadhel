<!doctype html>
<html lang="zxx">
    
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<?php wp_head(); ?>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
		<!-- Title -->
		<title><?php bloginfo('title'); ?></title>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="loader-wrapper">
			<div class="loader">
				<div class="dot-wrap">
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
				</div>
			</div>
		</div>
		<!-- End Preloader Area -->
		
		<!-- Start Header Area -->
		<header class="header-area">
			<!-- Start Top Header -->
			<div class="top-header top-header-style-two">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-8 col-sm-8 pl-0">
							<ul class="header-left-content">
								<li>
									<i class="flaticon-phone-ringing"></i>
									<a href="tel:<?php the_field('telephone_no', options) ?>"><?php the_field('telephone_no', options) ?></a>
								</li>
								<li>
									<i class="flaticon-email"></i>
									<a href="mailto:<?php the_field('email_address', options) ?>"><?php the_field('email_address', options) ?></a>
								</li>
							</ul>
						</div>
	
						<div class="col-lg-4 col-sm-4 pr-0">
							<ul class="header-right-content">
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
			<!-- Start Top Header -->
			
			<!-- Start Nav Area -->
			<div class="navbar-area navbar-area-style-two">
				<div class="mobile-nav">
					<div class="container-fluid">
						<a href="#/" class="logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
						</a>
					</div>
				</div>

				<div class="main-nav">
					<div class="container-fluid">
						<nav class="navbar navbar-expand-md">
							<a class="navbar-brand" href="#/">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-2.jpg" alt="Logo">
							</a>
							
							<div class="collapse navbar-collapse mean-menu">

									<?php
										wp_nav_menu( array(
											'menu'              => 'main-menu',
											'theme_location'    => 'primary',
											'depth'             => 3,
											'container'         => '',
											'container_class'   => 'nav-item',
											'container_id'      => 'menu-main-menu',
											'menu_class'        => 'navbar-nav m-auto',
											'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
											'walker'            => new wp_bootstrap_navwalker())
										);
										?>

								
							</div>
						</nav>
					</div>
				</div>
				
				<div class="others-option-for-responsive">
					<div class="container">
						<div class="container">
							<div class="option-inner">
								<div class="others-option justify-content-center d-flex align-items-center">
									<div class="search-box">
										<form class="search-form">
											<input class="form-control" name="search" placeholder="Search..." type="text">
											<button class="search-btn" type="submit">
												<i class="bx bx-search"></i>
											</button>
										</form>
									</div>

									<div class="sidebar-menu">
										<a href="#" class="burger-menu">
											<i class="flaticon-menu"></i>
										</a>
									</div>

									<div class="cart-icon">
										<a href="cart.html">
											<i class="flaticon-shopping-cart"></i>
											<span>0</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Nav Area -->
		</header>
		
		<!-- End Header Area 


<?php bloginfo('url'); ?>


				
<?php echo get_template_directory_uri(); ?>

-->
