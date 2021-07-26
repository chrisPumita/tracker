<?php

//incluimos la libreria
include_once "../config/SERVER.php";
require("./lib-mail/class.phpmailer.php");
// determinar el horario y zona
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');


/*
 *  Enviar un correo de registro exitoso !!
 * Se envia solo cuando se ha registrado por el formulario inicial
 *
 * */
function enviaCorreoRegistro($correo,$nombre,$username, $empresaName)
{
    $body = getHtmlBody_Registro($nombre,$username,$empresaName);
    return objMailSend($correo,"Registro","Registro en ProyecTracker",$body);
}

function enviaCorreoAddUser($correoSend, $user, $pwtmp, $nombre, $empresaName)
{
    $body = getHtmlBody_RegistroAdd($correoSend, $user, $pwtmp, $nombre, $empresaName);
    return objMailSend($correoSend,"Te han creado una cuenta","Registro en ProyecTracker",$body);
}

function enviaCorreoInvitacionVistaPublica($nombreProyecto, $toCorreo, $empresa, $noSeguimiento)
{

   $body = getHtmlBody_InvitacionPublica($nombreProyecto, $toCorreo, $empresa, $noSeguimiento);
    return objMailSend($toCorreo,"Seguimiento","Hay un proyecto para ti. Sigue su avance en ProyecTracker",$body);
}


function enviaCorreoContacto($nombre, $correo, $empresa, $telefono, $comentario)
{

}
//*-----------------------  B O D Y    G E N E R A T O R */

function getHtmlBody_InvitacionPublica($nombre, $empresa, $correo, $noSeguimiento)
{
    $body = 'HAY UN SEGIMIENTO DE UN PROYECTO'. $nombre. " ". $empresa. " ". $correo."-NO seg.". $noSeguimiento;
    return $body;
}

function getHtmlBody_RegistroAdd($correoSend, $user, $pwtmp, $nombre, $empresaName)
{
    $body = "CUENTA REGTISTRO EXITOSO". $nombre. " ". $empresaName. "<br> Contraseña:  ". $pwtmp ."   <br>user ".$user. " ".$correoSend;
    return $body;
}

function getHtmlBody_Registro($nombre,$username,$empresaName)
{
    $body = 'Has creado una cuenta en Proyect Tracker'. $nombre ." ". $username." " . $empresaName;
    return $body;
}


/* General obj send mail*/
function objMailSend($toMail, $intencion, $asunto, $body)
{
    //creando un obj de PHPMailer
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug  = 1;
    //destinos
    /*
     * tracker@reckreastudios.com
     * pruebasmail@reckreastudios.com
     * */
    $contacto = USER_MAIL;
    $pass_contacto = PW_COUNT;
    $para = $toMail; // PARA ENVIAR EL CORREO AL QUE SE ANUNCIA
    //PUede ser segun sea el caso empresa.com.mx
    $mail->Host = HOST_SERVER_MAIL;  // mail. o solo dominio - Servidor de Salida. (recomiendo sin mail.)
    $mail->SMTPAuth = true;
    $mail->Username = $contacto;  // Correo Electrónico para SMTP correo@dominio.tld
    $mail->Password = $pass_contacto; // Contraseña para SMTP


    //destino
    $mail->From     = $contacto;    // Correo Electronico para SMTP
    $mail->FromName = 'ProyecTracker | '.$intencion;
    $mail->AddAddress($para); // Dirección a la que llegaran los mensajes

    $mail->Port = PORT_SMTP;
    $mail->IsHTML(true);
    $mail->Subject  = $asunto;
    $mail->Body = $body;
    return $mail->Send();

    $Envio = $mail ->Send();
    $Intentos = 1;

    while((!$Envio) && ($Intentos < 5)){
        sleep(5);
        $Envio = $mail ->Send();
        $Intentos += 1;
    }

    if($Envio == 'true'){
        $Salida = true;
    }
    else{
        $Salida = $mail->ErrorInfo;
    }

    return $Salida;
}