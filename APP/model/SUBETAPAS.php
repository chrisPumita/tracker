<?php

include_once "CONEXION.php";

class SUBETAPAS extends CONEXION
{
    private $id_subetapa;
    private $id_etapa_fk;
    private $nombre_subetapa;
    private $estado;
    private $fecha_inicio;
    private $dias;
    private $indice;

    /**
     * @return mixed
     */
    public function getIdSubetapa()
    {
        return $this->id_subetapa;
    }

    /**
     * @param mixed $id_subetapa
     */
    public function setIdSubetapa($id_subetapa): void
    {
        $this->id_subetapa = $id_subetapa;
    }

    /**
     * @return mixed
     */
    public function getIdEtapaFk()
    {
        return $this->id_etapa_fk;
    }

    /**
     * @param mixed $id_etapa_fk
     */
    public function setIdEtapaFk($id_etapa_fk): void
    {
        $this->id_etapa_fk = $id_etapa_fk;
    }

    /**
     * @return mixed
     */
    public function getNombreSubetapa()
    {
        return $this->nombre_subetapa;
    }

    /**
     * @param mixed $nombre_subetapa
     */
    public function setNombreSubetapa($nombre_subetapa): void
    {
        $this->nombre_subetapa = $nombre_subetapa;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * @param mixed $fecha_inicio
     */
    public function setFechaInicio($fecha_inicio): void
    {
        $this->fecha_inicio = $fecha_inicio;
    }

    /**
     * @return mixed
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * @param mixed $dias
     */
    public function setDias($dias): void
    {
        $this->dias = $dias;
    }

    /**
     * @return mixed
     */
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * @param mixed $indice
     */
    public function setIndice($indice): void
    {
        $this->indice = $indice;
    }

    
    function consultaListaSubetapas(){
        $query = "SELECT `id_subetapa`, `id_etapa_fk`, `nombre_subetapa`, `estado`, 
       `fecha_inicio`, `dias`, `indice` 
        FROM `subetapas` WHERE `id_etapa_fk` = ".$this->getIdEtapaFk()." 
        ORDER BY `subetapas`.`indice` ASC ";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    public function terminaSubEtapaDB($idSUBETAPA){
        $query="UPDATE `subetapas` SET `estado` = '1' WHERE `subetapas`.`id_subetapa` = ".$idSUBETAPA;
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

}