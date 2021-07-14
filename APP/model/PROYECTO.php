<?php

include_once "CONEXION.php";
class PROYECTO extends CONEXION
{
    private $id_proyecto;
    private $id_gt_fk;
    private $id_categoria_fk;
    private $nombre_proyecto;
    private $fecha_creacion;
    private $fecha_inicio;
    private $dias;
    private $tipo_jornada;
    private $estado;
    private $link;
    private $url_imagen;

    /* AGREGACION */
    private $listaEtapas;

    /**
     * @param mixed $ListaProyecto
     */
    public function setListaProyecto($ListaProyecto): void
    {
        $this->ListaProyecto = $ListaProyecto;
    }

    /**
     * @return mixed
     */
    public function getListaEtapas()
    {
        return $this->consultListaEtapas();
    }

    /**
     * @param mixed $listaEtapas
     */
    public function setListaEtapas($listaEtapas): void
    {
        $this->listaEtapas = $listaEtapas;
    }

    /**
     * @return mixed
     */
    public function getIdProyecto()
    {
        return $this->id_proyecto;
    }

    /**
     * @param mixed $id_proyecto
     */
    public function setIdProyecto($id_proyecto): void
    {
        $this->id_proyecto = $id_proyecto;
    }

    /**
     * @return mixed
     */
    public function getIdGtFk()
    {
        return $this->id_gt_fk;
    }

    /**
     * @param mixed $id_gt_fk
     */
    public function setIdGtFk($id_gt_fk): void
    {
        $this->id_gt_fk = $id_gt_fk;
    }

    /**
     * @return mixed
     */
    public function getIdCategoriaFk()
    {
        return $this->id_categoria_fk;
    }

    /**
     * @param mixed $id_categoria_fk
     */
    public function setIdCategoriaFk($id_categoria_fk): void
    {
        $this->id_categoria_fk = $id_categoria_fk;
    }

    /**
     * @return mixed
     */
    public function getNombreProyecto()
    {
        return $this->nombre_proyecto;
    }

    /**
     * @param mixed $nombre_proyecto
     */
    public function setNombreProyecto($nombre_proyecto): void
    {
        $this->nombre_proyecto = $nombre_proyecto;
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
    public function getTipoJornada()
    {
        return $this->tipo_jornada;
    }

    /**
     * @param mixed $tipo_jornada
     */
    public function setTipoJornada($tipo_jornada): void
    {
        $this->tipo_jornada = $tipo_jornada;
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
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getUrlImagen()
    {
        return $this->url_imagen;
    }

    /**
     * @param mixed $url_imagen
     */
    public function setUrlImagen($url_imagen): void
    {
        $this->url_imagen = $url_imagen;
    }


    /* Funciones propias de la clase*/

    private function consultListaEtapas(){
        include_once "ETAPAS.php";
        $obj_etapa = new ETAPAS();
        $obj_etapa -> setIdProyectoFk($this->getIdProyecto);
        return $obj_etapa->consultaEtapas();
    }

        function queryDetallesProyecto($idProyecto){
        $query = "SELECT `id_proyecto`, `id_gt_fk`, `id_categoria_fk`, `nombre_proyecto`, `fecha_creacion`, 
       `fecha_inicio`, `dias`, `tipo_jornada`, `estado` FROM `proyecto` WHERE `id_proyecto` = ". $idProyecto;
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return json_encode($result);
    }

    function queryUpdateProyecto($idProyecto){
        $query = "UPDATE `proyecto` SET `id_categoria_fk`=".$this->getIdCategoriaFk().",`nombre_proyecto`='".$this->getNombreProyecto().
        "',`dias`=".$this->getDias().",`tipo_jornada`=".$this->getTipoJornada().",`estado`=".$this->getEstado()." WHERE `id_proyecto`=".$idProyecto;
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }
    function queryDeleteProyecto($idProyecto){
        $query = "UPDATE `proyecto` SET `id_proyecto`=`id_proyecto`*-1 WHERE id_proyecto=".$idProyecto;
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryCreateProyecto(){
        $query = "INSERT INTO `proyecto`(`id_proyecto`, `id_gt_fk`, `id_categoria_fk`, `nombre_proyecto`, `fecha_creacion`, `fecha_inicio`, `dias`, `tipo_jornada`, `estado`, `link`, `url_imagen`) 
        VALUES (NULL,".$this->getIdGtFk().",".$this->getIdCategoriaFk().",'".$this->getNombreProyecto().
        "','".$this->getFechaCreacion()."','".$this->getFechaInicio()."',".$this->getDias().",".$this->getTipoJornada().
        ",".$this->getEstado().",'".$this->getLink()."','".$this->getUrlImagen()."')";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

        function queryDetallesProyectos($idEmpresa){
            $query = "SELECT * FROM empresa, grupo_trabajo, proyecto WHERE empresa.id_empresa= grupo_trabajo.id_empresa_fk 
            AND grupo_trabajo.id_gt = proyecto.id_gt_fk AND proyecto.id_proyecto>0 AND id_empresa =". $idEmpresa;
            $this->connect();
            $result = $this->getData($query);
            $this->close();
            return $result;
        }
}