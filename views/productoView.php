<?php
require_once "views/view.php";
require_once "models/productoModel.php";
require_once "libs/Smarty.class.php";

class productoView extends View {

    function mostrarProductos($productos, $categorias) {
        $this->smarty->assign("productos",$productos);
        $this->smarty->assign("categorias",$categorias);
        $this->smarty->display("templates/productos/verProductos.tpl");
    }

    function mostrarProductosAdm($productos, $categorias) {
        $this->smarty->assign("productos",$productos);
        $this->smarty->assign("categorias",$categorias);
        $this->smarty->display("templates/productos/verProductosAdm.tpl");
    }

    function mostrarProducto($producto) {
        $this->smarty->assign("producto",$producto);
        $this->smarty->display("templates/productos/verProducto.tpl");
    }

    function mostrarError() {
        $this->smarty->display("templates/productos/verError.tpl");
    }

    function crearEdit($id_producto, $categorias, $producto) {
        $this->smarty->assign("id_producto", $id_producto);
        $this->smarty->assign("producto", $producto);
        $this->smarty->assign("categorias", $categorias);
        $this->smarty->display("templates/productos/crearEdit.tpl");
    }
}
?>