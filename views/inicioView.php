<?php
    class inicioView {

        private $basehref;

        function __construct() {
            $this->basehref = '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/';
        }

        function mostrarInicio() {
            $smarty = new Smarty();
            $smarty->assign("basehref", $this->basehref);
            $smarty->display("templates/inicio.tpl");
        }
    }
?>