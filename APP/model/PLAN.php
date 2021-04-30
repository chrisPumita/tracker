<?php
class PLAN
{
    private $id_plan;
    private $max_usuarios;
    private $costo;
    private $descripcion;
    private $max_proyectos;
    private $tiempo_dias;

    /**
     * EMPRESAPLAN CONSTRUCTOR.
     * @param $id_plan;
     * @param $max_usuarios;
     * @param $costo;
     * @param $descripcion;
     * @param $max_proyectos;
     * @param $tiempo_dias;
     */

    public function __construct($id_plan,$max_usuarios,$costo,$descripcion,$max_proyectos,$tiempo_dias)
    {
        $this->id_plan = $id_plan;
        $this->max_usuarios = $max_usuarios;
        $this->costo = $costo;
        $this->descripcion = $descripcion;
        $this->max_proyectos = $max_proyectos;
        $this->tiempo_dias = $tiempo_dias;
    }


    /**
     * @return mixed
     */
    public function getIdPlan()
    {
        return $this->id_plan;
    }

    /**
     * @param mixed $id_plan
     */
    public function setIdPlan($id_plan): void
    {
        $this->id_plan = $id_plan;
    }

    /**
     * @return mixed
     */
    public function getMaxUsuarios()
    {
        return $this->max_usuarios;
    }

    /**
     * @param mixed $max_usuarios
     */
    public function setMaxUsuarios($max_usuarios): void
    {
        $this->max_usuarios = $max_usuarios;
    }

    /**
     * @return mixed
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * @param mixed $costo
     */
    public function setCosto($costo): void
    {
        $this->costo = $costo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getMaxProyectos()
    {
        return $this->max_proyectos;
    }

    /**
     * @param mixed $max_proyectos
     */
    public function setMaxProyectos($max_proyectos): void
    {
        $this->max_proyectos = $max_proyectos;
    }

    /**
     * @return mixed
     */
    public function getTiempoDias()
    {
        return $this->tiempo_dias;
    }

    /**
     * @param mixed $tiempo_dias
     */
    public function setTiempoDias($tiempo_dias): void
    {
        $this->tiempo_dias = $tiempo_dias;
    }


}
}