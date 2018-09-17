<?php
include_once "models/categoriaModel.php";
include_once "views/categoriaView.php";

class categoriaController {

    function mostrarCategorias() {
        $modelCateg = new categoriaModel();
        $categorias = $modelCateg->getCategorias();
        $view = new categoriaView();
        $view->mostrarCategorias($categorias); 
    }
}
?>