<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Domain/Model/UsuarioModel.php";

interface  IBuscarUsuarioService
{
    public function buscarUsuario(string $userName): UsuarioModel;
}