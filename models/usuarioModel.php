<?php

class usuarioModel {

    private $db_coneccion;

    function __construct() {
        $this->db_coneccion = new PDO('mysql:host=localhost;'.'dbname=db_dulcinea;charset=utf8', 'root', ''); //nos conectamos a la base de datos db_dulcinea
    }

    function getUsuario($usuario) {
        $sentencia = $this->db_coneccion->prepare("SELECT * from usuario WHERE nombre = ?");
        $sentencia->execute(array($usuario));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }



}