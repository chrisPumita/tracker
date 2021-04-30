<?php

class GRUPOTRABAJOUSUARIO
{
    private $id_usuario_fk;
    private $id_gt_fk;
    private $fecha_union;
    private $permisos;
    private $lider;
    private $estado;

    /**
     * GRUPOTRABAJOUSUARIO constructor.
     * @param $id_usuario_fk
     * @param $id_gt_fk
     * @param $fecha_union
     * @param $permisos
     * @param $lider
     * @param $estado
     */
    public function __construct($id_usuario_fk, $id_gt_fk, $fecha_union, $permisos, $lider, $estado)
    {
        $this->id_usuario_fk = $id_usuario_fk;
        $this->id_gt_fk = $id_gt_fk;
        $this->fecha_union = $fecha_union;
        $this->permisos = $permisos;
        $this->lider = $lider;
        $this->estado = $estado;
    }


    /**
     * @return mixed
     */
    public function getIdUsuarioFk()
    {
        return $this->id_usuario_fk;
    }

    /**
     * @param mixed $id_usuario_fk
     */
    public function setIdUsuarioFk($id_usuario_fk): void
    {
        $this->id_usuario_fk = $id_usuario_fk;
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
    public function getFechaUnion()
    {
        return $this->fecha_union;
    }

    /**
     * @param mixed $fecha_union
     */
    public function setFechaUnion($fecha_union): void
    {
        $this->fecha_union = $fecha_union;
    }

    /**
     * @return mixed
     */
    public function getPermisos()
    {
        return $this->permisos;
    }

    /**
     * @param mixed $permisos
     */
    public function setPermisos($permisos): void
    {
        $this->permisos = $permisos;
    }

    /**
     * @return mixed
     */
    public function getLider()
    {
        return $this->lider;
    }

    /**
     * @param mixed $lider
     */
    public function setLider($lider): void
    {
        $this->lider = $lider;
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


}