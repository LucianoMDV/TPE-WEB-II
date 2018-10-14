<?php
require_once "controllers/productoController.php";
require_once "controllers/categoriaController.php";
require_once "controllers/loginController.php";
require_once "views/inicioView.php";

// constantes
define('ACTION', 0); 
define('ID', 1);

// si no indica "action" forzamos asi entra al default
if (!isset($_GET['action']))
    $_GET['action'] = '';

// parsea (separa) la url (si viene "sumar/5/8" => [sumar, 5, 8])
$action = $_GET['action'];
$partesURL = explode("/", $action);

// var_dump($_POST);
// var_dump($_POST["lista_tabla_nombre"]);
// var_dump($_POST["lista_tabla_cantidad"]);
// var_dump($_POST["lista_tabla_precio"]);
// var_dump($_POST["buscar"]);

// decide que acción tomar en base a la url
switch ($partesURL[ACTION]) {
    case "producto":
        $controller = new productoController();
        if (isset($partesURL[ID])) {    
            $controller->mostrarProducto($partesURL[ID]);
        }
        else {
            $controller->mostrarProductos();
        }
    break;
    case 'insertarProducto':
        $controller = new productoController();
        $controller->insertarProducto($partesURL[ID]);
    break;
    case 'insertarCategoria':
        $controller = new categoriaController();
        $controller->insertarCategoria();
    break;
    case 'crearEdit':
        $controller = new productoController();
        $controller->crearEdit($partesURL[ID]);
    break;
    case 'editarProducto':
        $controller = new productoController();
        $controller->editarProducto($partesURL[ID]);
    break;
    case 'eliminarProducto':
        $controller = new productoController();
        $controller->eliminarProducto($partesURL[ID]);
    break;
    case 'eliminarCategoria':
        $controller = new categoriaController();
        $controller->eliminarCategoria($partesURL[ID]);
    break;
    case 'inicio': 
        $view = new inicioView();
        $view->mostrarInicio();
    break;
    case 'categorias':
        $controller = new categoriaController();
        if (isset($partesURL[ID])) {    
            $controller->mostrarCategoria($partesURL[ID]);
        }
        else {
            $controller->mostrarCategorias();
        }
    break;
    case 'login':
        $controller = new loginController();
        $controller->mostrarLogin();
    break;
    case 'verificarLogin':
        $controller = new loginController();
        $controller->verificarLogin();
    break;
    case 'logout' :
        $controller = new loginController();
        $controller->cerrarSesion();
    break;
    default:
        $view = new inicioView();
        $view->mostrarInicio();
    break;
}