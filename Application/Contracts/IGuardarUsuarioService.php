<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";

interface  IGuardarUsuarioService
{
    public function guardarUsuario(UsuarioModel $usuario): int;
}