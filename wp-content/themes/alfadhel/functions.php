<?php
/**
 * Replace various active menu class names with "active" or nothing
 *
 */

 
// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

/**
 * Register style sheet.
 */
function register_plugin_styles() {
	wp_register_style( 'css1', get_stylesheet_directory_uri().( '/assets/css/bootstrap.min.css' ) ); 	wp_enqueue_style( 'css1' );
	wp_register_style( 'css2', get_stylesheet_directory_uri().( '/assets/css/bootstrap.min.css' ) ); 	wp_enqueue_style( 'css2' );  
  wp_register_style( 'css3', get_stylesheet_directory_uri().( '/assets/css/owl.theme.default.min.css' ) ); 	wp_enqueue_style( 'css3' );
	wp_register_style( 'css4', get_stylesheet_directory_uri().( '/assets/css/owl.carousel.min.css' ) ); 	wp_enqueue_style( 'css4' );
	wp_register_style( 'css5', get_stylesheet_directory_uri().( '/assets/css/magnific-popup.css' ) ); 	wp_enqueue_style( 'css5' );
	wp_register_style( 'css6', get_stylesheet_directory_uri().( '/assets/css/animate.css' ) ); 	wp_enqueue_style( 'css6' );
	wp_register_style( 'css7', get_stylesheet_directory_uri().( '/assets/css/boxicons.min.css' ) ); 	wp_enqueue_style( 'css7' );
	wp_register_style( 'css8', get_stylesheet_directory_uri().( '/assets/css/flaticon.css' ) ); 	wp_enqueue_style( 'css8' );
	wp_register_style( 'css9', get_stylesheet_directory_uri().( '/assets/css/meanmenu.css' ) ); 	wp_enqueue_style( 'css9' );
	wp_register_style( 'css10', get_stylesheet_directory_uri().( '/assets/css/nice-select.css' ) ); 	wp_enqueue_style( 'css10' );
	wp_register_style( 'css11', get_stylesheet_directory_uri().( '/assets/css/odometer.css' ) ); 	wp_enqueue_style( 'css11' );
	wp_register_style( 'css12', get_stylesheet_directory_uri().( '/assets/css/style.css' ) ); 	wp_enqueue_style( 'css12' );
	wp_register_style( 'css13', get_stylesheet_directory_uri().( '/assets/css/responsive.css' ) ); 	wp_enqueue_style( 'css13' );
	wp_register_style( 'css14', get_stylesheet_directory_uri().( './style.css' ) ); 	wp_enqueue_style( 'css14' );
  
}


function wpb_widgets_init() {
 
  register_sidebar( array(
      'name' => __( 'Main Sidebar', 'wpb' ),
      'id' => 'sidebar-1',
      'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
  ) );

  register_sidebar( array(
      'name' =>__( 'Front page sidebar', 'wpb'),
      'id' => 'sidebar-2',
      'description' => __( 'Appears on the static front page template', 'wpb' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
  ) );
  }

add_action( 'widgets_init', 'wpb_widgets_init' );


define('ICL_DONT_LOAD_NAVIGATION_CSS', true);
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);





 //////////// options

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	acf_add_options_page('Header');
	acf_add_options_page('Footer');


}

// // Register Custom Navigation Walker
// require_once('wp_bootstrap4-mega-navwalker.php');
// register_nav_menus( array(
//     'primary' => __( 'Primary Menu', 'qnfp Theme' ),
//     'secondary' => __( 'secondary', 'qnfp Theme' ),
// ) );

// add_filter('tc_menu_display', 'custom_menu_display');
// function custom_menu_display($output) {
// 	echo preg_replace('| class="dropdown-toggle" data-toggle="dropdown" data-target="#"(.+?)<b |', ' class="a-stripped" $1</a><a href="#" class="dropdown-toggle a-caret" data-toggle="dropdown" data-target="#"><b ', $output, -1);
// 	}

add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
function clear_nav_menu_item_class($classes, $item, $args) {
    return array();
}

	
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Ontime Theme' ),
    'secondary' => __( 'Footer Menu', 'Ontime Theme' ),
) );

add_filter('tc_menu_display', 'custom_menu_display');
function custom_menu_display($output) {
	echo preg_replace('| class="dropdown-toggle" data-toggle="dropdown" data-target="#"(.+?)<b |', ' class="a-stripped" $1</a><a href="#" class="dropdown-toggle a-caret" data-toggle="dropdown" data-target="#"><b ', $output, -1);
	}




function the_breadcrumb() {
	
	$home_link = home_url('/');
	
	echo '<ul class="">';
	if (!is_home()) {
		echo '<li><a href="';
		echo $home_link;
		echo '">';
		echo __('Home','tamouh_theme');
		echo "</a></li>";
		if (is_category() || is_single()) {
			echo '<li>';
			the_category(' </li><li> ');
			if (is_single()) {
				echo "Product</li><li>";
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			echo '<li class="active">';
			echo the_title();
			echo '</li>';
		}
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	echo '</ul>';
}






if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');


function new_excerpt_length($length) {
	return 18 ;
}
add_filter('excerpt_length', 'new_excerpt_length');


function new_excerpt_more($more) {
       global $post;
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');



if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');





function remove_head_scripts() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );


//Remove automatic_loading_js------------//

add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

add_action( 'init', function() {

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}, PHP_INT_MAX - 1 );


add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( &$scripts)
{
    if(!is_admin())
    {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.11.1' );
    }
}



function load_scripts() {
    global $post;

    if( is_page() || is_single() )
    {
        switch($post->post_name) // post_name is the post slug which is more consistent for matching to here
        {
            case 'contact-us':
                wp_enqueue_script('contact', 'https://www.google.com/recaptcha/api.js', array('jquery'), '', false);
                break;
			case 'free-consultation':
				wp_register_style( 'css7', get_stylesheet_directory_uri().( '/css/sliders/ios/style.css' ) ); 	wp_enqueue_style( 'css7' );
                break;
       }
    } 
}
add_action('wp_enqueue_scripts', 'load_scripts');




/*
* Creating a function to create our CPT
*/
 

function my_custom_post_product() {
    $labels = array(
      'name'               => _x( 'Products', 'post type general name' ),
      'singular_name'      => _x( 'Product', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'book' ),
      'add_new_item'       => __( 'Add New Product' ),
      'edit_item'          => __( 'Edit Product' ),
      'new_item'           => __( 'New Product' ),
      'all_items'          => __( 'All Products' ),
      'view_item'          => __( 'View Product' ),
      'search_items'       => __( 'Search Products' ),
      'not_found'          => __( 'No products found' ),
      'not_found_in_trash' => __( 'No products found in the Trash' ), 
      'menu_name'          => 'Products',

    );
    $args = array(
      'labels'        => $labels,
      'description'   => 'Holds our products and product specific data',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
      'menu_icon'   => 'dashicons-products'

      
    );
    register_post_type( 'product', $args ); 
  }
  add_action( 'init', 'my_custom_post_product' );


  function my_taxonomies_product() {
    $labels = array(
      'name'              => _x( 'Product Categories', 'taxonomy general name' ),
      'singular_name'     => _x( 'Product Category', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Product Categories' ),
      'all_items'         => __( 'All Product Categories' ),
      'parent_item'       => __( 'Parent Product Category' ),
      'parent_item_colon' => __( 'Parent Product Category:' ),
      'edit_item'         => __( 'Edit Product Category' ), 
      'update_item'       => __( 'Update Product Category' ),
      'add_new_item'      => __( 'Add New Product Category' ),
      'new_item_name'     => __( 'New Product Category' ),
      'menu_name'         => __( 'Product Categories' ),

    );
    $args = array(
      'labels' => $labels,
      'hierarchical' => true,
    );
    register_taxonomy( 'product_category', 'product', $args );
  }
  add_action( 'init', 'my_taxonomies_product', 0 );
  

?>