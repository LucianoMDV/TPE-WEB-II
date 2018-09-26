<?php
require_once "models/categoriaModel.php";
require_once "libs/Smarty.class.php";

class categoriaView {
    private $basehref;

    function __construct() {
        $this->basehref = '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/';
    }

    function mostrarCategorias($categorias) {
        $smarty = new Smarty();
        $smarty->assign("categorias",$categorias);
        $smarty->assign("basehref", $this->basehref);
        // $smarty->assign("","");
        $smarty->display("templates/categorias/verCategorias.tpl");   
    }

    function mostrarCategoria($categoria, $productosCateg) {
        $smarty = new Smarty();
        $smarty->assign("categoria",$categoria);
        $smarty->assign("productosCateg",$productosCateg);
        $smarty->assign("basehref", $this->basehref);
        // $smarty->assign("","");
        $smarty->display("templates/categorias/verCategoria.tpl");   
    }
}
?>