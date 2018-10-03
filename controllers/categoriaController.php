<?php
require_once "models/categoriaModel.php";
require_once "views/categoriaView.php";
require_once "controllers/controller.php";
require_once "models/productoModel.php";

class categoriaController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view = new categoriaView;
        $this->model = new categoriaModel;
        $this->modelProduc = new productoModel;
    }

    function mostrarCategorias() {
        if (isset($_SESSION["usuario"])) {
            $categorias = $this->model->getCategorias();
            $this->view->mostrarCategoriasAdm($categorias);
        }
        else {
            $categorias = $this->model->getCategorias();
            $this->view->mostrarCategorias($categorias);
        }
         
    }

    function mostrarCategoria($id) {
        $categoria = $this->model->getCategoria($id); //falta hacer este metodo en el model
        $productosCategoria = $this->modelProduc->getProductosCateg($id);
        $this->view->mostrarCategoria($categoria, $productosCategoria);
    }

    function insertarCategoria() {
        if (isset($_POST['nombreCateg'])) {
            $nombre = $_POST['nombreCateg'];
            $this->model->insertarCategoria($nombre);
            header("Location: " . CATEGORIA);
        }
    }

    function eliminarCategoria($id) {
        $this->model->eliminarCategoria($id);
        header("Location: " . CATEGORIA);
    }
}
?>