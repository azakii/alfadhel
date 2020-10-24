<?php
/*
 * Main Sidebar File.
 */
?>

<!--Info Column-->
<div class="info-column col-md-4 col-sm-12 col-xs-12">
                    	<div class="inner-column">

                            <!--Sidebar Side-->
                <div class="sidebar-side">
                	<aside class="sidebar market-sidebar">
						
                        <div class="sidebar-title">
                        	<h2>Market Sectors</h2>
                        </div>
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <?php
                                wp_nav_menu( array(
                                    'menu'              => 'sidebar-menu',
                                    'theme_location'    => 'secondary',
                                    'depth'             => 1,
                                    'container'         => '',
                                    'container_class'   => '',
                                    'container_id'      => '',
                                    'menu_class'        => 'blog-cat',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                                );
                                ?>
                        </div>
                        
                        <!-- Sidebar brochure-->
                        <div class="sidebar-widget sidebar-brochure">
                        	<div class="sidebar-title">
                                <h2>Our Brochures</h2>
                            </div>
                        	<a class="brochure" href="<?php bloginfo('template_url'); ?>/images/services.pdf"><span class="icon flaticon-pdf"></span>Service Overview <span>services.pdf</span></a>
                            <a class="brochure" href="<?php bloginfo('template_url'); ?>/images/about.pdf"><span class="icon flaticon-word-file"></span>About Our Company <span>about.pdf</span></a>
                        </div>
                        
                       
                        <!--Request Quote-->
                        <div class="request-quote">
                        	<a href="<?php bloginfo('url'); ?>/contact/">Contact us <span class="icon flaticon-right-arrow-1"></span></a>
                        </div>
                        
                    </aside>
                </div>
                </div>
                </div>