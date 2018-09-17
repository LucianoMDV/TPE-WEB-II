<?php
require_once "controllers/productoController.php";
require_once "controllers/categoriaController.php";

$controller = new productoController();
$controller->mostrarProductos();

// $controller = new categoriaController();
// $controller->mostrarCategorias();
?>