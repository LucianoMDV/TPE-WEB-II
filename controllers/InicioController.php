<?php

class inicioController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view = new inicioView();

    }

    function mostrarInicio() {
        // var_dump($_GET["partial"]);
        if(isset($_GET["partial"])) {
            $partial = true;
        }
        $this->view->mostrarInicio($partial);
    }
}
?>