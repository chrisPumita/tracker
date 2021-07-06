<?php

include_once "CONEXION.php";
class EMPRESA extends CONEXION
{
    private $id_empresa;
    private $nombre;
    private $razon_social;
    private $rfc;
    private $telefono;
    private $correo;
    private $tipo_cuenta;

    /* AGREGACION*/

    //Los proyetos registrados de la empresa
    private $listaProyectos;
    private $detallesEmpresa;
    private $crearEmpresa;


    /**
     * @return mixed
     */
    public function getCrearEmpresa()
    {
        return $this->listCrearEmpresa();
    }

    /**
     * @return mixed
     */
    public function getDetallesEmpresa()
    {
        return $this->listDetallesEmpresa();
    }

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getListaProyectos()
    {
        return $this->listaProyectosEmpresa();
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
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * @param mixed $rfc
     */
    public function setRfc($rfc): void
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


    /*funnciones de la empresa*/
    function listaProyectosEmpresa()
    {
        $result = $this ->consultaProyectosEmpresa($this->getIdEmpresa());
        return $result;
    }
    
    function listDetallesEmpresa()
    {
        $result = $this->consultaDetallesEmpresa($this->getIdEmpresa());
        return $result;
    }
    function listCrearEmpresa()
    {
        $result = $this->consultaCrearEmpresa($this->getNombre(),$this->getRazonSocial(),$this->getRfc(),$this->getTelefono(),$this->getCorreo(),$this->getTipoCuenta());
        return $result;
    }

    public function consultaProyectosEmpresa($idEmpresa){
        $query = "SELECT empresa.nombre, grupo_trabajo.id_gt, proyecto.nombre_proyecto
                    FROM empresa, grupo_trabajo, proyecto WHERE empresa.id_empresa= grupo_trabajo.id_empresa_fk 
                    AND grupo_trabajo.id_gt = proyecto.id_gt_fk AND id_empresa =". $idEmpresa;
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    public function consultaDetallesEmpresa($id_empresa){
        $query ="SELECT * FROM empresa WHERE id_empresa =". $id_empresa;
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    public function consultaCrearEmpresa(){
        $query = "INSERT INTO `empresa` (`id_empresa`, `nombre`, `razon_social`, `rfc`, `telefono`, `correo`, `tipo_cuenta`) 
        VALUES (NULL, '".$this->getNombre()."', '".$this->getRazonSocial()."', '".$this->getRfc()."',
         '".$this->getTelefono()."', '".$this->getCorreo()."', '".$this->getTipoCuenta()."')";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        if($result){
            echo "Guardado con exito";
        } else echo "Falló al guardar";
        return $result;
    }
}