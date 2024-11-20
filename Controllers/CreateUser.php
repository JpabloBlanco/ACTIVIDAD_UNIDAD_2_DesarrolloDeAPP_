<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Contracts/IGuardarUsuarioService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Contracts/IUsuariosRepository.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Execptions/EntityPreexistingException.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Infrastructure/Repository/UsuarioRepository.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Business/GuardarUsuarioService.php";

//http://192.168.1.32/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Controllers/CreateUser.php

class CreateUser
{
    private $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }


    public function guardarUsuario()
    {
        try {

            $numero_identificacion = $_POST["numero_identificacion"];
            $tipo_identificacion = $_POST["tipo_identificacion"];
            $contrasena = $_POST["password"];
            $repretir_contrasena = $_POST["repetirpassword"];
            $pregunta_recordar_contrasena = $_POST["pregunta_recordar_contrasena"];
            $respuesta_recuperar_contrasena = $_POST["respuesta_recuperar_contrasena"];
            $primer_nombre = $_POST["primer_nombre"];
            $segundo_nombre = isset($_POST["segundo_nombre"]) ? $_POST["segundo_nombre"] : null;
            $primer_apellido = $_POST["primer_apellido"];
            $segundo_apellido = isset($_POST["segundo_apellido"]) ? $_POST["segundo_apellido"] : null;
            $genero = isset($_POST["genero"]) ? $_POST["genero"] : null;
            $email = $_POST["email"];
            $numero_telefono = isset($_POST["numero_telefono"]) ? (int) $_POST["numero_telefono"] : null;
            $foto = "png.jpg";
            $rol = $_POST["rol"];
            $pais = $_POST["pais"];
            $ciudad = $_POST["ciudad"];
            
            $usuarioModel = new UsuarioModel($numero_identificacion, $tipo_identificacion, $contrasena,$repretir_contrasena, $pregunta_recordar_contrasena, $respuesta_recuperar_contrasena, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $genero, $email, $numero_telefono, $foto, $rol, $pais, $ciudad);

            $guardarUsuarioService = new GuardarUsuarioService($this->usuarioRepository);
            $total = $guardarUsuarioService->guardarUsuario($usuarioModel);

            $message = "Usuario Guardado, Total: $total";
            header("Location: ../Views/Forms/Usuario/Create.php?message=$message");
            exit;
        } catch (EntityPreexistingException $e) {
            $message = $e->getMessage();
            header("Location: ../Views/Forms/Usuario/Create.php?message=$message");
            exit;
        } catch (Exception $e) {
            $message = $e->getMessage();
            header("Location: ../Views/Forms/Usuario/Create.php?message=$message");
            exit;
        }
    }
}

$usuarioRepository = new UsuarioRepository();
$controlador = new CreateUser($usuarioRepository);
$controlador->guardarUsuario();