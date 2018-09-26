<?php
require_once "models/productoModel.php";
require_once "libs/Smarty.class.php";

class productoView {
    private $basehref;

    function __construct() {
        $this->basehref = '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/';
    }

    function mostrarProductos($productos, $categorias) {
        $smarty = new Smarty();
        $smarty->assign("productos",$productos);
        $smarty->assign("categorias",$categorias);
        $smarty->assign("basehref", $this->basehref);
        // $smarty->assign("","");
        $smarty->display("templates/productos/verProductos.tpl");
    }

    function mostrarProducto($producto) {
        $smarty = new Smarty();
        $smarty->assign("producto",$producto);
        $smarty->assign("basehref", $this->basehref);
        // $smarty->assign("","");
        $smarty->display("templates/productos/verProducto.tpl");
    }

    function mostrarError() {
        $smarty = new Smarty();
        $smarty->assign("basehref", $this->basehref);
        $smarty->display("templates/productos/verError.tpl");
    }

    function crearEdit($id_producto, $categorias, $producto) {
        $smarty = new Smarty();
        $smarty->assign("basehref", $this->basehref);
        $smarty->assign("id_producto", $id_producto);
        $smarty->assign("producto", $producto);
        $smarty->assign("categorias", $categorias);
        $smarty->display("templates/productos/crearEdit.tpl");
    }
}
?>