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

define('APP_NAME',"The PORT");
define('APP_DESC', "The gateway to online services and applications for the Lycean Community.");

/** true=show errors, false=hide errors**/
define('DEBUG', true);