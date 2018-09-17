<?php
class productoModel {
    private $db_coneccion;

    function __construct() {
        $this->db_coneccion = new PDO('mysql:host=localhost;'.'dbname=db_dulcinea;charset=utf8', 'root', ''); //nos conectamos a la base de datos db_dulcinea
    }

    function getProductos() {
        $sentencia = $this->db_coneccion->prepare("select * from producto"); // preparamos la seleccion de la tabla producto
        $sentencia->execute();                                               // ejecutamos lo anterior
        return $sentencia->fetchAll(PDO::FETCH_OBJ);                       // retornamos un arreglo associativo de la tabla producto
    }
    function getProducto($id) {

    }
    function insertarProducto() {
        //aca hay que usar pdo seguro para insertar productos
    }
    function modificarProducto() {

    }
    function eliminarProducto() {

    }
}
?>