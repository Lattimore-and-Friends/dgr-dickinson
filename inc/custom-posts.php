<?php
/**
 * Custom posts for use with this theme
 *
 *
 */
// Register Custom Post Type
function room_custom_post_type() {

	$labels = array(
		'name'                  => 'Rooms',
		'singular_name'         => 'Room',
		'menu_name'             => 'Rooms',
		'name_admin_bar'        => 'Room',
		'archives'              => 'Room Archives',
		'attributes'            => 'Room Attributes',
		'parent_item_colon'     => 'Parent Room:',
		'all_items'             => 'All Rooms',
		'add_new_item'          => 'Add New Room',
		'add_new'               => 'Add New',
		'new_item'              => 'New Room',
		'edit_item'             => 'Edit Room',
		'update_item'           => 'Update Room',
		'view_item'             => 'View Room',
		'view_items'            => 'View Rooms',
		'search_items'          => 'Search Room',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into room',
		'uploaded_to_this_item' => 'Uploaded to this room',
		'items_list'            => 'Rooms list',
		'items_list_navigation' => 'Rooms list navigation',
		'filter_items_list'     => 'Filter rooms list',
	);
	$rewrite = array(
		'slug'                  => 'rooms',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Room',
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'room', $args );

}
add_action( 'init', 'room_custom_post_type', 0 );