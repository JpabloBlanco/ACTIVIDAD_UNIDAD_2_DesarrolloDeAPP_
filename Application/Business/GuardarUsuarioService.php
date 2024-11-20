<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Contracts/IGuardarUsuarioService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Contracts/IUsuariosRepository.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Execptions/EntityPreexistingException.php";


class GuardarUsuarioService implements IGuardarUsuarioService
{
    private $usuarioRepository;

    public function __construct(IUsuariosRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }
    public function guardarUsuario(UsuarioModel $usuario): int
    {
        try {
            return $this->usuarioRepository->create($usuario);
        } catch (EntityPreexistingException $e) {
            throw $e;
        }
    }
}
