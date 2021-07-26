<?php
include_once "../model/USUARIO.php";

function createUser($nombre,$ap,$am,$username,$correo,$password,$idEmpresa){
    $obj_user= new USUARIO();
    $obj_user->setNombre($nombre);
    $obj_user->setApaterno($ap);
    $obj_user->setAmaterno($am);
    $obj_user->setUserName($username);
    $obj_user->setCorreo($correo);
    $obj_user->setPassword(md5($password));
    $obj_user->setNivelAcceso(0);
    $obj_user->setPathImg("https://freepikpsd.com/media/2019/10/no-image-available-icon-png-8-Transparent-Images.png");
    $obj_user->setEstado(1);
    $obj_user->setIdEmpresaFk($idEmpresa);
    $result = $obj_user->queryCreateUser();
    return $result;
}

function updateUser($idUser,$nombre,$ap,$am,$username,$correo){
    $obj_user= new USUARIO();
    $obj_user->setNombre($nombre);
    $obj_user->setApaterno($ap);
    $obj_user->setAmaterno($am);
    $obj_user->setUserName($username);
    $obj_user->setCorreo($correo);
    $result= $obj_user->queryUpdateUser($idUser);
    return $result;
}

function detalleUser($idUser){
    $obj_user= new USUARIO();
    $result = $obj_user->queryDetalleUser($idUser);
    return json_encode($result);
}

function deleteUser($idUser){
    $obj_user= new USUARIO();
    $result = $obj_user->queryDeleteUser($idUser);
    return $result;
}

function consultaUsuarios($idUser,$idEmpresa){
    include_once "../model/USUARIO.php";
    $obj_user = new USUARIO();
    $result = $obj_user-> queryDetalleUser($idUser,$idEmpresa);
    return json_encode($result);
}

//consultamos el usuario con sus credenciales y
// creamos las variables de sesion
function verficaUsuario($correo, $pw){
    include_once "../model/USUARIO.php";
    $obj_empleado = new USUARIO();
    $obj_empleado->setCorreo($correo);
    $obj_empleado->setPassword(md5($pw));
    $obj_user = $obj_empleado->consultaCuentaUsuario();

    if(count($obj_user) > 0 ){
        //creamos la sesion
        session_start();
        $_SESSION['no_empleado']    = $obj_user[0]['id_usuario'];
        $_SESSION['usuario']        = $obj_user[0]['nombre'];
        $_SESSION['app']       = $obj_user[0]['apaterno'];
        $_SESSION['apm']       = $obj_user[0]['amaterno'];
        $_SESSION['user_name']         = $obj_user[0]['user_name'];
        $_SESSION['nivel_acceso']   = $obj_user[0]['nivel_acceso'];
        $_SESSION['id_empresa']    = $obj_user[0]['id_empresa'];
        $_SESSION['empresaName']    = $obj_user[0]['empresaName'];
        $_SESSION['tipo_cuenta']    = $obj_user[0]['tipo_cuenta'];
        $_SESSION['sessionSuccess']    = true;
        return true;
    }
    return false;
}

function addUser($nombre,$ap,$am,$username,$correo,$idEmpresa,$nivelAcesso){
    include_once "./tools/generar_clave.php";
    $clave= genPwTmpInvitados(10);
    $obj_user= new USUARIO();
    $obj_user->setNombre($nombre);
    $obj_user->setApaterno($ap);
    $obj_user->setAmaterno($am);
    $obj_user->setUserName($username);
    $obj_user->setCorreo($correo);
    $obj_user->setPassword(md5($clave));
    $obj_user->setNivelAcceso($nivelAcesso);
    $obj_user->setPathImg("https://freepikpsd.com/media/2019/10/no-image-available-icon-png-8-Transparent-Images.png");
    $obj_user->setEstado(1);
    $obj_user->setIdEmpresaFk($idEmpresa);
    $result = $obj_user->queryCreateUser();
    if ($result){
        return sendMailAddBussiness($correo, $username,$clave,$nombre." ".$ap." ".$am);
    }
    return false;
}

function sendMailAddBussiness($correoSend, $user, $pwtmp, $nombre)
{
    include "./enviaMail.php";
    session_start();
    $empresaName = $_SESSION['empresaName'] ;
    return enviaCorreoAddUser($correoSend, $user, $pwtmp, $nombre, $empresaName);
}