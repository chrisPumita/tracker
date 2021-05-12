<?php
include_once "EMPRESA.php";

interface I_EMPRESA
{
    public static function consultaDatos();
    public static function actualizaDatos($idEmpresa);
    public static function crearEmpresa();
    public static function editarEmpresa();
}