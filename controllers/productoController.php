<?php
include_once "models/productoModel.php";
include_once "views/productoView.php";

class productoController {

    function mostrarProductos() {
        $modelProduc = new productoModel();
        $productos = $modelProduc->getProductos();
        $modelCateg = new categoriaModel();
        $categorias = $modelCateg->getCategorias();
        $view = new productoView();
        $view->mostrarProductos($productos, $categorias); 
    }

    function mostrarProducto($id) {
        $modelProduc = new productoModel();
        $producto = $modelProduc->getProducto($id);
        $view = new productoView();
        if (!empty($producto)) {
            $view->mostrarProducto($producto);
        }
        else {
            $view->mostrarError();
        }
    }

    function insertarProducto() {
        $modelProduc = new productoModel();
        if (isset($_POST['lista_tabla_nombre']) && isset($_POST['lista_tabla_precio']) && isset($_POST['lista_tabla_precio']) && isset($_POST['lista_tabla_descripcion']) && isset($_POST['buscar'])) {
            $nombre = $_POST['lista_tabla_nombre'];
            $precio = $_POST['lista_tabla_precio'];
            $descripcion = $_POST['lista_tabla_descripcion'];
            $id_categoria = $_POST['buscar'];
            $modelProduc->insertarProducto($nombre,$precio,$descripcion,$id_categoria);
        }
    }
}
?>