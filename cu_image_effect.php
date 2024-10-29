<?php

/*
Plugin Name: All in All Image Hover Effect
Plugin URI: https://coderunions.net/hovereffect
Description: Create and display some great animated hover effects on your website for describe better of your services.
Version: 1.0.1
Author: Coder Unions
Author URI: https://coderunions.net
Text Domain: cu_image_effect
*/




//Loading CSS
function aaihe_style_load() {

	wp_enqueue_style('aaihe_stylesheet1', plugins_url( 'css/animate.min.css' , __FILE__ ) );
	wp_enqueue_style('aaihe_stylesheet2', plugins_url( 'css/bootstrap.min.css' , __FILE__ ) );
	wp_enqueue_style('aaihe_stylesheet3', plugins_url( 'css/js_composer.min.css' , __FILE__ ) ); 
	wp_enqueue_style('aaihe_stylesheet4', plugins_url( 'css/marvelous-hover.css' , __FILE__ ) ); 
	wp_enqueue_style('aaihe_stylesheet5', plugins_url( 'css/style.css' , __FILE__ ) ); 
	wp_enqueue_style('aaihe_stylesheet6', plugins_url( 'css/vc_addons_kit.css' , __FILE__ ) ); 
	wp_enqueue_style( 'fancybox', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css' );
}
add_action( 'wp_enqueue_scripts', 'aaihe_style_load' );






 
 function aaihe_hover_enqueue_script() {   
 
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'my_custom_script', plugin_dir_url( __FILE__ ) . 'js/jquery-migrate.min.js' );
    wp_enqueue_script( 'my_custom_script2', plugin_dir_url( __FILE__ ) . 'js/main.min.js' );
    wp_enqueue_script( 'my_custom_script2', plugin_dir_url( __FILE__ ) . 'js/marvelous-hover.js' );
    wp_enqueue_script( 'my_custom_script2', plugin_dir_url( __FILE__ ) . 'js/scripts.js' );
	wp_enqueue_script('fancybox', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js', array(), '3', true);
	

	
	
	
}
add_action('wp_enqueue_scripts', 'aaihe_hover_enqueue_script');


// Register Custom Post Type
function aaihe_post_type() {

	$labels = array(
		'name'                  => _x( 'Post Types', 'Post Type General Name', 'cu_image_effect' ),
		'singular_name'         => _x( 'Image hover', 'Post Type Singular Name', 'cu_image_effect' ),
		'menu_name'             => __( 'aaihe Image Hover', 'cu_image_effect' ),
		'name_admin_bar'        => __( 'Image Hover', 'cu_image_effect' ),
		'archives'              => __( 'Image Hover Archives', 'cu_image_effect' ),
		'attributes'            => __( 'image_hover Attributes', 'cu_image_effect' ),
		'parent_item_colon'     => __( 'Parent image_hover', 'cu_image_effect' ),
		'all_items'             => __( 'All Image Hover', 'cu_image_effect' ),
		'add_new_item'          => __( 'Add New Image Hover', 'cu_image_effect' ),
		'add_new'               => __( 'Add New Image Hover', 'cu_image_effect' ),
		'new_item'              => __( 'Image Hover', 'cu_image_effect' ),
		'edit_item'             => __( 'Edit Image Hover', 'cu_image_effect' ),
		'update_item'           => __( 'Update Image Hover', 'cu_image_effect' ),
		'view_item'             => __( 'View Image Hover', 'cu_image_effect' ),
		'view_items'            => __( 'View Image Hover', 'cu_image_effect' ),
		'search_items'          => __( 'Search Image Hover', 'cu_image_effect' ),
		'not_found'             => __( 'Not found Image Hover', 'cu_image_effect' ),
		'not_found_in_trash'    => __( 'Not found in Trash Image Hover', 'cu_image_effect' ),
		'featured_image'        => __( 'Featured Image', 'cu_image_effect' ),
		'set_featured_image'    => __( 'Set featured image', 'cu_image_effect' ),
		'remove_featured_image' => __( 'Remove featured image', 'cu_image_effect' ),
		'use_featured_image'    => __( 'Use as featured image', 'cu_image_effect' ),
		'insert_into_item'      => __( 'Insert into Image Hover', 'cu_image_effect' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Image Hover', 'cu_image_effect' ),
		'items_list'            => __( 'Image Hover list', 'cu_image_effect' ),
		'items_list_navigation' => __( 'Image Hover list navigation', 'cu_image_effect' ),
		'filter_items_list'     => __( 'Filter Image Hover list', 'cu_image_effect' ),
	);
	$args = array(
		'label'                 => __( 'image_hover', 'cu_image_effect' ),
		'labels'                => $labels,
		'supports'              => array( 'title', '', '' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'aaihe_images_hovers', $args );

}
add_action( 'init', 'aaihe_post_type', 0 );



// Lood framework
require ('cu-framework/cs-framework.php');


if ( ! defined( 'ABSPATH' ) ) { die; }

function aaihe_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
    
        'category' => '',
        
    ), $atts) );
    
    
    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'aaihe_images_hovers', 'category_name' => $category)
    );

    while($q->have_posts()) : $q->the_post();
    $idd = get_the_ID();

    $options = get_post_meta( $idd, 'aaihe_options', true );
	$effect_id = $options['effects_id'];
	$image_background_color = $options['image_background_color'];
	$image_width = $options['image_width'];
	$image_height = $options['image_height'];
	$heading_color = $options['heading_color'];
	$heading_font_size = $options['heading_font_size'];
	$heading_color = $options['heading_color'];
	$heading_font_family = $options['heading_font_family'];
	$heading_letter_spacing = $options['heading_letter_spacing'];
	$heading_font_weight = $options['heading_font_weight'];
	$button_font_size = $options['button_font_size'];
	$button_color = $options['button_color'];
	$button_font_family = $options['button_font_family'];
	$button_letter_spacing = $options['button_letter_spacing'];
	$button_font_weight = $options['button_font_weight'];
	$button_text_spacing = $options['button_text_spacing'];
	$button_border_size = $options['button_border_size'];
	$button_border_style = $options['button_border_style'];
	$button_border_color = $options['button_border_color'];
	
    

$output ='';

if( ! empty( $options['option'] ) ) {
    
    $groups = $options['option'];
    


    $output .=' <div class="main"> 
	<div class="grid">';

    foreach( $groups as $group ){
       
    $image = $group['add_hover_image'];
    $image = wp_get_attachment_image_src( $image, 'full' );
	$headline = $group['add_heading_text'];
	$button_text = $group['add_button_text'];
	$button_link = $group['add_button_link'];
	
        
		
		
		
		
		

    $output .='   <figure class=" effect-hover effect-'.$effect_id.' ratiooriginal effect-fonts  marvelous_custom_class_859c8e720a4481   marvelous-lazyload" style="background: '.$image_background_color.';width:'.$image_width.'px;height:'.$image_height.'px;">
     <img src="'.$image[0].'" alt=""/>
    
    <figcaption>
    <a data-fancybox="gallery" href="'.$image[0].'">    <div class="effect-caption">
        <div class="effect-heading">
        <h2 style="font-size: '.$heading_font_size.'px;font-family: '.$heading_font_family.';font-weight: '.$heading_font_weight.';color: '.$heading_color.';letter-spacing: '.$heading_letter_spacing.'px;">'.$headline.'</h2>
        </div></a>

        <div class="effect-description" >
                   <p class="description" style="z-index: 9999;font-size: '.$button_font_size.'px;font-family: '.$button_font_family.';font-weight: '.$button_font_weight.';color: '.$button_color.';letter-spacing: '.$button_letter_spacing.'px;"><a href="'.$button_link.'" style="padding:'.$button_text_spacing.'px;border:'.$button_border_size.'px '.$button_border_style.' '.$button_border_color.';">  '.$button_text.'</a></p>
                  </div>

      </div>
    </figcaption>
  </figure>';

    }
    $output .='</div></div>';//hover wraper close
}

    endwhile;
    wp_reset_query();
    return $output;
}
add_shortcode('aaihe', 'aaihe_shortcode');



?>