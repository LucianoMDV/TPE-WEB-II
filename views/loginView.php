<?php
require_once "views/view.php";
require_once "libs/Smarty.class.php";

class loginView extends View {

    function mostrarLogin($error, $partial) {
        $this->smarty->assign("error", $error);
        $this->smarty->assign("partial",$partial);
        $this->smarty->display("templates/login.tpl");
    }
}
?>