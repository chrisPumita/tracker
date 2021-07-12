<?php
function registraCuenta($nombre,$ap,$am,$username,$correo,$password,$empresaName){
    // agregar el modelo de la empresa
    include_once "../model/EMPRESA.php";
    //creo a la empresa que voy a ingresar
    $obj_Emp = new EMPRESA();
    $Object = new DateTime();

    $DateAndTime = $Object->format("dmhis");
    $id = $DateAndTime/2;

    $obj_Emp-> setIdEmpresa($id);
    $obj_Emp-> setNombre($empresaName);
    $obj_Emp->setRazonSocial("");
    $obj_Emp->setRfc("");
    $obj_Emp->setTelefono("");
    $obj_Emp->setCorreo($correo);
    $obj_Emp->setTipoCuenta("1");

    //ejecutto la funcion de crear empresa
    if($obj_Emp-> CrearEmpresa()){
        include_once "./control_usuario.php";
        return createUser($nombre,$ap,$am,$username,$correo,$password,$id);
    }
    else
        return false;

/*
 *        $query = "INSERT INTO `empresa` (`id_empresa`, `nombre`, `razon_social`, `rfc`, `telefono`, `correo`, `tipo_cuenta`)
        VALUES (NULL, '".$this->getNombre()."', '".$this->getRazonSocial()."', '".$this->getRfc()."',
         '".$this->getTelefono()."', '".$this->getCorreo()."', '".$this->getTipoCuenta()."')";
 * */

}