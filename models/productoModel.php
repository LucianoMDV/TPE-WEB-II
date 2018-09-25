<?php
class productoModel {
    private $db_coneccion;

    function __construct() {
        $this->db_coneccion = new PDO('mysql:host=localhost;'.'dbname=db_dulcinea;charset=utf8', 'root', ''); //nos conectamos a la base de datos db_dulcinea
    }

    function getProductos() {
        $sentencia = $this->db_coneccion->prepare("SELECT producto.*, categoria.nombre as nombre_categoria from producto join categoria on producto.id_categoria=categoria.id_categoria"); // preparamos la seleccion de la tabla producto
        $sentencia->execute();                                               // ejecutamos lo anterior
        return $sentencia->fetchAll(PDO::FETCH_OBJ);                         // retornamos un arreglo associativo de la tabla producto
    }
    function getProducto($id) {
        $sentencia = $this->db_coneccion->prepare("SELECT * from producto WHERE id_producto = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    function insertarProducto($nombre,$precio,$descripcion,$id_categoria) {
        $sentencia = $this->db_coneccion->prepare("INSERT INTO producto(nombre,precio,descripcion,id_categoria) VALUES(?,?,?,?)");
        $sentencia->execute(array($nombre,$precio,$descripcion,$id_categoria));
    }
    function editarProducto($nombre,$precio,$descripcion,$id_categoria,$id_producto) {
        $sentencia = $this->db_coneccion->prepare("UPDATE producto SET nombre=?, precio=?, descripcion=?, id_categoria=? WHERE id_producto=?");
        $sentencia->execute(array($nombre,$precio,$descripcion,$id_categoria,$id_producto));
    }
    function eliminarProducto($id_producto) {
        $sentencia = $this->db_coneccion->prepare("DELETE from producto where id_producto = ?");
        $sentencia->execute(array($id_producto));
    }
}
?>