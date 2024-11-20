<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";

interface IUsuariosRepository
{
    public function create(UsuarioModel $usuarioModel): int;

    public function findByCedula(string $cedula): UsuarioModel;

    public function findByUsername(string $username): UsuarioModel;

    public function count(): int;

    public function edit(UsuarioModel $usuarioModel);

    public function deleteByUsername(string $cedula);

    public function getAllUsuarios(): array;

}