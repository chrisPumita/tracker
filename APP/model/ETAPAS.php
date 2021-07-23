<?php

include_once "CONEXION.php";
class ETAPAS extends CONEXION
{
    private $id_etapa;
    private $id_proyecto_fk;
    private $nombre_etapa;
    private $estado_proceso;
    private $fecha_creacion;
    private $fecha_inicio;
    private $dias;
    private $indice;

    /*GREGACION - SUBETAPA*/

    private $lista_subestapa;

    /**
     * @return mixed
     */
    public function getListaSubEtapa()
    {
        return $this->consultaListaSubetapas();
    }


    /**
     * @return mixed
     */
    public function getIdEtapa()
    {
        return $this->id_etapa;
    }

    /**
     * @param mixed $id_etapa
     */
    public function setIdEtapa($id_etapa): void
    {
        $this->id_etapa = $id_etapa;
    }

    /**
     * @return mixed
     */
    public function getIdProyectoFk()
    {
        return $this->id_proyecto_fk;
    }

    /**
     * @param mixed $id_proyecto_fk
     */
    public function setIdProyectoFk($id_proyecto_fk): void
    {
        $this->id_proyecto_fk = $id_proyecto_fk;
    }

    /**
     * @return mixed
     */
    public function getNombreEtapa()
    {
        return $this->nombre_etapa;
    }

    /**
     * @param mixed $nombre_etapa
     */
    public function setNombreEtapa($nombre_etapa): void
    {
        $this->nombre_etapa = $nombre_etapa;
    }

    /**
     * @return mixed
     */
    public function getEstadoProceso()
    {
        return $this->estado_proceso;
    }

    /**
     * @param mixed $estado_proceso
     */
    public function setEstadoProceso($estado_proceso): void
    {
        $this->estado_proceso = $estado_proceso;
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


   function consultaEtapas(){
        $query = "SELECT `id_etapa`, `id_proyecto_fk`, `nombre_etapa`, 
        `estado_proceso`, `fecha_creacion`, `fecha_inicio`, `dias`, `indice` 
        FROM `etapas` where `id_proyecto_fk` = ". $this->getIdProyectoFk()." ORDER BY `etapas`.`indice` ASC";
        $this->connect();
        $result = $this->getData($query);

        //iteracion para consultar las subetapas de cada etapa
    
        $this->close();
        return $result;
    }

    function consultaInfoPorcentajes(){
        $query = "SELECT 
                    COUNT(IF(s.estado = 1, s.estado ,NULL)) as terminado,
                    COUNT(IF(s.estado = 0, s.estado ,NULL)) as pendiente,
                    ((COUNT(IF(s.estado = 1, s.estado ,NULL))*100)/(COUNT(IF(s.estado = 0, s.estado ,NULL))+COUNT(IF(s.estado = 1, s.estado ,NULL)))) as porc,
                    (COUNT(IF(s.estado = 0, s.estado ,NULL))+COUNT(IF(s.estado = 1, s.estado ,NULL))) as suma
                    from subetapas s, etapas e 
                    where s.id_etapa_fk  = e.id_etapa and e.id_etapa = ". $this->getIdEtapa();
        $this->connect();
        $result = $this->getData($query);
        //iteracion para consultar las subetapas de cada etapa

        $this->close();
        return $result;
    }

    function consultaListaSubetapas($idEtapa){
        include_once "./SUBETAPAS.php";
        $obj_setapa = new SUBETAPAS();
        $obj_setapa -> setIdEtapaFk($idEtapa);
        return $obj_setapa -> consultaListaSubetapas();
    }

    function createEtapa(){
        $query = "INSERT INTO `etapas` (`id_etapa`, `id_proyecto_fk`, `nombre_etapa`, `estado_proceso`, 
        `fecha_creacion`, `fecha_inicio`, `dias`, `indice`) VALUES 
        (NULL, '".$this->getIdProyectoFk()."', '".$this->getNombreEtapa()."', '".$this->getEstadoProceso()."
        ', '".$this->getFechaCreacion()."', '".$this->getFechaInicio()."', '".$this->getDias()."', '".$this->getIndice()."')";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        echo $result;
        return $result;
    }

    function eliminaEtapaDB($idEtapa){
        $query = "DELETE FROM `etapas` WHERE `id_etapa`=".$idEtapa;
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        echo $result;
        return $result;
    }
}