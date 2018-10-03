<?php
require_once "views/view.php";
require_once "libs/Smarty.class.php";

class loginView extends View {

    function mostrarLogin($error = "") {
        $this->smarty->assign("error", $error);
        $this->smarty->display("templates/login.tpl");
    }
}
?>