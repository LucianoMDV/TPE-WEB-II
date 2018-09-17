<?php
include_once "models/productoModel.php";
include_once "views/productoView.php";

class productoController {

    function mostrarProductos() {
        $modelProduc = new productoModel();
        $productos = $modelProduc->getProductos();
        $view = new productoView();
        $view->mostrarProductos($productos); 
    }
}
?>