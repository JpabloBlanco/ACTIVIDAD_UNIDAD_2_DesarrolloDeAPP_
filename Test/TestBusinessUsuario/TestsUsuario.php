<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Contracts/IGuardarUsuarioService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Business/GuardarUsuarioService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Contracts/IUsuariosRepository.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Execptions/EntityPreexistingException.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Infrastructure/Repository/UsuarioRepository.php";
class TestsUsuario
{
    public function testsGuardar(): void
    {
        $numero_identificacion = 10;
        $tipo_identificacion = 'Cédula de ciudadanía';
        $contrasena = '000000000111111111';
        $repetirContrasena = '000000000111111111';
        $pregunta_recordar_contrasena = 'Nombre de tu primera mascota';
        $respuesta_recuperar_contrasena = 'Firulais';
        $primer_nombre = 'Cero';
        $segundo_nombre = "uno";
        $primer_apellido = 'Uno';
        $segundo_apellido = "hola";
        $genero = 'Masculino';
        $email = 'cerodiez@gmail.com';
        $numero_telefono = 9;
        $foto = "foto.png";
        $rol = 'Usuario';
        $pais = 'Colombia';
        $ciudad = 'Cartagena';

        $usuarioModel = new UsuarioModel(
            $numero_identificacion,
            $tipo_identificacion,
            $contrasena,
            $repetirContrasena,
            $pregunta_recordar_contrasena,
            $respuesta_recuperar_contrasena,
            $primer_nombre,
            $segundo_nombre,
            $primer_apellido,
            $segundo_apellido,
            $genero,
            $email,
            $numero_telefono,
            $foto,
            $rol,
            $pais,
            $ciudad
        );
        $usuarioRepository = new UsuarioRepository();
        $guardarUsuarioService = new GuardarUsuarioService($usuarioRepository);
        try {
            $total = $guardarUsuarioService->guardarUsuario($usuarioModel);
            echo "TOTAL USERS: $total";
        } catch (EntityPreexistingException $e) {
            echo $e->getMessage();
        }
    }
    
}

$TestsUsuario = new TestsUsuario();
$TestsUsuario->testsGuardar();