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
function enviaCorreoRegistro($nombre, $correo, $empresa)
{
    $body = getHtmlBody_Registro($nombre, $empresa, $correo);
    return objMailSend($correo,"Registro","Registro en ProyecTracker",$body);
}

function enviaCorreoInvitacion($nombre, $correo, $empresa)
{

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
    $body = 'HAY UN SEGIMIENTO DE UN PROYECTO';
    return $body;
}

function getHtmlBody_Registro($nombre, $empresa, $correo)
{
    $body = 'REGTISTRO EXITOSO';
    return $body;
}

function getHtmlBody_AddUser($nombre, $empresa, $correo)
{
    $body = 'Tienes una cuenta en ProyectTracker';
    return $body;
}


function getHtmlBody_Contacto($nombre, $empresa, $correo)
{
    $body = 'Tienes una cuenta en ProyectTracker';
    return $body;
}




/* General obj send mail*/
function objMailSend($toMail, $intencion, $asunto, $body)
{
    //creando un obj de PHPMailer
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

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
    $mail->FromName = 'ProyecTraacker | '.$intencion;
    $mail->AddAddress($para); // Dirección a la que llegaran los mensajes

    $mail->Port = PORT_SMTP;
    $mail->IsHTML(true);
    $mail->Subject  = $asunto;
    $mail->Body = $body;
    return $mail->Send();
}