<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );



//--------------------------------------------------------



// add_action('init', 'register',0);


// //A func that is getting an array and setting values from the array for custom post-type
// function get_post_args($key){
// 	$CPT = $key;
// 	  $labels = array(
//                 'name'                  => _x("$CPT", 'Post Type General Name', 'text_domain'),
//                 'singular_name'         => _x("$CPT", 'Post Type Singular Name', 'text_domain'),
//                 'parent_item_colon'     => '',
//                 'menu_name'             => __( "$CPT"),
//                 'name_admin_bar'        => __( "$CPT"),
//                 'archives'              => __( 'Item Archives', 'text_domain' ),
//                 'attributes'            => __( 'Item Attributes', 'text_domain' ),
//                 'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
//                 'all_items'             => __( "All Items $CPT"),
//                 'add_new_item'          => __( "Add New Item $CPT"),
//                 'add_new'               => __( "Add New $CPT"),
//                 'new_item'              => __( 'New Item $CPT'),
//                 'edit_item'             => __( "Edit Item $CPT"),
//                 'update_item'           => __( "Update Item $CPT"),
//                 'view_item'             => __( "View Item $CPT"),
//                 'view_items'            => __( "View Items $CPT"),
//                 'search_items'          => __( "Search Item $CPT"),
//                 'not_found'             => __( 'Not found', 'text_domain' ),
//                 'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
//                 'featured_image'        => __( 'Featured Image', 'text_domain' ),
//                 'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
//                 'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
//                 'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
//                 'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
//                 'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
//                 'items_list'            => __( 'Items list', 'text_domain' ),
//                 'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
//                 'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
//             );

//         $args = array(
//                 'labels'                 => $labels,
//                 'description'           => __( 'Post Type Description', 'text_domain' ),
//                 'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
//                 'hierarchical'          => false,
//                 'public'                => true,
//                 'show_ui'               => true,
//                 'show_in_menu'          => true,
//                 'menu_position'         => 5,
//                 'show_in_admin_bar'     => true,
//                 'show_in_nav_menus'     => true,
//                 'can_export'            => true,
//                 'has_archive'           => true,        
//                 'exclude_from_search'   => false,
//                 'publicly_queryable'    => true,
//         );
//         return $args;
    
// }


// // Add Custom Taxonomy for Custom Post Types

//     function create_custom_taxonomies($value){
//     	$taxon = $value;
//         $labels = array (
//                 'name'              => $taxon,
//                 'singular_name'     => $taxon,
//                 'search_items'      => "Search $taxon",
//                 'all_items'         => "All $taxon",
//                 'parent_item'       => "Parent $taxon",
//                 'parent_item_colon' => "Parent $taxon:",
//                 'edit_item'         => "Edit $taxon",
//                 'update_item'       => "Update $taxon",
//                 'add_new _item'     => "Add New $taxon",
//                 'new_item_name'     => "New Type Name",
//                 'menu_name'         => $taxon,
//         );
//         $args = array (
//                 'labels'            => $labels,
//                 'hierarchical'      => true,
//                 'show_ui'           => true,
//                 'show_admin_column' => true,
//                 'query_var'         => true,
//                 'rewrite'           => array('slug' => $taxon)
//         );
//         return $args;
//     }


// //A func that called from action and sending array to get_post_args and create_custom_taxonomies
// function register(){
// 	$names = array("Adventures" =>"","Products" =>"Activity");

// 		foreach ($names as $key => $value ) {

// 			$args = get_post_args($key);
// 			register_post_type(strtolower($key),$args);

// 			if ($value=="") {
// 				// echo "<br>";
// 				//echo "no taxon no string";
// 				//echo "<br>";
// 			}
// 			elseif(is_array($value)){
// 				foreach ($value as $val) {
// 					// echo "<br>";
// 					// echo "xxx in the loop   $x";
// 					// echo "<br>";
// 					// echo "value in the loop   $value";
// 					// echo "<br>";
// 					$args = create_custom_taxonomies($val);
// 					register_taxonomy(strtolower($val),array(strtolower($key)),$args);
	
// 				}
// 			}
// 			else{
// 				$args = create_custom_taxonomies($value);
				
// 				register_taxonomy(strtolower($value),array(strtolower($key)),$args);
				
// 			}	
// 		}
// }




//-----------------------------------------------------

//checking if add_theme_support exists and adding it
if ( function_exists( 'add_theme_support' ) )  {
       add_theme_support( 'post-thumbnails' );
       set_post_thumbnail_size( 300, 300, true );
   }

//checking if add_theme_support exists and adding it
       add_theme_support( 'menus' );

//-----------------------------------------------------

// a function that is registering the menu
function register_top_menu() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
  register_nav_menu('bottom-menu',__( 'Bottom Menu' ));
}
//when wordpress is loading the scripts load this

add_action( 'init', 'register_top_menu' );

//-----------------------------------------------------
//this will limit the number off all posts to only 2 

add_filter('pre_get_posts', 'limit_archive_posts');
function limit_archive_posts($query){
    if ($query->is_archive) {
        $query->set('posts_per_page', 12);
    }
    return $query;
}


//-----------------------------------------------------
//this will limit the number off food posts to only 3 
add_filter('pre_get_posts', 'per_category_basis');
function per_category_basis($query){
    if ($query->is_category) {
        // category named 'books' show 3 posts
        if (is_category('do')){
            $query->set('posts_per_page', 1);
        }
        // // category With ID = 32 show only 3 posts
        // if (is_category('32'){
        //     $query->set('posts_per_page', 3);
        // }
    }
    return $query;
}
//---------------------------------------------------


function get_banner(){

    if (is_front_page()) {
         $img=get_field('banner');
         //echo "front";
    }
    elseif (get_field('banner')) {
        $img=get_field('banner');

        //echo "banner";
    }
    else {
        echo "no banner";
   }    

    return $img;

};

// creating a new sidebar called contact-info

if (function_exists('register_sidebar')) {
    
register_sidebar(array(

    'name'          => 'contact-info',
    'id'            => 'side-contact-info',
    'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',

    ));


register_sidebar(array(

    'name'          => 'business-hours',
    'id'            => 'side-business-hours',
    'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',

    ));


register_sidebar(array(

    'name'          => 'footer-logo',
    'id'            => 'side-footer-logo',
    'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',

    ));

register_sidebar(array(

    'name'          => 'archives',
    'id'            => 'side-archives',
    'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',

    ));

register_sidebar(array(

    'name'          => 'copy-right',
    'id'            => 'side-copy-right',
    'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',

    ));

register_sidebar(array(

    'name'          => 'side',
    'id'            => 'side',
    'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',

    ));

}


// function changeNavColor($Nav) {
//              if(get_field("banner")){
//                $Nav[] = 'whiteNav';
//            }
//            return $Nav;
//         }

//         add_filter('body_class', 'changeNavColor');


add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
    }
} );


//----------------------------------------



// function theme_slug_widgets_init() {
//    register_sidebar( array(
//        'name' => __( 'Footer', 'wpf' ),
//        'id' => 'footer-1',
//        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
//        'before_widget' => '<li id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</li>',
//     'before_title'  => '<h2 class="widgettitle">',
//     'after_title'   => '</h2>',
//    ) );

//     register_sidebar( array(
//        'name' => __( 'Sidebar-2', 'wps' ),
//        'id' => 'sidebar-2',
//        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
//        'before_widget' => '<li id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</li>',
//     'before_title'  => '<h2 class="widgettitle">',
//     'after_title'   => '</h2>',
//    ) );
// }

// add_action( 'widgets_init', 'theme_slug_widgets_init' );

    ?>
