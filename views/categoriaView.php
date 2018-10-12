<?php
require_once "views/view.php";
require_once "models/categoriaModel.php";
require_once "libs/Smarty.class.php";

class categoriaView extends View {

    function mostrarCategorias($categorias, $partial) {
        $this->smarty->assign("categorias",$categorias);
        $this->smarty->assign("partial", $partial);
        $this->smarty->display("templates/categorias/verCategorias.tpl");   
    }

    function mostrarCategoriasAdm($categorias,$partial) {
        $this->smarty->assign("categorias",$categorias);
        $this->smarty->assign("partial", $partial);
        $this->smarty->display("templates/categorias/verCategoriasAdm.tpl");   
    }

    function mostrarCategoria($categoria, $productosCateg) {
        $this->smarty->assign("categoria",$categoria);
        $this->smarty->assign("productosCateg",$productosCateg);
        $this->smarty->display("templates/categorias/verCategoria.tpl");   
    }
}
?>