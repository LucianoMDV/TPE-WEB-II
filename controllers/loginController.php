<?php
require_once "controllers/controller.php";
require_once "views/loginView.php";
require_once "models/usuarioModel.php";

class loginController extends Controller {

    function __construct() {
        parent::__construct();
        $this->view = new loginView;
        $this->model = new usuarioModel;
    }

    function mostrarLogin() {
        $this->view->mostrarLogin();   
    }
    function verificarLogin() {
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        
        if (!empty($usuario) && !empty($contraseña)) {
            $usuarioDB = $this->model->getUsuario($usuario);
            if (isset($usuarioDB) && password_verify($contraseña, $usuarioDB->clave)) {
                    session_start();
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['ID'] = $usuarioDB->id_usuario;
                    header("Location: " . HOME);
                    die();
            } else {
                    $error = "Usuario y/o contraseña incorrecta";
                    $this->view->mostrarLogin($error);
            }
        }
    }

    function cerrarSesion() {
        session_start();
        session_destroy();
        header("Location: " . HOME);
        // YOU WILL --->
        die();
    }
}
?>