<?php
    require_once "models/model.php";

    class categoriaModel extends Model{

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

        function insertarCategoria($nombre) {
            $sentencia = $this->db_coneccion->prepare("INSERT INTO categoria(nombre) VALUES(?)");
            $sentencia->execute(array($nombre));
        }

        function eliminarCategoria($id) {
            $sentencia = $this->db_coneccion->prepare("DELETE from categoria WHERE id_categoria = ?");
            $sentencia->execute(array($id));
        }
    }
?>