<?php
include_once "I_EMPRESA.php";
class EMPRESA implements I_EMPRESA
{
    private $id_empresa;
    private $nombre;
    private $razon_social;
    private $rfc;
    private $telefono;
    private $correo;
    private $tipo_cuenta;

    //

    /**
     * EMPRESA constructor.
     * @param $id_empresa
     * @param $nombre
     * @param $razon_social
     * @param $rfc
     * @param $telefono
     * @param $correo
     * @param $tipo_cuenta
     */
    public function __construct($id_empresa, $nombre, $razon_social, $rfc, $telefono, $correo, $tipo_cuenta)
    {
        $this->id_empresa = $id_empresa;
        $this->nombre = $nombre;
        $this->razon_social = $razon_social;
        $this->rfc = $rfc;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->tipo_cuenta = $tipo_cuenta;
    }


    /**
     * @return mixed
     */
    public function getIdEmpresa()
    {
        return $this->id_empresa;
    }

    /**
     * @param mixed $id_empresa
     */
    public function setIdEmpresa($id_empresa): void
    {
        $this->id_empresa = $id_empresa;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getRazonSocial()
    {
        return $this->razon_social;
    }

    /**
     * @param mixed $razon_social
     */
    public function setRazonSocial($razon_social): void
    {
        $this->razon_social = $razon_social;
    }

    /**
     * @return mixed
     */
    public function getRFC()
    {
        return $this->rfc;
    }

    /**
     * @param mixed $rfc
     */
    public function setRFC($rfc): void
    {
        $this->rfc = $rfc;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo): void
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getTipoCuenta()
    {
        return $this->tipo_cuenta;
    }

    /**
     * @param mixed $tipo_cuenta
     */
    public function setTipoCuenta($tipo_cuenta): void
    {
        $this->tipo_cuenta = $tipo_cuenta;
    }

    /*Funciones implementadas de la interfaz*/
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

    public static function crearEmpresa()
    {
        $query ="INSERT INTO `empresa` (
            `id_empresa`,`nombre`,`razon_social`,`rfc`,`telefono`,`correo`,`tipo_cuenta`) VALUES 
            ( NULL,`".$this->getNombre()."`,`".$this->getRazonSocial()."`,`".$this->getRFC()."`,`".$this->getTelefono()."`,`".$this-getCorreo()."`,`".$this->getTipoCuenta()."`
            )";
            $this->connect();
            $resultado = $this->executeInstruction($query);
            $this->close();
            return $resultado;
    }

    public static function editarEmpresa()
    {
        $qeury="UPDATE `empresa` SET 
        `nombre`=
        `razon_social`=
        `rfc`=
        `telefono`=
        `correo`=
        `tipo_cuenta` ="
    }
}