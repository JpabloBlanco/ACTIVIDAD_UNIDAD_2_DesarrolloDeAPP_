<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Infrastructure/Libs/Config.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";
class UsuarioEntity extends ActiveRecord\Model
{
    public static $table_name = "Usuarios";
    public static $primary_key = "numero_identificacion";

    public function mappearEntityToModel(): UsuarioModel
    {
        $usuarioModel = new UsuarioModel(
            $this->numero_identificacion,
            $this->tipoIdentificacion,
            $this->contrasena,
            $this->repetir_contrasena,
            $this->preguntaRecordarContrasena,
            $this->respuestaRecuperarContrasena,
            $this->primerNombre,
            $this->segundoNombre,
            $this->primerApellido,
            $this->segundoApellido,
            $this->genero,
            $this->email,
            $this->numeroTelefono,
            $this->foto,
            $this->rol,
            $this->pais,
            $this->ciudad
        );
        return $usuarioModel;
    }

    public static function mappearModelToEntity($usuarioModel): UsuarioEntity
    {
        $usuarioEntity = new UsuarioEntity();
        $usuarioEntity->numero_identificacion = $usuarioModel->getNumeroIdentificacion();
        $usuarioEntity->tipoIdentificacion = $usuarioModel->getTipoIdentificacion();
        $usuarioEntity->contrasena = $usuarioModel->getContrasena();
        $usuarioEntity->repetir_contrasena = $usuarioModel->getRepetirContrasena();
        $usuarioEntity->preguntaRecordarContrasena = $usuarioModel->getPreguntaRecordarContrasena();
        $usuarioEntity->respuestaRecuperarContrasena = $usuarioModel->getRespuestaRecuperarContrasena();
        $usuarioEntity->primerNombre = $usuarioModel->getPrimerNombre();
        $usuarioEntity->segundoNombre = $usuarioModel->getSegundoNombre();
        $usuarioEntity->primerApellido = $usuarioModel->getPrimerApellido();
        $usuarioEntity->segundoApellido = $usuarioModel->getSegundoApellido();
        $usuarioEntity->genero = $usuarioModel->getGenero();
        $usuarioEntity->email = $usuarioModel->getEmail();
        $usuarioEntity->numeroTelefono = $usuarioModel->getNumeroTelefono();
        $usuarioEntity->foto = $usuarioModel->getFoto();
        $usuarioEntity->rol = $usuarioModel->getRol();
        $usuarioEntity->pais = $usuarioModel->getPais();
        $usuarioEntity->ciudad = $usuarioModel->getCiudad();
        return $usuarioEntity;
    }

}

