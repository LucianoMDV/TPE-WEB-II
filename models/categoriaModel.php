<?php
    class categoriaModel {
        private $db_coneccion;

        function __construct() {
            $this->db_coneccion = new PDO('mysql:host=localhost;'.'dbname=db_dulcinea;charset=utf8', 'root', ''); //nos conectamos a la base de datos db_dulcinea
        }

        function getCategorias() {
            $sentencia = $this->db_coneccion->prepare("SELECT * from categoria");
            $sentencia->execute();                                               // ejecutamos lo anterior
            return $sentencia->fetchAll(PDO::FETCH_OBJ);  
        }
        
        function getCategoria($id) {
            $sentencia = $this->db_coneccion->prepare("SELECT * from categoria WHERE id_categoria=?");
            $sentencia->execute(array($id));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
    }
?>