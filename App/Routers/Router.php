<?php

    global $routers;

    $routers = [];

    $routers['/home']                    = '/Home/index';
    $routers['/notfound']                = '/NotFound/index';

    // $routers['/galeria/{id}/{titulo}']  = '/galeria/abrir/:id/:titulo';
    // $routers['/news/{id}'] = '/noticia/abrir/:id';
    // $routers['/{titulo}'] = '/noticia/abrirtitulo/:titulo';