<?php

    session_start();

    require_once '../App/Config/config.php';
    require_once '../App/Helpers/redirect_helper.php';
    require_once '../App/Routers/Router.php';

    require_once "../vendor/autoload.php";

    // spl_autoload_register(function($class){
        
    //     if (file_exists('../App/Controllers/'.$class.'.php')){

    //         require_once '../App/Controllers/'.$class.'.php';

    //     } elseif (file_exists('../App/Core/'.$class.'.php')){

    //         require_once '../App/Core/'.$class.'.php';

    //     }
    // });