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

        if (createUser($nombre,$ap,$am,$username,$correo,$password,$id)){
            include_once "./enviaMail.php";
            return enviaCorreoRegistro($correo,$nombre,$username,$correo, $empresaName);
        }
        return false;
    }
    else
        return false;

}