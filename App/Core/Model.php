<?php

    namespace Core;

    class Model
    {

        private $host = DB_HOST;
        private $name = DB_NAME;
        private $user = DB_USER;
        private $pass = DB_PASS;

        protected $dbh;

        public function __construct()
        {
            //Set dsn
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->name.';charset=utf8;';
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            // Create PDO Instance
            try {
                $this->dbh = new PDO($dsn, $this->user, $this->pass);
                $this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }

    }