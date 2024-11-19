<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Infrastructure/Libs/Config.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";
class UsuarioEntity extends ActiveRecord\Model
{
    public static $table_name = "usuarios";
    public static $primary_key = "id";

    public function mappearEntityToModel(): UsuarioModel
    {
        return new UsuarioModel(
            $this->cedula,
            $this->tipoIdentificacion,
            $this->contrasena,
            $this->repetirContrasena,
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
    }

    public static function mappearModelToEntity($usuarioModel): UsuarioEntity
    {
        $usuarioEntity = new self();
        $usuarioEntity->cedula = $usuarioModel->getNumeroIdentificacion();
        $usuarioEntity->tipoIdentificacion = $usuarioModel->getTipoIdentificacion();
        $usuarioEntity->contrasena = $usuarioModel->getContrasena();
        $usuarioEntity->repetirContrasena = $usuarioModel->getRepetirContrasena();
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

