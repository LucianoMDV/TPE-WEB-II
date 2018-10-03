<?php
define("HOME", 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/inicio');
define("PRODUCTO", 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/producto');
define("CATEGORIA", 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/categorias');

    class Controller {
        protected $view;
        protected $model;
        
        public function __construct() {

        }
    }

?>