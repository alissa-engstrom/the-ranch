<?php
	
/*TITLE*/
add_theme_support( 'title-tag' );

	
/*STYLES & SCRIPTS*/	
add_action('wp_enqueue_scripts', 'ranch_load_scripts');
function ranch_load_scripts(){
    
    /*CSS*/
    wp_enqueue_style( 'bootstrap',  get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'fontawesome',  'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
    wp_enqueue_style( 'slick-css',  'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    
    /*SCRIPTS*/
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'pushy', get_template_directory_uri() . '/js/pushy.min.js', array(), '1.0.0', true );
    if ( is_page('faq') ) {
    	wp_enqueue_script( 'faqs', get_template_directory_uri() . '/js/faqs-min.js', array(), '1.0.0', true );
    }
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'sticky-kit', get_template_directory_uri() . '/js/jquery.sticky-kit-min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAqZX4p0PHjdiYd9PuuASzg_Xrd3daNDpY', array(), '', true);
    wp_enqueue_script( 'maps', get_template_directory_uri() . '/js/maps-min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'load', get_template_directory_uri() . '/js/load-min.js', array(), '1.0.0', true );
    
    /*DEQUEUE*/ 
    wp_dequeue_style( 'main1_css_file' );
	wp_deregister_style( 'main1_css_file' );
    
   
    
    
}//end ranch_load_scripts
//dequeue css from plugins


/*Shortcodes*/
include( get_template_directory() . '/inc/shortcodes.php' );




/*Google API*/
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyAqZX4p0PHjdiYd9PuuASzg_Xrd3daNDpY');
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'iconcard',
			'title'				=> __('Icon Card'),
			'description'		=> __('A custom icon card.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-customizer',
			'keywords'			=> array( 'card', 'icon' ),
		));
		
	}
	
	function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/inc/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/inc/block/content-{$slug}.php") );
	}
}

	
	
}

add_action('acf/init', 'my_acf_init');

/*ACF OPTION PAGE*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Media',
		'menu_title'	=> 'Social Media',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

/*MENUS*/
function register_my_menus() {
	register_nav_menus(
    	array(
	      'primary-nav' => __( 'Primary Nav' ),
	      'footer-nav' => __( 'Footer Nav' ),
	      /*'footer-about-rr' => __( 'About Recovery Ranch' ),
	      'footer-resources' => __( 'Resources' ),
	      'footer-locations' => __( 'Locations' ),
	      'footer-contact' => __( 'Contact Us' ),*/
		)
	);
}
add_action( 'init', 'register_my_menus' );

/*Add to Menu*/
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args){
    if( $args->theme_location == 'primary-nav' ){
        $items .= '<li class="mobile"><div id="LP_DIV_1550012537678"></div></li>';
    }
    return $items;
}


/*CUSTOM POST TYPES*/
include( get_template_directory() . '/inc/taxonomies.php' );
include( get_template_directory() . '/inc/custom-post-types.php' );


/*BLOCKS*/
//include( get_template_directory() . '/inc/blocks.php' );

/*ACF*/
add_filter('acf/format_value/type=text', 'do_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');

/*add body class*/
function add_acf_body_class($class) {
    $value = get_field('custom_body_tag');
    $class[] = $value;
    return $class;
}
add_filter('body_class', 'add_acf_body_class');

/*Featured Images*/
add_theme_support( 'post-thumbnails' ); 

add_image_size( 'what-we-treat-cards', 277, 184, true );
add_image_size( 'testimonial', 114, 114, true );
add_image_size( 'archive', 800, 435, true );
add_image_size( 'therapies', 184, 184, true );
add_image_size( 'location-bar', 56, 56, true );
//add_image_size( 'single', 800, 435, true );

add_filter( 'image_size_names_choose', 'my_custom_sizes' );
 
function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'what-we-treat-cards' => __( 'What We Treat Card' ),
    ) );
}


/*show all posts for therapies*/

add_action( 'pre_get_posts', 'therapies_show_all_work' );

function therapies_show_all_work( $query ) {
    
    if ( ! is_admin() && $query->is_main_query() ) {
    
        if ( is_post_type_archive( 'therapies' ) ) {
            
            $query->set('posts_per_page', -1 );
    
        }
    }
}



/*FACETS*/

/*FLUSH REWRITES*/
// do not use on live/production servers
/*
add_action( 'init','maybe_rewrite_rules' );
function maybe_rewrite_rules() {

	$ver = filemtime( __FILE__ ); 
	$defaults = array( 'version' => 0, 'time' => time() );
	$r = wp_parse_args( get_option( __CLASS__ . '_flush', array() ), $defaults );

	if ( $r['version'] != $ver || $r['time'] + 172800 < time() ) { 
		flush_rewrite_rules();
		
		$args = array( 'version' => $ver, 'time' => time() );
		if ( ! update_option( __CLASS__ . '_flush', $args ) )
			add_option( __CLASS__ . '_flush', $args );
	}

}*/

/*DELETE GRAVITY FORM SUBMISSIONS*/
add_filter( "gform_pre_submission", "encode_text_gf", 9 );
function encode_text_gf( $form ){
    foreach($form["fields"] as &$field)
        if($field["id"] == 5){
                    $_POST["input_10"] = rawurlencode($_POST["input_5"]);
        }
    return $form;
}

add_action( 'gform_after_submission', 'remove_form_entry' );
function remove_form_entry( $entry ) {
    GFAPI::delete_entry( $entry['id'] );
}

/*AMP SETTINGS*/
/* Start AMP Post Customization */
add_action( 'pre_amp_render_post', 'xyz_amp_add_custom_actions' );
function xyz_amp_add_custom_actions() {
    add_filter( 'the_content', 'xyz_amp_add_featured_image' );
}

function xyz_amp_add_featured_image( $content ) {
    //if ( has_post_thumbnail() ) {
        // Just add the raw <img /> tag; our sanitizer will take care of it later.
        $image = sprintf( '<p class="xyz-featured-image">%s</p>', get_the_post_thumbnail() );
        $image2 = sprintf( '<div id="amp-cta">Call <a href="tel:8882490082">888-249-0082</a> or <a href="https://www.recoveryranch.com/">Learn more about The Ranch</a></div>');
        $content = $image2 . $content . $image2;
    //}
    return $content;
}

add_filter( 'amp_post_template_meta_parts', 'xyz_amp_remove_author_meta' );

function xyz_amp_remove_author_meta( $meta_parts ) {
    foreach ( array_keys( $meta_parts, 'meta-author', true ) as $key ) {
        unset( $meta_parts[ $key ] );
    }
    return $meta_parts;
}
add_action( 'amp_post_template_head', 'xyz_amp_add_iframe_js' );

function xyz_amp_add_iframe_js( $amp_template ) {
    $post_id = $amp_template->get( 'post_id' );
    ?>
	<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <?php
}
add_action( 'amp_post_template_footer', 'xyz_amp_add_cta' );

function xyz_amp_add_cta( $amp_template ) {
    $post_id = $amp_template->get( 'post_id' );
    ?>
	<!--<a id="amp-cta" href="https://www.rightstep.com/about-us/why-the-right-step/">Why Choose Us? Learn More.</a>-->
    <?php
}
add_action( 'amp_post_template_css', 'xyz_amp_additional_css_styles' );

function xyz_amp_additional_css_styles( $amp_template ) {
	// only CSS here please...
	?>
	body.amp-mode-mouse{
		font-family: 'Lato', Helvetica, Arial, sans-serif;
	}
    nav.amp-wp-title-bar {
        padding: 12px 0;
	border-bottom: 1px solid rgba(215,215,215,.5);
    }
    .amp-wp-header div a {
        background-image: url( 'https://www.recoveryranch.com/wp-content/themes/recovery-ranch/assets/img/locations/tennessee/tennessee-logo.png' );
        background-repeat: no-repeat;
        background-size: contain;
        display: block;
        height: 56px;
        width: 114px;
        margin: 0 auto;
        text-indent: -9999px;
    }
    #ampiframe {width: 100%; text-align: center; height:0;}
    #amp-cta a{color:#ffffff}
    .amp-wp-title, h2, h3, h4{
	    color: #8A8D72!important;
    }
    
    
    #amp-cta{
	    border:none!important;
	    background:#C47038!important;
	    border-radius: 5px;
	    width:100%!important;
	    font-weight:bold!important;
	    text-align:center;
    }
    <?php
}
/* End AMP Post Customization */




