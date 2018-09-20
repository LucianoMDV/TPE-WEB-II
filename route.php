<?php
require_once "controllers/productoController.php";
require_once "controllers/categoriaController.php";

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
    case 'guardarActualizarProducto':

        $controller = new productoController();
        $controller->guardarActualizarProducto();
        $controller->mostrarProductos();
        break;
    case 'borrarProducto':
        $controller = new productoController();
        $controller->eliminarProducto($partesURL[ID]);
        break;
}

// $controller = new categoriaController();
// $controller->mostrarCategorias();
?>