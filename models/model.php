<?php

class Model {
    protected $db_coneccion;

    public function __construct() {
        $db = $this->db_coneccion = new PDO('mysql:host=localhost;'.'dbname=db_dulcinea;charset=utf8', 'root', '');
        
        // if (!($db)) {  "queda que se importe la base de datos"        
        //     $db;    
        // }
    }
}
