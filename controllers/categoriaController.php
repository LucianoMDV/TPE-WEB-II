<?php
include_once "models/categoriaModel.php";
include_once "views/categoriaView.php";
include_once "controllers/controller.php";

class categoriaController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view = new categoriaView;
        $this->model = new categoriaModel;

    }

    function mostrarCategorias() {
        $categorias = $this->model->getCategorias();
        $this->view->mostrarCategorias($categorias); 
    }
}
?>