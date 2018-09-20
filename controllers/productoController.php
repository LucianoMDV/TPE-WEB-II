<?php
include_once "models/productoModel.php"; //lo incorporamos para poder hacer el option en verProductos.tpl
include_once "views/productoView.php";
include_once "controllers/controller.php";

class productoController extends Controller {

    private $modelCateg;
    
    public function __construct() {
        parent::__construct();
        $this->model = new productoModel();
        $this->view = new productoView();
        $this->modelCateg = new categoriaModel();

    }

    function mostrarProductos() {
        $productos = $this->model->getProductos();
        $categorias = $this->modelCateg->getCategorias();
        $this->view->mostrarProductos($productos, $categorias); 
    }

    function mostrarProducto($id) {
        // $modelProduc = new productoModel();
        $producto = $this->model->getProducto($id);
        if (!empty($producto)) {
            $this->view->mostrarProducto($producto);
        }
        else {
            $this->view->mostrarError();
        }
    }

    function guardarActualizarProducto() {
        // $modelProduc = new productoModel();

        // if (tiene id) {

        // }

        // if (noo tiene id) {
            
        if (isset($_POST['lista_tabla_nombre']) && isset($_POST['lista_tabla_precio']) && isset($_POST['lista_tabla_precio']) && isset($_POST['lista_tabla_descripcion']) && isset($_POST['buscar'])) {
            $nombre = $_POST['lista_tabla_nombre'];
            $precio = $_POST['lista_tabla_precio'];
            $descripcion = $_POST['lista_tabla_descripcion'];
            $id_categoria = $_POST['buscar'];
            $this->model->insertarProducto($nombre,$precio,$descripcion,$id_categoria);
        }
        // }

        header("Location: " . PRODUCTO); // no hace falta pero es para redireccionar cuando hago una accion.
    }

    function eliminarProducto($id_producto) {
        $this->model->eliminarProducto($id_producto);
        header("Location: " . PRODUCTO);
    }

    function editarProducto($id_producto) {
        header("Location: " . PRODUCTO);
    }
}
?>