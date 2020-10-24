<?php
/*
 * Search Template File.
 */
get_header(inner);
?>


		<div id="page_header" class="page-subheader">
			<div class="bgback"></div>

			<div class="kl-bg-source">
				<!-- Gradient overlay -->
				<div class="kl-bg-source__overlay" style="background:rgba(118,3,186,1); background: -moz-linear-gradient(left, rgba(118,3,186,1) 0%, rgba(143,21,21,1) 100%); background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(118,3,186,1)), color-stop(100%,rgba(143,21,21,1))); background: -webkit-linear-gradient(left, rgba(118,3,186,1) 0%,rgba(143,21,21,1) 100%); background: -o-linear-gradient(left, rgba(118,3,186,1) 0%,rgba(143,21,21,1) 100%); background: -ms-linear-gradient(left, rgba(118,3,186,1) 0%,rgba(143,21,21,1) 100%); background: linear-gradient(to right, rgba(118,3,186,1) 0%,rgba(143,21,21,1) 100%); ">
				</div>
				<!--/ Gradient overlay -->
			</div>
			<!--/ Background -->

			<!-- Sub-Header content wrapper -->
			<div class="ph-content-wrap">
				<div class="ph-content-v-center">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<!-- Breadcrumbs -->
								<?php the_breadcrumb(); ?>
								<!--/ Breadcrumbs -->

								<div class="clearfix"></div>
							</div>
							<!--/ col-sm-6 -->

							<div class="col-sm-6">
								<!-- Sub-header titles -->
								<!--/ Sub-header titles -->
							</div>
							<!--/ col-sm-6 -->
						</div>
						<!--/ row -->
					</div>
					<!--/ container -->
				</div>
				<!--/ .ph-content-v-center -->
			</div>
			<!--/ Sub-Header content wrapper -->

		
					<!-- Sub-header Bottom mask style 3 -->
			<div class="kl-bottommask kl-bottommask--mask3">
				<svg width="2700px" height="57px" class="svgmask" viewBox="0 0 2700 57" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			        <defs>
			            <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-mask3">
			                <feOffset dx="0" dy="3" in="SourceAlpha" result="shadowOffsetInner1"></feOffset>
			                <feGaussianBlur stdDeviation="2" in="shadowOffsetInner1" result="shadowBlurInner1"></feGaussianBlur>
			                <feComposite in="shadowBlurInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite>
			                <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.4 0" in="shadowInnerInner1" type="matrix" result="shadowMatrixInner1"></feColorMatrix>
			                <feMerge>
			                    <feMergeNode in="SourceGraphic"></feMergeNode>
			                    <feMergeNode in="shadowMatrixInner1"></feMergeNode>
			                </feMerge>
			            </filter>
			        </defs>
			        <path d="M-2,57 L-2,34.007 L1268,34.007 L1284,34.007 C1284,34.007 1291.89,33.258 1298,31.024 C1304.11,28.79 1329,11 1329,11 L1342,2 C1342,2 1345.121,-0.038 1350,-1.64313008e-14 C1355.267,-0.03 1358,2 1358,2 L1371,11 C1371,11 1395.89,28.79 1402,31.024 C1408.11,33.258 1416,34.007 1416,34.007 L1432,34.007 L2702,34.007 L2702,57 L1350,57 L-2,57 Z" class="bmask-bgfill" filter="url(#filter-mask3)" fill="#f5f5f5"></path>
			    </svg>

			    <i class="glyphicon glyphicon-chevron-down"></i>
		    </div>
		    <!--/ Sub-header Bottom mask style 3 -->
		</div>
		

		<div class="page_content_wrap">
			<div class="content_wrap">
				<div class="content">
					<section class="no_padding">
						<div class="container">
							<div class="row">

							
						<div class="page-header grayContainer text-center padding">
							<div class="pagetitle text-center">
								<h3 class="page-title"><b> <?php echo $wp_query->found_posts; ?>
									<?php _e('SEARCH RESULTS', 'locale'); ?>: </b></h3>
								<h4><?php the_search_query(); ?></h4>
							</div>
						</div><!-- .page-header -->
						

						<?php while (have_posts()) {
                                the_post(); ?>
								<article class="post_item post_item_excerpt post_featured_center post">
									
									<h3 class="post_title">
									<a href="<?php the_permalink(); ?>">
										<span class="post_icon icon-pitch"></span>
										<span class="post_title_text"><?php the_title(); ?></span>
									</a>
									</h3>
									<div class="post_content clearfix">
										<div class="post_descr">
											<?php the_excerpt(); ?>
											<a href="<?php the_permalink(); ?>" class="sc_button sc_button_square sc_button_style_border sc_button_bg_color3 sc_button_size_small">READ MORE</a>
										</div>
									</div>
								</article>
								<?php } ?>
							</div>
						</div>
					</section>
				</div>
				
			</div>
		</div>
		
		    

<?php get_footer(); ?>
