<?php

include_once "CONEXION.php";
include_once "EMPRESA.php";

interface I_EMPRESA
{
    public static function consultaDatos()
    {
        $query ="SELECT `id_empresa`,`nombre`,`razon_social`,`rfc`,`telefono`,`correo` FROM `empresa`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }
    public static function actualizaDatos($idEmpresa)
    {
        $query = "UPDATE `empresa` SET `nombre`,`razon_social`,`rfc`,`telefono`,`correo` 
        WHERE `id_empresa`=$this->getIdEmpresa()";
        $this->connect();
        $resultado = $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
    public static function crearEmpresa(){
        $query ="INSERT INTO `empresa` (
        `id_empresa`,`nombre`,`razon_social`,`rfc`,`telefono`,`correo`,`tipo_cuenta`) VALUES 
        ( NULL,`".$this->getNombre()."`,`".$this->getRazonSocial()."`,`".$this->getRFC()."`,`".$this->getTelefono()."`,`".$this-getCorreo()."`,`".$this->getTipoCuenta()."`
        )";
        $this->connect();
        $resultado = $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }
    public static function editarEmpresa();
}