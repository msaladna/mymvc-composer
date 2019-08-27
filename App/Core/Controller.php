<?php

    namespace Core;

    class Controller
    {

        public function view($viewName, $data = [])
        {
            extract($data);
            if (file_exists('../App/Views/'.$viewName.'.php')){
                require_once '../App/Views/'.$viewName.'.php';
            } else {
                die('This view doesn\'t exists');
            }
        }

        public function model($model)
        {
            // Require model file
            require_once '../App/Models/'.$model.'.php';
            // Instantiate model
            return new $model;
        }

    }