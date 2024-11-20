<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Contracts/IBuscarUsuarioService.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Application/Contracts/IUsuariosRepository.php";

class BuscarUsuarioService implements IBuscarUsuarioService
{

    private $usuarioRepository;

    public function __construct(IUsuariosRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function buscarUsuario(string $username): UsuarioModel
    {
        return $this->usuarioRepository->findByUsername($username);
    }
}