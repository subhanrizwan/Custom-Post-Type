<?php
// Custom Post Type
function team_post_type() {
    register_post_type('team', array(
        'labels' => array(
            'name' => 'Team',
            'singular_name' => 'Team Member',
			'all_items' => 'All Team',
			'add_new' => 'Add Team',
			'add_new_item' => 'Add Team'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 20,
		'has_archive' => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'our-team'
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
//         'taxonomies' => array('category', 'post_tag')
    ));
}
add_action('init', 'team_post_type');


function create_team_taxonomy(){
	register_taxonomy('designation', 'team', array(
	
		'labels' => array(
		  'name' => 'Designation',
		  'singular_name' => 'Designation',
		),
		'hierarchical'=>true,
		'public' => true
	));
}
add_action('init', 'create_team_taxonomy');

?>