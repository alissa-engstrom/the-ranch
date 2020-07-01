<?php
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_resource_taxonomies', 0 );

// create two taxonomies, Resource Categories and writers for the post type "book"
function create_resource_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Resource Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Resource Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Resource Categories', 'textdomain' ),
		'all_items'         => __( 'All Resource Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Resource Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Resource Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Resource Category', 'textdomain' ),
		'update_item'       => __( 'Update Resource Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Resource Category', 'textdomain' ),
		'new_item_name'     => __( 'New Resource Category Name', 'textdomain' ),
		'menu_name'         => __( 'Resource Category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'resources','with_front' => true ),
	);

	register_taxonomy( 'resource-categories', array( 'resources' ), $args );
}
/*add_action( 'init', 'create_therapy_taxonomy' );
function create_therapy_taxonomy() {
	$labels = array(
		'name'                           => 'Therapy Categories',
		'singular_name'                  => 'Therapy Category',
		'search_items'                   => 'Search Therapy Categories',
		'all_items'                      => 'All Therapy Categories',
		'edit_item'                      => 'Edit Therapy Category',
		'update_item'                    => 'Update Therapy Category',
		'add_new_item'                   => 'Add New Therapy Category',
		'new_item_name'                  => 'New Therapy Category Name',
		'menu_name'                      => 'Therapy Categories',
		'view_item'                      => 'View Therapy Category',
		'popular_items'                  => 'Popular Therapy Category',
		'separate_items_with_commas'     => 'Separate therapy categories with commas',
		'add_or_remove_items'            => 'Add or remove therapy categories',
		'choose_from_most_used'          => 'Choose from the most used therapy categories',
		'not_found'                      => 'No therapy categories found'
	);

	register_taxonomy(
		'therapy-categories',
		'therapies',
		array(
			'label' => __( 'Therapy Categories' ),
			'hierarchical' => false,
			'labels' => $labels,
			'public' => true,
			'query_var' => true,
			'show_in_nav_menus' => false,
			'show_tagcloud' => false,
			'show_admin_column' => true,
			'rewrite' => array(
					'slug' => 'therapy-categories',
					'with_front' => false
			)
		)
	);
}
*/
/*
add_action( 'init', 'create_resource_taxonomy' );
function create_resource_taxonomy() {
	$labels = array(
		'name'                           => 'Resource Categories',
		'singular_name'                  => 'Resource Category',
		'search_items'                   => 'Search Resource Categories',
		'all_items'                      => 'All Resource Categories',
		'edit_item'                      => 'Edit Resource Category',
		'update_item'                    => 'Update Resource Category',
		'add_new_item'                   => 'Add New Resource Category',
		'new_item_name'                  => 'New Resource Category Name',
		'menu_name'                      => 'Resource Categories',
		'view_item'                      => 'View Resource Category',
		'popular_items'                  => 'Popular Resource Category',
		'separate_items_with_commas'     => 'Separate resource categories with commas',
		'add_or_remove_items'            => 'Add or remove resource categories',
		'choose_from_most_used'          => 'Choose from the most used resource categories',
		'not_found'                      => 'No resource categories found'
	);

	register_taxonomy(
		'resource-categories',
		'resources',
		array(
			'label' => __( 'Resource Categories' ),
			'hierarchical' => true,
			'labels' => $labels,
			'public' => true,
			'query_var' => 'resource-categories',
			'show_in_nav_menus' => false,
			'show_tagcloud' => false,
			'show_admin_column' => true,
			'rewrite' => 
			array(
				'slug' => 'resources',
				
				'with_front' => true
			
			)
		)
	);
}*/