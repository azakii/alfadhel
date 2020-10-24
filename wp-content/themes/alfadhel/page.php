<?php
/*
 * Page Template File.
 */
get_header();


$jobile_blog_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'jobile-blog-image' );


?>


 <!--== End Header Wrapper ==-->
 <main class="site-wrapper site-wrapper-reveal">
        <!--== Start Hero Slider Area ==-->

        <div class="page-header-wrapper bg-secondary inner" data-parallax-speed="0.75"
            data-bg="<?php bloginfo('template_url'); ?>/assets/img/slider/business-classic/03business-03.jpg"
            style="background-position: center 0%; background-image: url(<?php bloginfo('template_url'); ?>/assets/img/slider/business-classic/03business-03.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="">
                            <div class="section-title mb-0 headerTitle">
							<h1><?php the_title(); ?></h1>
                            </div>
                            <nav class="breadcrumb-wrap">
								<?php the_breadcrumb(); ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="blog-page-content-area sp-y bg-softWhite">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--** Start Blog Post Details **-->
                        <article class="blog-post-details-content">
                            <!-- <header class="blog-post-details-header">
                                <div class="post-info text-center">
                                    <h4 class="post-info__title">uPVC Underground Drainage and Sewerage</h4>
                                </div>
                            </header> -->
                            <div class="blog-post-details-body">
							
							<?php while (have_posts()) : the_post(); ?>

                            <div class="text-center">
                                <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
                            </div>
					<?php
				    the_content();
				    wp_link_pages(array(
					'before' => '<div class="page-links">' . __('Pages:', 'jobile'),
					'after' => '</div>',
				    ));
				    ?>
				
    
    			 
    <?php if (comments_open($post->ID)) { ?>
			   
			
    <?php } endwhile; ?>

                            </div>
                        </article>
                        <!--** End Blog Post Details **-->
                      
                      
                      
                    </div>
                   
                </div>
            </div>
        </div>

    </main>
    <!--== Start Footer Area Wrapper ==-->
		
		
		
<?php get_footer(); ?>