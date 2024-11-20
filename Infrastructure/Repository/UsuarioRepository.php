<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Contracts/IUsuariosRepository.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Execptions/EntityNotFoundException.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Execptions/EntityPreexistingException.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Infrastructure/Databases/Entities/UsuarioEntity.php";

class UsuarioRepository implements IUsuariosRepository
{

  public function create(UsuarioModel $usuarioModel): int
{
    try {
        $numero_identificacion = $usuarioModel->getNumeroIdentificacion();
        $usuario = $this->findByCedula($numero_identificacion);
        if ($usuario !== null) {
            $message = "Usuario con identificación " . $numero_identificacion . " ya existe";
            throw new EntityPreexistingException($message);
        }
        return 0;
    } catch (EntityNotFoundException $e) {
        $usuario = new UsuarioEntity();

        $usuario->numero_identificacion = $numero_identificacion;
        $usuario->tipo_identificacion = $usuarioModel->getTipoIdentificacion();
        $usuario->contrasena = $usuarioModel->getContrasena();
        $usuario->repetir_contrasena =$usuarioModel->getRepetirContrasena();
        $usuario->pregunta_recordar_contrasena = $usuarioModel->getPreguntaRecordarContrasena();
        $usuario->respuesta_recuperar_contrasena = $usuarioModel->getRespuestaRecuperarContrasena();
        $usuario->primer_nombre = $usuarioModel->getPrimerNombre();
        $usuario->segundo_nombre = $usuarioModel->getSegundoNombre(); // Opcional
        $usuario->primer_apellido = $usuarioModel->getPrimerApellido();
        $usuario->segundo_apellido = $usuarioModel->getSegundoApellido(); // Opcional
        $usuario->genero = $usuarioModel->getGenero();
        $usuario->email = $usuarioModel->getEmail();
        $usuario->numero_telefono = $usuarioModel->getNumeroTelefono();
        $usuario->foto = $usuarioModel->getFoto(); // Opcional
        $usuario->rol = $usuarioModel->getRol();
        $usuario->pais = $usuarioModel->getPais();
        $usuario->ciudad = $usuarioModel->getCiudad();

        $usuario->save();
        return $this->count();
    } catch (EntityPreexistingException $e) {
        throw $e;
    }
}


    public function findByCedula(string $cedula): UsuarioModel
    {
        try {
            $usuario = UsuarioEntity::find_by_pk([$cedula], array());  // Pasar como array
            if (!$usuario) {
                throw new EntityNotFoundException("Usuario con cedula $cedula No existe");
            }
            return $usuario->mapperEntityToModel();
        } catch (Exception $e) {
            throw new EntityNotFoundException("Error al buscar el usuario con cedula $cedula: " . $e->getMessage());
        }
    }

    public function count(): int
    {
        return UsuarioEntity::count();
    }

    public function edit(UsuarioModel $usuarioModel): void
    {
        try {
            #$usuarioModel = $this->findByCedula(username: $usuarioModel->getUsername());
            $usuarioEntity = UsuarioEntity::find($usuarioModel->getUsername());
            $usuarioEntity = UsuarioEntity::mapperModelToEntity($usuarioModel);
            $usuarioEntity = new UsuarioEntity();
            $usuarioEntity->cedula = $usuarioModel->getCedula();
            $usuarioEntity->password = $usuarioModel->getPassword();
            $usuarioEntity->username = $usuarioModel->getUsername();
            $usuarioEntity->nombre = $usuarioModel->getNombre();
            $usuarioEntity->apellidos = $usuarioModel->getApellidos();
            $usuarioEntity->rol = $usuarioModel->getRol();
            $usuarioEntity->email = $usuarioModel->getEmail();
            $usuarioEntity->telefono = $usuarioModel->getTelefono();
            $usuarioEntity->estado = $usuarioModel->getEstado();
            //$usuarioEntity->fecha_registro = $usuarioModel->getFechaRegistro();
            $usuarioEntity->save();
        } catch (Exception $e) {
            $menssage = "usuario con nickname " . $usuarioModel->getCedula() . "Ya existe";
            throw new EntityNotFoundException($menssage);
        }

    }

    public function deleteByUsername(string $username)
    {
        try {
            $usuarioEntity = UsuarioEntity::find($username);
            $usuarioEntity->delete();
        } catch (Exception $e) {
            $menssage = "usuario de nick " . $username . "No existe";
            throw new EntityNotFoundException($menssage);
        }
    }

    public function getAllUsuarios(): array
    {
        return $usuariosEntityList = UsuarioEntity::all();
        $usuariosModelist = [];
        foreach ($usuariosEntityList as $usuariodB) {
            $usuarioModel = $usuariodB->mapperEntityToModel();
            $usuariosModelList[] = $usuarioModel;
        }
        return $usuariosModelist;
    }

    public function findByUsername(string $username): UsuarioModel
    {
        try {

            $usuario = UsuarioEntity::find_by_pk([$username], array());
            //$usuario = UsuarioEntity::find_by_username($username);
            //$usuario = UsuarioEntity::find([$username],array() );
            
            if (!$usuario) {
                throw new EntityNotFoundException("Usuario $username No existe");
            }
            return $usuario->mapperEntityToModel();

        } catch (Exception $e) {
            throw new EntityNotFoundException("Error al buscar el usuario $username: " . $e->getMessage());
        }

    }
}