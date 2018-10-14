<?php

class Model {
    protected $db_coneccion;

    public function __construct() {
        // $db = $this->db_coneccion = new PDO('mysql:host=localhost;'.'dbname=db_dulcinea;charset=utf8', 'root', '');
       
        $servidor = "localhost";
        $nombreUsuario = "root";
        $password = "";
        $db = "db_dulcinea";
    
        $conexion = new mysqli($servidor, $nombreUsuario, $password);
        
        if ($conexion->connect_error) {
            die("conexion fallida: " . $conexion->connect_error);
        }
        $sql = "CREATE DATABASE db_dulcinea";
        if ($conexion->query($sql) === true) {
            // echo "Base de datos creada correctamente...";
            
            $conexion = new mysqli($servidor, $nombreUsuario, $password, $db);
            $sql = "CREATE TABLE `producto` (
                `id_producto` int(11) NOT NULL,
                `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
                `precio` decimal(10,2) NOT NULL,
                `descripcion` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
                `id_categoria` int(11) NOT NULL
                )";
            $conexion->query($sql);
            $sql = "CREATE TABLE `usuario` (
                `id_usuario` int(11) NOT NULL,
                `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
                `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
                `clave` varchar(200) COLLATE utf8_unicode_ci NOT NULL
            )";
            $conexion->query($sql);
            $sql = "CREATE TABLE `categoria` (
                `id_categoria` int(11) NOT NULL,
                `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
              )";
            $conexion->query($sql);
            $sql = "ALTER TABLE `categoria`
            ADD PRIMARY KEY (`id_categoria`)";
            $conexion->query($sql);
            $sql = "ALTER TABLE `producto`
            ADD PRIMARY KEY (`id_producto`),
            ADD KEY `id_categoria` (`id_categoria`)";
            $conexion->query($sql);
            $sql = "ALTER TABLE `usuario`
            ADD PRIMARY KEY (`id_usuario`)";
            $conexion->query($sql);
            $sql = "ALTER TABLE `categoria`
            MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5";
            $conexion->query($sql);
            $sql = "ALTER TABLE `producto`
            MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47";
            $conexion->query($sql);
            $sql = "ALTER TABLE `usuario`
            MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT";
            $conexion->query($sql);
            $sql = "ALTER TABLE `producto`
            ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`)";
            $conexion->query($sql);
            $sql = "INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
            (1, 'Torta'),
            (2, 'Budin'),
            (3, 'Sandwich'),
            (4, 'Alfajor')";
            $conexion->query($sql);
            $sql = "INSERT INTO `producto` (`id_producto`, `nombre`, `precio`, `descripcion`, `id_categoria`) VALUES
            ('', 'Jamon y queso', '200.00', 'Vale $100 la docena', 3),
            ('', 'Bombon', '200.00', 'La torta mas deliciosa!', 1),
            ('', 'Dulce de leche', '22.00', 'Una delicia de tapa de chocolate y relleno de dulce de leche bañado de chocolate negro.', 4),
            ('', 'Chaja', '150.00', 'Llévate la torta chaja al mejor precio!', 1),
            ('', 'Manzana', '22.00', 'Otra opción para variar de las delicias de Dulcinea!, relleno de manzana!', 4),
            ('', 'Primavera', '180.00', 'Nadie puede superar esta delicia!', 1),
            ('', 'Lemon pie', '130.00', 'Una buena porción para acompañar el mate!', 1),
            ('', 'Chocolate con chip', '80.00', 'Un budín que va perfecto con lo que quieras y es muy rico!', 2)";
            $conexion->query($sql);
            $hash = password_hash("12", PASSWORD_DEFAULT);
            $sql = "INSERT INTO `usuario`(`id_usuario`, `nombre`, `email`, `clave`) VALUES 
            ('','Manu','', '$hash')";

            if ($conexion->query($sql) === true) {
                // echo "tabla creada correctamente...";                
                $db = $this->db_coneccion = new PDO('mysql:host=localhost;'.'dbname=db_dulcinea;charset=utf8', 'root', '');
            } else {
                die("error al crear: " . $conexion->error);
            }
        } else {
            // die("error al crear base de datos: " . $conexion->error);
            $db = $this->db_coneccion = new PDO('mysql:host=localhost;'.'dbname=db_dulcinea;charset=utf8', 'root', '');
        }
    }
}