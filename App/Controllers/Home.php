<?php

    namespace Controllers;
    use \Core\Controller;

    class Home extends Controller
    {

        public function index()
        {

            $data = [];

            $this->view('home', $data);
        }

    }