<?php

    require_once 'environment.php';


    if (ENVIRONMENT === 'development'){

        // Localhost

        define('DB_HOST', 'localhost');
        define('DB_NAME', '_YOUR_DBNAME_');
        define('DB_USER', '_YOUR_USER_');
        define('DB_PASS', '_YOUR_PASS_');

        // App Root
        define('APPROOT', dirname(dirname(__FILE__)));
        // URL Root
        define('URLROOT', '_YOUR_URL_');
        // Site Name
        define('SITENAME', '_YOUR_SITENAME_');
        // App Version
        define('APPVERSION', '_YOUR_VERSION_');

    } else {

        // Online Server

        define('DB_HOST', 'localhost');
        define('DB_NAME', '_YOUR_DBNAME_');
        define('DB_USER', '_YOUR_USER_');
        define('DB_PASS', '_YOUR_PASS_');

        // App Root
        define('APPROOT', dirname(dirname(__FILE__)));
        // URL Root
        define('URLROOT', '_YOUR_URL_');
        // Site Name
        define('SITENAME', '_YOUR_SITENAME_');
        // App Version
        define('APPVERSION', '_YOUR_VERSION_');
    }