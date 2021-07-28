<?php

include_once "CONEXION.php";
class USUARIO extends CONEXION
{
    private $id_usuario;
    private $id_empresa_fk;
    private $nombre;
    private $apaterno;
    private $amaterno;
    private $user_name;
    private $correo;
    private $password;
    private $nivel_acceso;
    private $path_img;
    private $estado;

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario): void
    {
        $this->id_usuario = $id_usuario;
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
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApaterno()
    {
        return $this->apaterno;
    }

    /**
     * @param mixed $apaterno
     */
    public function setApaterno($apaterno): void
    {
        $this->apaterno = $apaterno;
    }

    /**
     * @return mixed
     */
    public function getAmaterno()
    {
        return $this->amaterno;
    }

    /**
     * @param mixed $amaterno
     */
    public function setAmaterno($amaterno): void
    {
        $this->amaterno = $amaterno;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name): void
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo): void
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getNivelAcceso()
    {
        return $this->nivel_acceso;
    }

    /**
     * @param mixed $nivel_acceso
     */
    public function setNivelAcceso($nivel_acceso): void
    {
        $this->nivel_acceso = $nivel_acceso;
    }

    /**
     * @return mixed
     */
    public function getPathImg()
    {
        return $this->path_img;
    }

    /**
     * @param mixed $path_img
     */
    public function setPathImg($path_img): void
    {
        $this->path_img = $path_img;
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

    function queryCreateUser(){
        $query= "INSERT INTO `usuario`(`id_usuario`, `id_empresa_fk`, `nombre`, `apaterno`, `amaterno`, `user_name`, `correo`, `password`, `nivel_acceso`, `path_img`, `estado`)
        VALUES (NULL,'".$this->getIdEmpresaFk()."','".$this->getNombre()."','".$this->getApaterno()."','".$this->getAmaterno().
        "','".$this->getUserName()."','".$this->getCorreo()."','".$this->getPassword()."',".$this->getNivelAcceso().
        ",'".$this->getPathImg()."',".$this->getEstado().")";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }
    function queryUpdateUser($idUser){
        $query = "UPDATE `usuario` SET `nombre`='".$this->getNombre()."',`apaterno`='".$this->getApaterno().
        "',`amaterno`='".$this->getAmaterno()."',`user_name`='".$this->getUserName()."',`correo`='".$this->getCorreo().
        "' WHERE `id_usuario`=".$idUser;
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryDetalleUser($idUser, $idEmpresa){
        $filtro = $idUser > 0 ? " AND id_usuario= ".$idUser : "";
        $query="SELECT * from usuario u where u.id_usuario >0 AND id_empresa_fk = ". $idEmpresa  . "  ". $filtro;
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    function queryDeleteUser($idUser){
        $query="UPDATE usuario SET id_usuario=id_usuario*-1 WHERE id_usuario=".$idUser;
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }


    function consultaCuentaUsuario(){
        $query="SELECT u.`id_usuario`, u.`id_empresa_fk`, u.`nombre`, u.`apaterno`, u.`amaterno`, u.`user_name`, 
                u.`correo`, u.`password`, u.`nivel_acceso`, u.`path_img`, u.`estado`, 
                 e.`id_empresa`, e.`nombre` as empresaName, e.`razon_social`, e.`rfc`, e.`telefono`,  e.`tipo_cuenta` 
                from usuario u, empresa e 
                where u.id_empresa_fk  = e.id_empresa and u.estado > 0 and u.correo = '".$this->getCorreo()."' and u.password = '".$this->getPassword()."'";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    function detallePerfilUser($idUser){
        $query="SELECT * from usuario WHERE id_usuario=".$idUser;
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;

    }

    function modifyPw(){
        $query="UPDATE `usuario` SET `password` = '".$this->getPassword()."' 
        WHERE `usuario`.`id_usuario` = ".$this->getIdUsuario();
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }
}