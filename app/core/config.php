<?php

if($_SERVER['SERVER_NAME'] == 'localhost') {


    // DATABASE CONFIGURATION
    define('DBNAME','my_portal');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBDRIVER','');

    define('ROOT', 'http://localhost/univ-portal/public');

} else {

    // DATABASE CONFIGURATION
    define('DBNAME','my_portal');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBDRIVER','');


    define('ROOT', 'https://www.website.com');
}

define('APP_NAME',"My Website");
define('APP_DESC', "A simple PHP framework that utilizes the MVC Structure");

/** true=show errors, false=hide errors**/
define('DEBUG', true);