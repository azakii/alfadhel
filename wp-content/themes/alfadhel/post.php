<?php
/*
 * Page Template File.
 */
get_header();
?>


<div class="clearfix"></div>
<section class="content">
<div class="titre_haut">
  <div class="titre_heut_2 wrapper container"> Cours théâtre enfants & ados </div>
</div>

<div class="container">

    	<?php the_breadcrumb(); ?>

<div class="row">
    <div class="col-md-8">
    <div class="team-page">
    	<h1><?php the_title(); ?></h1>
    	<div class="page-container">
			
        	<?php while (have_posts()) : the_post(); ?>


					<?php
				    the_content();
				    wp_link_pages(array(
					'before' => '<div class="page-links">' . __('Pages:', 'jobile'),
					'after' => '</div>',
				    ));
				    ?>
				
    
    			 
    <?php if (comments_open($post->ID)) { ?>
			   
	<?php comments_template(); ?>
			
    <?php } endwhile; ?>

        
        </div>
        </div>
        
        
        </div>
        
        
        
        
    </div><!----col-md-8-->
    
   
<?php get_sidebar(); ?>

</div>
</div>
</section>

	
<?php get_footer(); ?>