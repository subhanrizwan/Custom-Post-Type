<?php
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
		'has_archieve' => true,
        'publicly_queryable' => false,
        'rewrite' => array(
            'slug' => 'our-team'
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category', 'post_tag')
    ));
}

add_action('init', 'team_post_type');
?>