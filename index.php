<?php
function team_post_type() {
    register_post_type('team', array(
        'labels' => array(
            'name' => 'Team',
            'singular_name' => 'Team Member'
        ),
        'public' => true,
		
        'supports' => array('title', 'editor', 'thumbnail')
    ));
    'menu_icon' => 'dashicons-groups',
	'menu_position' => 20,
}

add_action('init', 'team_post_type');
?>
