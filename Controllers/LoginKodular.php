<?php
// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(0);
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Contracts/IBuscarUsuarioService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Contracts/IUsuariosRepository.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Execptions/EntityPreexistingException.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Infrastructure/Repository/UsuarioRepository.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Business/BuscarUsuarioService.php";
//http://192.168.1.32/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Controllers/LoginKodular.php

class LoginKodular
{
    private $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }


    public function validarUsuario()
    {
        try {

            $username = $_POST["username"];
            $password = $_POST["password"];

            // $username = "123456786";
            // $password = "111111111111";

            //$guardarUsuarioService = new GuardarUsuarioService($this->usuarioRepository);
            //$total = $guardarUsuarioService->guardarUsuario($usuarioModel);

            $buscarUsuarioservice = new BuscarUsuarioService($this->usuarioRepository);
            $usuario = $buscarUsuarioservice->buscarUsuario($username);

            if ($usuario) {
                if ($password == $usuario->getContrasena()) {
                    //echo "Inicio de sesión exitoso. ¡Bienvenido, " . $usuario->getUsername() . "!";
                    echo json_encode(["success" => true, "message" => "Inicio de sesión exitoso"]);
                } else {
                    //echo "Contraseña incorrecta";
                    echo json_encode(["success" => false, "message" => "Usuario o contraseña incorrectos"]);
                }
            } else {
                echo "Usuario no encontrado";
            }

        } catch (EntityPreexistingException $e) {
            $message = $e->getMessage();
            
        }
    }
}

$usuarioRepository = new UsuarioRepository();
$controlador = new LoginKodular($usuarioRepository);
$controlador->validarUsuario();
