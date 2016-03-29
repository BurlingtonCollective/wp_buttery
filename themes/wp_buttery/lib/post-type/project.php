<?php

function create_project_post_type() {
    $labels = array(
        'name'               => _x('Projects', 'post type general name'),
        'singular_name'      => _x('Project', 'post type singular name'),
        'add_new'            => _x('Add New', 'Project'),
        'add_new_item'       => __('Add New Project'),
        'edit_item'          => __('Edit Project'),
        'new_item'           => __('New Project'),
        'all_items'          => __('All Projects'),
        'view_item'          => __('View Project'),
        'search_items'       => __('Search Projects'),
        'not_found'          => __('No project found'),
        'not_found_in_trash' => __('No project found in the Trash'),
        'parent_item_colon'  => '',
        'menu_name'          => 'Projects'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our project specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array('title', 'thumbnail', 'page-attributes'),
        'has_archive'   => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'rewrite' => true,
        'taxonomies' => array('project_types'),
    );

    register_post_type('project', $args);
}

add_action('init', 'create_project_post_type');
