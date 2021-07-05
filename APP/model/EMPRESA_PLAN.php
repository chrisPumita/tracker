<?php


class EMPRESA_PLAN
{
    private $id_contrato;
    private $id_empresa_fk;
    private $id_plan_fk;
    private $inicio;
    private $fin;
    private $estatus;

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
    public function getIdPlanFk()
    {
        return $this->id_plan_fk;
    }

    /**
     * @param mixed $id_plan_fk
     */
    public function setIdPlanFk($id_plan_fk): void
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