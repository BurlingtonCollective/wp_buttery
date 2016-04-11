<?php

function create_contact_post_type() {
    $labels = array(
        'name'               => _x('Contacts', 'post type general name'),
        'singular_name'      => _x('Contact', 'post type singular name'),
        'add_new'            => _x('Add New', 'Contact'),
        'add_new_item'       => __('Add New Contact'),
        'edit_item'          => __('Edit Contact'),
        'new_item'           => __('New Contact'),
        'all_items'          => __('All Contacts'),
        'view_item'          => __('View Contact'),
        'search_items'       => __('Search Contacts'),
        'not_found'          => __('No contact found'),
        'not_found_in_trash' => __('No contact found in the Trash'),
        'parent_item_colon'  => '',
        'menu_name'          => 'Contacts'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our contact specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array('title', 'thumbnail'),
        'has_archive'   => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'rewrite' => true,
        'taxonomies' => array('contact_types'),
    );

    register_post_type('contact', $args);
}

function contact_title ($title) {
    $screen = get_current_screen();
    if ('contact' == $screen->post_type) {
        $title = 'City';
    }

    return $title;
}

add_action('init', 'create_contact_post_type');
add_filter('enter_title_here', 'contact_title');
