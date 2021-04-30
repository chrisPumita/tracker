<?php
class EMPRESAPLAN
{
    private $id_contrato;
    private $id_empresa_fk;
    private $id_plan_fk;
    private $incio;
    private $fin;
    private $estatus;

    /**
     * EMPRESAPLAN CONSTRUCTOR.
     * @param $id_contrato;
     * @param $id_empresa_fk;
     * @param $id_plan_fk;
     * @param $incio;
     * @param $fin;
     * @param $estatus;
     */

    public function __construct($id_contrato, $id_empresa_fk, $id_plan_fk, $incio, $fin, $estatus)
    {
        $this->id_contrato = $id_contrato;
        $this->id_empresa_fk = $id_empresa_fk;
        $this->id_plan_fk = $id_plan_fk;
        $this->inicio = $incio;
        $this->fin = $fin;
        $this->estatus = $estatus;
    }


    /**
     * @return mixed
     */
    public function getIdContrato()
    {
        return $this->id_contrato;
    }

    /**
     * @param mixed $id_contrato
     */
    public function setIdContrato($id_contrato): void
    {
        $this->id_contrato = $id_contrato;
    }

    /**
     * @return mixed
     */
    public function getIdEmpresaFK()
    {
        return $this->id_empresa_fk;
    }

    /**
     * @param mixed $id_empresa_fk
     */
    public function setIdEmpresaFK($id_empresa_fk): void
    {
        $this->id_empresa_fk = $id_empresa_fk;
    }

    /**
     * @return mixed
     */
    public function getIdPlanFK()
    {
        return $this->id_plan_fk;
    }

    /**
     * @param mixed $id_plan_fk
     */
    public function setIdPlanFK($id_plan_fk): void
    {
        $this->id_plan_fk = $id_plan_fk;
    }

    /**
     * @return mixed
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * @param mixed $inicio
     */
    public function setInicio($inicio): void
    {
        $this->inicio = $inicio;
    }

    /**
     * @return mixed
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * @param mixed $fin
     */
    public function setFin($fin): void
    {
        $this->fin = $fin;
    }

    /**
     * @return mixed
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * @param mixed $estatus
     */
    public function setEstatus($estatus): void
    {
        $this->estatus = $estatus;
    }


}
}