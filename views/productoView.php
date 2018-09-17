<?php
include_once "models/productoModel.php";
include_once "libs/Smarty.class.php";

class productoView {
    private $basehref;

    function __construct() {
        $this->basehref = '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/';
    }

    function mostrarProductos($productos) {
        $smarty = new Smarty();
        $smarty->assign("productos",$productos);
        $smarty->assign("basehref", $this->basehref);
        // $smarty->assign("","");
        $smarty->display("templates/verProductos.tpl");
        
    }
}
?>