<?php

include_once "CONEXION.php";
class GRUPO_TRABAJO extends CONEXION
{
    private $id_gt;
    private $id_empresa_fk;
    private $nombre_gt;
    private $fecha_creacion;
    private $status;

    /*AGREGACION*/

    private $detallesGrupo;

    /**
     * @return mixed
     */
    public function getDetallesGrupo()
    {
        return $this->listDetallesGrupo();
    }

    /**
     * @return mixed
     */
    public function getIdGt()
    {
        return $this->id_gt;
    }

    /**
     * @param mixed $id_gt
     */
    public function setIdGt($id_gt): void
    {
        $this->id_gt = $id_gt;
    }

    /**
     * @return mixed
     */
    public function getIdEmpresaFk()
    {
        return $this->id_empresa_fk;
    }

    /**
     * @param mixed $id_empresa_fk
     */
    public function setIdEmpresaFk($id_empresa_fk): void
    {
        $this->id_empresa_fk = $id_empresa_fk;
    }

    /**
     * @return mixed
     */
    public function getNombreGt()
    {
        return $this->nombre_gt;
    }

    /**
     * @param mixed $nombre_gt
     */
    public function setNombreGt($nombre_gt): void
    {
        $this->nombre_gt = $nombre_gt;
    }

    /**
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * @param mixed $fecha_creacion
     */
    public function setFechaCreacion($fecha_creacion): void
    {
        $this->fecha_creacion = $fecha_creacion;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }


    function listDetallesGrupo()
    {
        $result = $this->queryDetallesGrupo($this->getIdGt());
        return $result;
    }
    
    function queryDetallesGrupo($idGt){
        $query ="SELECT `id_gt`, `id_empresa_fk`, `nombre_gt`, `fecha_creacion`, `status` FROM `grupo_trabajo` WHERE `id_gt`= ".$idGt;
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    function queryCreateGT(){
        $query ="INSERT INTO `grupo_trabajo`(`id_gt`, `id_empresa_fk`, `nombre_gt`, `fecha_creacion`, `status`)
         VALUES (NULL, ".$this->getIdEmpresaFk().", '".$this->getNombreGt()."', '".$this->getFechaCreacion().
         "', ".$this->getStatus().")";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function  queryUpdateGT($idGt){
        $query ="UPDATE `grupo_trabajo` SET `nombre_gt`='".$this->getNombreGt()."' WHERE `id_gt` =".$idGt;
        $this->connect();
        $result = $this->executeInstruction($query); 
        $this->close();
        return $result;
    }
    function  queryDeleteGT($idGt){
        $query ="UPDATE `grupo_trabajo` SET `id_gt`=`id_gt`*-1 WHERE `id_gt`=".$idGt;
        $this->connect();
        $result = $this->executeInstruction($query); 
        $this->close();
        return $result;
    }
    
    function queryListDetallesGrupo($idEmpresa){
        $query ="SELECT `id_gt`, `id_empresa_fk`, `nombre_gt`, `fecha_creacion`, 
        `status` FROM `grupo_trabajo` WHERE `id_empresa_fk`= ".$idEmpresa." and id_gt > 0";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

}