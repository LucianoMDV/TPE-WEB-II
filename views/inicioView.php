<?php
require_once "views/view.php";

    class inicioView extends View {

        function mostrarInicio($partial) {
            $this->smarty->assign("partial",$partial);
            $this->smarty->display("templates/inicio.tpl");
        }
    }
?>