<?php
    require_once "models/model.php";

class usuarioModel extends Model{

    function getUsuario($usuario) {
        $sentencia = $this->db_coneccion->prepare("SELECT * from usuario WHERE nombre = ?");
        $sentencia->execute(array($usuario));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }



}