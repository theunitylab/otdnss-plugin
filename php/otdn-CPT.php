<?php

// Register Custom Post Type
function otdn_members() {

	$labels = array(
		'name'                  => _x( 'OTDN Members', 'Post Type General Name', 'members' ),
		'singular_name'         => _x( 'OTDN Member', 'Post Type Singular Name', 'members' ),
		'menu_name'             => __( 'OTDN Members', 'members' ),
		'name_admin_bar'        => __( 'OTDN Member', 'members' ),
		'archives'              => __( 'OTDN Member Archives', 'members' ),
		'parent_item_colon'     => __( 'Parent Item:', 'members' ),
		'all_items'             => __( 'All OTDN Members', 'members' ),
		'add_new_item'          => __( 'Add New OTDN Member', 'members' ),
		'add_new'               => __( 'Add New OTDN Member', 'members' ),
		'new_item'              => __( 'New OTDN Member', 'members' ),
		'edit_item'             => __( 'Edit OTDN Member', 'members' ),
		'update_item'           => __( 'Update OTDN Member', 'members' ),
		'view_item'             => __( 'View OTDN Member', 'members' ),
		'search_items'          => __( 'Search OTDN Members', 'members' ),
		'not_found'             => __( 'Not found', 'members' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'members' ),
		'featured_image'        => __( 'Featured Image', 'members' ),
		'set_featured_image'    => __( 'Set featured image', 'members' ),
		'remove_featured_image' => __( 'Remove featured image', 'members' ),
		'use_featured_image'    => __( 'Use as featured image', 'members' ),
		'insert_into_item'      => __( 'Insert into OTDN Member', 'members' ),
		'uploaded_to_this_item' => __( 'Uploaded to this OTDN Member', 'members' ),
		'items_list'            => __( 'OTDN Members list', 'members' ),
		'items_list_navigation' => __( 'OTDN Members list navigation', 'members' ),
		'filter_items_list'     => __( 'Filter OTDN Members list', 'members' ),
	);
	$args = array(
		'label'                 => __( 'OTDN Member', 'members' ),
		'description'           => __( 'This is the custom post type for the input and display of OTDN Members on the new OTDN website', 'members' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
        'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'otdn_members', $args );

}
add_action( 'init', 'otdn_members', 0 );

?>