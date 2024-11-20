<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Infrastructure/Libs/Config.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";
class UsuarioEntity extends ActiveRecord\Model
{
    public static $table_name = "Usuarios";
    public static $primary_key = "numero_identificacion";

    public function mapperEntityToModel(): UsuarioModel
    {
        $usuarioModel = new UsuarioModel(
            $this->numero_identificacion,
            $this->tipo_identificacion,
            $this->contrasena,
            $this->repetir_contrasena,
            $this->pregunta_recordar_contrasena,
            $this->respuesta_recuperar_contrasena,
            $this->primer_nombre,
            $this->segundo_nombre,
            $this->primer_apellido,
            $this->segundo_apellido,
            $this->genero,
            $this->email,
            $this->numero_telefono,
            $this->foto,
            $this->rol,
            $this->pais,
            $this->ciudad
        );
        return $usuarioModel;
    }

    public static function mapperModelToEntity($usuarioModel): UsuarioEntity
    {
        $usuarioEntity = new UsuarioEntity();
        $usuarioEntity->numero_identificacion = $usuarioModel->getNumeroIdentificacion();
        $usuarioEntity->tipo_identificacion = $usuarioModel->getTipoIdentificacion();
        $usuarioEntity->contrasena = $usuarioModel->getContrasena();
        $usuarioEntity->repetir_contrasena = $usuarioModel->getRepetirContrasena();
        $usuarioEntity->pregunta_recordar_contrasena = $usuarioModel->getPreguntaRecordarContrasena();
        $usuarioEntity->respuesta_recuperar_contrasena = $usuarioModel->getRespuestaRecuperarContrasena();
        $usuarioEntity->primer_nombre = $usuarioModel->getPrimerNombre();
        $usuarioEntity->segundo_nombre = $usuarioModel->getSegundoNombre();
        $usuarioEntity->primer_apellido = $usuarioModel->getPrimerApellido();
        $usuarioEntity->segundo_apellido = $usuarioModel->getSegundoApellido();
        $usuarioEntity->genero = $usuarioModel->getGenero();
        $usuarioEntity->email = $usuarioModel->getEmail();
        $usuarioEntity->numero_telefono = $usuarioModel->getNumeroTelefono();
        $usuarioEntity->foto = $usuarioModel->getFoto();
        $usuarioEntity->rol = $usuarioModel->getRol();
        $usuarioEntity->pais = $usuarioModel->getPais();
        $usuarioEntity->ciudad = $usuarioModel->getCiudad();
        return $usuarioEntity;
    }

}

