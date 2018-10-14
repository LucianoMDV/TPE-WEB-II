<?php
require_once "views/view.php";

    class inicioView extends View {

        function mostrarInicio() {
            $this->smarty->display("templates/inicio.tpl");
        }
    }