<?php get_header(); ?>

<?php 
   global $post;
   if( get_field('typical_day_template') == 'yes' ){
		include(TEMPLATEPATH . '/inc/locations/locations-a-typical-day.php');
    }else if(is_page('ranch_locations') || $post->post_parent > 0){
        include(TEMPLATEPATH . '/inc/locations/locations-child.php');
    }else{
	    include(TEMPLATEPATH . '/inc/locations/locations-home.php');
    }
?> 


<?php get_footer(); ?>