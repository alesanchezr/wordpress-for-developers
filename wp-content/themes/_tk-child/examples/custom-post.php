<?php

    /**
     * Creating a custom post type "Course" for course managment (LMS)
     */
     
    add_action( 'init', 'create_custom_post_course' );
    function create_custom_post_course() {
        
        //Tell wordpress how to display the menu and the different options
        $labels = array(
            'name'               => _x( 'Courses', 'post type general name' ),
            'singular_name'      => _x( 'Course', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'Course' ),
            'add_new_item'       => __( 'Add New Course' ),
            'edit_item'          => __( 'Edit Course' ),
            'new_item'           => __( 'New Course' ),
            'all_items'          => __( 'All Courses' ),
            'view_item'          => __( 'View Course' ),
            'search_items'       => __( 'Search Courses' ),
            'not_found'          => __( 'No Courses found' ),
            'not_found_in_trash' => __( 'No Courses found in the Trash' ),
            'parent_item_colon'  => '',
            'menu_name'          => 'Courses'
        );     
        
        //Parameters used to create the post
        $args = array(
            'labels'        => $labels,
            'description'   => 'Displays courses',
            'public'        => true,
            'menu_position' => 3,
            'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
            'has_archive'   => true,
        );
        
        //This function will create the actual post
        register_post_type( 'course', $args );
    }