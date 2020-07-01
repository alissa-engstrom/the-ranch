<?php
/*locations*/
add_action( 'init', 'ranch_locations' );
function ranch_locations() {
  $labels = array(
    'name'               	=> _x( 'Locations', 'post type general name' ),
    'singular_name'      	=> _x( 'Location', 'post type singular name' ),
    'add_new'            	=> _x( 'Add New', 'location' ),
    'add_new_item'       	=> __( 'Add New Location' ),
    'edit_item'          	=> __( 'Edit Location' ),
    'new_item'           	=> __( 'New Location' ),
    'all_items'          	=> __( 'All Locations' ),
    'view_item'          	=> __( 'View Location' ),
    'search_items'       	=> __( 'Search Locations' ),
    'not_found'          	=> __( 'No locations found' ),
    'not_found_in_trash' 	=> __( 'No locations found in the Trash' ), 
    'parent_item_colon'  	=> '',
    'menu_name'          	=> 'Locations'
  );
  $args = array(
    'labels'        		=> $labels,
    'description'   		=> 'Ranch Locations',
    'public' 				=> true,
    'show_ui'               => true,
	'show_in_menu'          => true,
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
    'show_in_rest' 			=> true,
    'hierarchical' 			=> true,
    'query_var' 			=> true,
    'menu_position' 		=> 5,
    'menu_icon'     		=> 'dashicons-location',
    'supports'      		=> array( 'title', 'editor','author','custom-fields', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
    'has_archive'   		=> true,
    'taxonomies' 			=> array( 'category' ),
    'rewrite' 				=> array( 'slug' => 'locations','with_front' => FALSE),
  );
  register_post_type( 'ranch_locations', $args ); 
}

/*Programs*/
add_action( 'init', 'ranch_programs' );
function ranch_programs() {
  $labels = array(
    'name'               	=> _x( 'Programs', 'post type general name' ),
    'singular_name'      	=> _x( 'Program', 'post type singular name' ),
    'add_new'            	=> _x( 'Add New', 'Program' ),
    'add_new_item'       	=> __( 'Add New Program' ),
    'edit_item'          	=> __( 'Edit Program' ),
    'new_item'           	=> __( 'New Program' ),
    'all_items'          	=> __( 'All Programs' ),
    'view_item'          	=> __( 'View Program' ),
    'search_items'       	=> __( 'Search Programs' ),
    'not_found'          	=> __( 'No programs found' ),
    'not_found_in_trash' 	=> __( 'No programs found in the Trash' ), 
    'parent_item_colon'  	=> '',
    'menu_name'          	=> 'Programs'
  );
  $args = array(
    'labels'        		=> $labels,
    'description'   		=> 'Ranch Programs',
    'public' 				=> true,
    'show_ui'               => true,
	'show_in_menu'          => true,
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
    'show_in_rest' 			=> true,
    'hierarchical' 			=> true,
    'query_var' 			=> true,
    'menu_position' 		=> 5,
    'menu_icon'     		=> 'dashicons-welcome-learn-more',
    'supports'      		=> array( 'title', 'editor','author','custom-fields', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
    'has_archive'   		=> true,
    'rewrite' 				=> array( 'slug' => 'programs','with_front' => FALSE),
  );
  register_post_type( 'ranch_programs', $args ); 
}

/*What We Treat*/
add_action( 'init', 'ranch_what_we_treat' );
function ranch_what_we_treat() {
  $labels = array(
    'name'               	=> _x( 'Treatment Issues', 'post type general name' ),
    'singular_name'      	=> _x( 'Treatment Issue', 'post type singular name' ),
    'add_new'            	=> _x( 'Add New', 'Treatment Issue' ),
    'add_new_item'       	=> __( 'Add New Treatment Issue' ),
    'edit_item'          	=> __( 'Edit Treatment Issue' ),
    'new_item'           	=> __( 'New Treatment Issue' ),
    'all_items'          	=> __( 'All Treatment Issues' ),
    'view_item'          	=> __( 'View Treatment Issue' ),
    'search_items'       	=> __( 'Search Treatment Issues' ),
    'not_found'          	=> __( 'No treatment issues found' ),
    'not_found_in_trash' 	=> __( 'No treatment issues found in the Trash' ), 
    'parent_item_colon'  	=> '',
    'menu_name'          	=> 'What We Treat'
  );
  $args = array(
    'labels'        		=> $labels,
    'description'   		=> 'Ranch What We Treat',
    'public' 				=> true,
    'show_ui'       		=> true,
	'show_in_menu'  		=> true,
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
	'show_in_rest' 			=> true,
    'hierarchical' 			=> true,
    'query_var' 			=> true,
    'menu_position' 		=> 4,
    'menu_icon'     		=> 'dashicons-editor-ul',
    'supports'      		=> array( 'title', 'editor','author','custom-fields', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
    'has_archive'   		=> true,
    'rewrite' 				=> array( 'slug' => 'treatment-issues','with_front' => FALSE),
  );
  register_post_type( 'ranch_what_we_treat', $args ); 
}




/*Therapies*/

add_action( 'init', 'therapies_cpt', 0 );
function therapies_cpt() {

	$labels = array(
		'name'                => _x( 'Therapies', 'Post Type General Name', 'recovery-ranch' ),
		'singular_name'       => _x( 'Therapies', 'Post Type Singular Name', 'recovery-ranch' ),
		'menu_name'           => __( 'Therapies', 'recovery-ranch' ),
		'parent_item_colon'   => __( 'Parent Therapy', 'recovery-ranch' ),
		'all_items'           => __( 'All Therapies', 'recovery-ranch' ),
		'view_item'           => __( 'View Therapy', 'recovery-ranch' ),
		'add_new_item'        => __( 'Add New Therapy', 'recovery-ranch' ),
		'add_new'             => __( 'Add New', 'recovery-ranch' ),
		'edit_item'           => __( 'Edit Therapy', 'recovery-ranch' ),
		'update_item'         => __( 'Update Therapy', 'recovery-ranch' ),
		'search_items'        => __( 'Search Therapy', 'recovery-ranch' ),
		'not_found'           => __( 'Not Found', 'recovery-ranch' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'recovery-ranch' ),
	);

	$args = array(
		'label'               => __( 'Therapy', 'recovery-ranch' ),
		'description'         => __( 'Therapies', 'recovery-ranch' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'menu_icon'     	  => 'dashicons-palmtree',
		'public'              => true,
		'show_ui'       		=> true,
		'show_in_menu'  		=> true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'show_in_rest' 			=> true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'      => 'post',
		'rewrite' => array(
        	'slug' => 'specialized-programs',
			'with_front' => false,
    	)
	);

	register_post_type( 'therapies', $args );

}
/*Testimonials*/
add_action( 'init', 'ranch_testimonials' );
function ranch_testimonials() {
  $labels = array(
    'name'               	=> _x( 'Testimonials', 'post type general name' ),
    'singular_name'      	=> _x( 'Testimonial', 'post type singular name' ),
    'add_new'            	=> _x( 'Add New', 'Testimonial' ),
    'add_new_item'       	=> __( 'Add New Testimonials' ),
    'edit_item'          	=> __( 'Edit Testimonial' ),
    'new_item'           	=> __( 'New Testimonial' ),
    'all_items'          	=> __( 'All Testimonials' ),
    'view_item'          	=> __( 'View Testimonial' ),
    'search_items'       	=> __( 'Search Testimonials' ),
    'not_found'          	=> __( 'No testimonials found' ),
    'not_found_in_trash' 	=> __( 'No testimonials found in the Trash' ), 
    'parent_item_colon'  	=> '',
    'menu_name'          	=> 'Testimonials'
  );
  $args = array(
    'labels'        		=> $labels,
    'description'   		=> 'Ranch Testimonials',
    'query_var'         	=> false,
	'public'            	=> false, 
	'has_archive'       	=> true, 
	'publicaly_queryable' 	=> false,
    'show_ui'               => true,
	'show_in_menu'          => true,
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
    'show_in_rest' 			=> true,
    'hierarchical' 			=> true,
    'menu_position' 		=> 5,
    'menu_icon'     		=> 'dashicons-format-quote',
    'supports'      		=> array( 'title', 'editor','author','custom-fields', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
    'taxonomies' 			=> array( 'testimonial-locations' ),
    'rewrite' 				=> array( 'slug' => '/about-us/testimonials','with_front' => FALSE),
  );
  register_post_type( 'ranch_testimonials', $args ); 
}
add_action( 'init', 'testimonial_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function testimonial_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Location', 'taxonomy general name' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Locations' ),
		'all_items'         => __( 'All Locations' ),
		'parent_item'       => __( 'Parent Location' ),
		'parent_item_colon' => __( 'Parent Location:' ),
		'edit_item'         => __( 'Edit Location' ),
		'update_item'       => __( 'Update Location' ),
		'add_new_item'      => __( 'Add New Location' ),
		'new_item_name'     => __( 'New Location Name' ),
		'menu_name'         => __( 'Testimonial Location' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_in_rest' 			=> true,
		'show_admin_column' => true,
		'query_var'         => false,
		'public'            => false, 
		'has_archive'       => false, 
		'publicaly_queryable' => false,

		'rewrite'           => array( 'slug' => 'testimonial-locations' ),
	);

	register_taxonomy( 'testimonial-locations', array( 'ranch_testimonials' ), $args );
}


/*resources*/

add_action( 'init', 'resources_cpt', 0 );
function resources_cpt() {

	$labels = array(
		'name'                => _x( 'Resources', 'Post Type General Name', 'recovery-ranch' ),
		'singular_name'       => _x( 'Resource', 'Post Type Singular Name', 'recovery-ranch' ),
		'menu_name'           => __( 'Resources', 'recovery-ranch' ),
		'parent_item_colon'   => __( 'Parent Resource', 'recovery-ranch' ),
		'all_items'           => __( 'All Resources', 'recovery-ranch' ),
		'view_item'           => __( 'View Resource', 'recovery-ranch' ),
		'add_new_item'        => __( 'Add New Resource', 'recovery-ranch' ),
		'add_new'             => __( 'Add New', 'recovery-ranch' ),
		'edit_item'           => __( 'Edit Resource', 'recovery-ranch' ),
		'update_item'         => __( 'Update Resource', 'recovery-ranch' ),
		'search_items'        => __( 'Search Resource', 'recovery-ranch' ),
		'not_found'           => __( 'Not Found', 'recovery-ranch' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'recovery-ranch' ),
	);

	$args = array(
		'label'               => __( 'Resources', 'recovery-ranch' ),
		'description'         => __( 'Resources', 'recovery-ranch' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// 'taxonomies'          => array( 'genres' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'       		=> true,
	'show_in_menu'  		=> true,
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
	'show_in_rest' 			=> true,
		'menu_position'       => 5,
		'can_export'          => true,
		'menu_icon'     	  => 'dashicons-format-aside',
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'taxonomies' => array( 'resource-categories'),
		'rewrite' => array(
        	'slug' => 'resources/%resource-categories%',
        	/*'slug' => 'resources',*/
		 	'with_front' => false,
     	)
	);

	register_post_type( 'resources', $args );

}



add_filter('post_type_link', 'projectcategory_permalink_structure', 10, 4);
function projectcategory_permalink_structure($post_link, $post, $leavename, $sample) {
    if (false !== strpos($post_link, '%resource-categories%')) {
        $projectscategory_type_term = get_the_terms($post->ID, 'resource-categories');
        if (!empty($projectscategory_type_term))
            $post_link = str_replace('%resource-categories%', array_pop($projectscategory_type_term)->
            slug, $post_link);
        else
            $post_link = str_replace('%resource-categories%', 'uncategorized', $post_link);
    }
    return $post_link;
}




/*add_action( 'init', 'locations_taxonomies', 0 );


function locations_taxonomies() {
	
	$labels = array(
		'name'              => _x( 'State', 'taxonomy general name' ),
		'singular_name'     => _x( 'State', 'taxonomy singular name' ),
		'search_items'      => __( 'Search States' ),
		'all_items'         => __( 'All States' ),
		'parent_item'       => __( 'Parent State' ),
		'parent_item_colon' => __( 'Parent State:' ),
		'edit_item'         => __( 'Edit State' ),
		'update_item'       => __( 'Update State' ),
		'add_new_item'      => __( 'Add New State' ),
		'new_item_name'     => __( 'New State Name' ),
		'menu_name'         => __( 'States' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'states' ),
	);

	register_taxonomy( 'ranch_states', array( 'ranch_locations' ), $args );
}*/
