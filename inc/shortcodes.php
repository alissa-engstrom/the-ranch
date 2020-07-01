<?php 
//phone [phone]
/*function phone( $atts, $content = null ) {  
	return '<i class="fas fa-phone fa-rotate-90"></i> <span class="InfinityNumber13391 clickable">844-876-7680</span>';  
} 
add_shortcode("phone", "phone");
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

// Enable shortcodes
add_filter( 'the_excerpt', 'shortcode_unautop');
add_filter( 'the_excerpt', 'do_shortcode');

function phone() { 
  $content = '<i class="fas fa-phone fa-rotate-90"></i> <span class="InfinityNumber13391 clickable">844-876-7680</span>';
  return $content;
}
add_shortcode('phone', 'phone'); */

// Enable shortcodes in text areas
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

// Enable shortcodes
add_filter( 'the_excerpt', 'shortcode_unautop');
add_filter( 'the_excerpt', 'do_shortcode');


function phone() { 
  return '<span class="phone-number"><i class="fas fa-phone fa-rotate-90"></i> <span class="InfinityNumber13391 clickable">844-876-7680</span></span>';
}
add_shortcode('phone', 'phone');