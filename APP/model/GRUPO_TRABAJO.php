<?php


class GRUPO_TRABAJO
{
    private $id_gt;
    private $id_empresa_fk;
    private $nombre_gt;
    private $fecha_creacion;
    private $status;

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


}