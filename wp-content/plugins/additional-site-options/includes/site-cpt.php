<?php
// Functionality pertaining to Custom Post Types

// // Register Custom Post Type
// function mg_news_post_type() {

// 	$labels = array(
// 		'name'                  => _x( 'In the News', 'Post Type General Name', 'text_domain' ),
// 		'singular_name'         => _x( 'News Article', 'Post Type Singular Name', 'text_domain' ),
// 		'menu_name'             => __( 'In the News', 'text_domain' ),
// 		'name_admin_bar'        => __( 'News', 'text_domain' ),
// 		'archives'              => __( 'News Archives', 'text_domain' ),
// 		'parent_item_colon'     => __( 'Parent News Article:', 'text_domain' ),
// 		'all_items'             => __( 'All News', 'text_domain' ),
// 		'add_new_item'          => __( 'Add News Article', 'text_domain' ),
// 		'add_new'               => __( 'Add News Article', 'text_domain' ),
// 		'new_item'              => __( 'New Article', 'text_domain' ),
// 		'edit_item'             => __( 'Edit News Article', 'text_domain' ),
// 		'update_item'           => __( 'Update News Article', 'text_domain' ),
// 		'view_item'             => __( 'View News Article', 'text_domain' ),
// 		'search_items'          => __( 'Search News', 'text_domain' ),
// 		'not_found'             => __( 'News article not found', 'text_domain' ),
// 		'not_found_in_trash'    => __( 'News article not found in Trash', 'text_domain' ),
// 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
// 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
// 		'insert_into_item'      => __( 'Insert into News Article', 'text_domain' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this News Article', 'text_domain' ),
// 		'items_list'            => __( 'News list', 'text_domain' ),
// 		'items_list_navigation' => __( 'News list navigation', 'text_domain' ),
// 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
// 	);
// 	$rewrite = array(
// 		'slug'          			=> 'in-the-news',
// 		'with_front'          => true,
// 		'pages'               => true,
// 		'feeds'               => true,
// 	);
// 	$args = array(
// 		'label'               => __( 'In the News', 'text_domain' ),
// 		'labels'              => $labels,
// 		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'excerpt', ),
// 		'hierarchical'        => false,
// 		'public'              => true,
// 		'show_ui'             => true,
// 		'show_in_menu'        => true,
// 		'show_in_nav_menus'   => true,
// 		'show_in_admin_bar'   => true,
// 		'menu_position'       => 50,
// 		'menu_icon'           => 'dashicons-megaphone',
// 		'can_export'          => true,
// 		'has_archive'         => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable'  => true,
// 		'query_var'           => '',
// 		'rewrite'             => $rewrite,
// 		'capability_type'     => 'post',
// 	);
// 	register_post_type( 'news', $args );

// }
// // Hook into the 'init' action
// add_action( 'init', 'mg_news_post_type', 0 );
