<div class="page">
<?php 
/*
 * 404 Template File.
 */
get_header(); ?>


<div id="banner-area" class="banner-area bg-overlay" style="background-image:url(<?php the_field('inner_image') ?>)">
            <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading" >
                        <h1 class="banner-title"><?php the_title(); ?></h1>
                        <?php the_breadcrumb(); ?>
                        <!-- <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>About</li>
                        </ol> -->
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
            </div><!-- Container end -->
        </div>

		
		
		<section id="main-container" class="main-container section-padding">
            <div class="container">
             <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                   <div class="error-page text-center">
                      <div class="error-code">
                         <strong>404</strong>
                      </div>
                      <div class="error-message">
                         <h3><?php _e('Oops... Page Not Found!', 'tamouh_theme') ?></h3>
                      </div>
                      <div class="error-body">
					  <?php _e(' Try using the button below to go to main page of the site ', 'tamouh_theme') ?><br>
                         <a href="<?php bloginfo('url'); ?>" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> <?php _e(' Go to Home ', 'tamouh_theme') ?><br></a>
                      </div>
                   </div>
                </div>
             </div>
            </div><!-- Container end -->
       </section>

<?php get_footer(); ?>
