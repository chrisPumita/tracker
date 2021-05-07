<?php
 include_once "CONEXION.php";

class USUARIO extends CONEXION
{
    private $id_usuario;
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
     * USUARIO constructor.
     * @param $id_usuario
     * @param $nombre
     * @param $apaterno
     * @param $amaterno
     * @param $user_name
     * @param $correo
     * @param $password
     * @param $nivel_acceso
     * @param $path_img
     * @param $estado
     */
    public function __construct($id_usuario, $nombre, $apaterno, $amaterno, $user_name, $correo, $password, $nivel_acceso, $path_img, $estado)
    {
        $this->id_usuario = $id_usuario;
        $this->nombre = $nombre;
        $this->apaterno = $apaterno;
        $this->amaterno = $amaterno;
        $this->user_name = $user_name;
        $this->correo = $correo;
        $this->password = $password;
        $this->nivel_acceso = $nivel_acceso;
        $this->path_img = $path_img;
        $this->estado = $estado;
    }


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

    public function consultaUsuarios($filro)
    {
        $query = "SELECT `id_usuario`, `id_empresa_fk`, `nombre`, 
       `apaterno`, `amaterno`, `user_name`, `correo`, `password`, 
       `nivel_acceso`, `path_img`, `estado` FROM `usuario`";
        $this->connect();
        $resultado = $this->getData($query);
        $this->close();
        return $resultado;
    }

    public function agregaUsuario(){
        $query = "INSERT INTO `usuario` (
                       `id_usuario`, 
                       `id_empresa_fk`, 
                       `nombre`, 
                       `apaterno`, 
                       `amaterno`, 
                       `user_name`, 
                       `correo`, 
                       `password`, 
                       `nivel_acceso`, 
                       `path_img`, 
                       `estado`) VALUES
                        (NULL, NULL, '".$this->getNombre()."', '".$this->getApaterno()."', '".$this->getAmaterno()."', 
                         '".$this->getUserName()."', '".$this->getCorreo()."', 
                         '".$this->getPassword()."', '".$this->getNivelAcceso()."', '".$this->getPathImg()."', '".$this->getNivelAcceso()."')";
        $this->connect();
        $resultado = $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function actualizaUsuario($USUARIO){
        $query = "UPDATE `usuario` SET 
                     `id_empresa_fk` = '222', 
                     `nombre` = 'Christian R', 
                     `apaterno` = 'gbg', 
                     `amaterno` = 'HERNANDEZR', 
                     `user_name` = 'gggg', 
                     `correo` = 'corggreo@gmail.com', 
                     `nivel_acceso` = '1', 
                     `path_img` = 'thhpggggg', 
                     `estado` = '0' 
                    WHERE `usuario`.`id_usuario` = 2";
        $this->connect();
        $resultado = $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function eliminaUsuario($idUsuario){
        $query = "DELETE FROM `usuario` WHERE `usuario`.`id_usuario` = ".$idUsuario;
        $this->connect();
        $resultado = $this->executeInstruction($query);
        $this->close();
        return $resultado;
    }

    public function login($username, $pw){
        //CHRIS
    }

}