<?php

function first_post_type() {
    register_post_type('team', array(
        'labels' => array(
            'name' => 'Team',
            'singular_name' => 'Team Member'
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}

add_action('init', 'first_post_type');
?>
