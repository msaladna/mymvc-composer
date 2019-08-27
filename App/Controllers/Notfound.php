<?php

    namespace Controllers;
    use \Core\Controller;

    class Notfound extends Controller
    {
        public function index()
        {
            $data = [];
            $this->view('404', $data);
        }
    }