<?php

function create_profile_post_type() {
    $labels = array(
        'name'               => _x('Profiles', 'post type general name'),
        'singular_name'      => _x('Profile', 'post type singular name'),
        'add_new'            => _x('Add New', 'Profile'),
        'add_new_item'       => __('Add New Profile'),
        'edit_item'          => __('Edit Profile'),
        'new_item'           => __('New Profile'),
        'all_items'          => __('All Profiles'),
        'view_item'          => __('View Profile'),
        'search_items'       => __('Search Profiles'),
        'not_found'          => __('No profile found'),
        'not_found_in_trash' => __('No profile found in the Trash'),
        'parent_item_colon'  => '',
        'menu_name'          => 'Profiles'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our profile specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array('title', 'editor'),
        'has_archive'   => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'rewrite' => true,
        'taxonomies' => array('profile_types'),
    );

    register_post_type('profile', $args);
}

add_action('init', 'create_profile_post_type');
