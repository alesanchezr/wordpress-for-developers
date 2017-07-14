<?php

    /**
     * DO NOT DELETE!!!
     * Autoload for PHP Composer and definition of the ABSPATH
     */
     
     //defining the absolute path for the wordpress instalation.
    if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');
    
    //including composer autoload
    require ABSPATH."vendor/autoload.php";

    /**
     * DO NOT DELETE!!!
     * Here we are importing the Styles of the parent theme and re-using them
     * for our own project, please don't edit this hook/function
     */
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    }
    
    /** 
     * EXAMPLES!
     * Uncomment any of these examples to see them working.
     */
     
     //require('examples/eloquent-orm.php'); //Using the best PHP based ORM
     //require('examples/custom-post.php'); //Create a custom post type

    /** 
     * WRITE YOUR OWN CODE BELOW THIS LINE
     */
     
?>