<?php

include_once "CONEXION.php";
class GRUPO_TRABAJO_USUARIO extends CONEXION
{
    private $id_usuario_fk;
    private $id_gt_fk;
    private $fecha_union;
    private $permisos;
    private $lider;
    private $estado;

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



    function queryDetallesGTU($idGt){
        $query="SELECT gtu.`id_usuario_fk`, gtu.`id_gt_fk`, gtu.`fecha_union`, gtu.`permisos`
        , gtu.`lider`, gtu.`estado`, u.nombre,u.apaterno,u.amaterno,u.correo ,u.user_name
        from usuario u,grupo_trabajo gt,grupotrabajo_usuario gtu
         WHERE u.id_usuario= gtu.id_usuario_fk AND gt.id_gt = gtu.id_gt_fk AND gt.id_gt =".$idGt;
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    function queryAddUserToGroup(){
        $query="INSERT INTO `grupotrabajo_usuario` (`id_usuario_fk`, `id_gt_fk`, `fecha_union`
        , `permisos`, `lider`, `estado`) 
        VALUES ('".$this->getIdUsuarioFk()."', '".$this->getIdGtFk()."', '".$this->getFechaUnion()."
        ', '".$this->getPermisos()."', '".$this->getLider()."', '".$this->getEstado()."')";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }
}