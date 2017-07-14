<?php

    /**
     * This is an example of usage for the Eloquent ORM, for more documentation go to:
     * https://github.com/tareq1988/wp-eloquent
     */

    //This is how your instanciate the database to start using it
    $db = \WeDevs\ORM\Eloquent\Database::instance();
    
    //Selecting the user with ID = 1
    var_dump( $db->table('users')->find(1) );
    
    //Selecting all the users with ID = 1
    var_dump( $db->select('SELECT * FROM wp_users WHERE id = ?', [1]) );
    
    //Selecting all the users with username = john
    var_dump( $db->table('users')->where('user_login', 'john')->first() );