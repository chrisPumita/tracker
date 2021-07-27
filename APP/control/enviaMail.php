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
    $body = "
    <div style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#ffffff;color:#45506d;height:100%;line-height:1.4;margin:0;padding:0;width:100%!important'>
    <table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#f8f8f9;margin:0;padding:0;width:100%'>
        <tbody>
            <tr>
                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                    <table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';margin:0;padding:0;width:100%'>
                        <tbody>
                            <tr>
                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';padding:45px 0 35px 0;text-align:center'>
                                    <a href='https://api.positus.global' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#3d4852;font-size:19px;font-weight:bold;text-decoration:none;display:inline-block' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://api.positus.global&amp;source=gmail&amp;ust=1592625966775000&amp;usg=AFQjCNEPExPnyh82o_lbVUFefYsdkgOGuQ'>
                                    <img src='https://ci5.googleusercontent.com/proxy/wGTSgcLYnOCgQ-peyjQ1rpSl0IaQfmAd4MdwbdZpiyTabZmvG8-Xu8fgjPiiWqB7AMI5usTJajaBKvrJXheC6RloNJZx=s0-d-e1-ft#https://api.positus.global/images/logo-positus.png' alt='Positus Logo' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';max-width:100%;border:none;width:175px;height:46px' class='CToWUd'></a>
                                </td>
                            </tr>
                            <tr>
                                <td width='100%' cellpadding='0' cellspacing='0' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#f8f8f9;border-bottom:1px solid #f8f8f9;border-top:1px solid #f8f8f9;margin:0;padding:0;width:100%'>
                                    <table align='center' width='570' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#ffffff;border-radius:6px;border-width:1px;border-style:solid;border-color:#d1d3db;margin:0 auto;padding:0;width:570px'>
                                        <tbody>
                                            <tr>
                                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';max-width:100vw;padding:32px'>
                                                    <h1 style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#172449;font-size:30px;font-weight:bold;margin-top:0;text-align:left'>Olá!</h1>
                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#45506d;font-size:16px;line-height:1.5em;margin-top:0;text-align:left'>Você foi convidade por Thiago Thamiel (thiago@robbu.global) para fazer parte do workspace Toledo Piza na Positus.</p>
                                                    <table align='center' width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';margin:30px auto;padding:0;text-align:center;width:100%'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                    <table width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                                    <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                                                    <a href='https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9' rel='noopener' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';border-radius:4px;color:#fff;font-size:16px;display:inline-block;overflow:hidden;text-decoration:none;background-color:#2e5ee9;border-bottom:11px solid #2e5ee9;border-left:20px solid #2e5ee9;border-right:20px solid #2e5ee9;border-top:11px solid #2e5ee9' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9&amp;source=gmail&amp;ust=1592625966775000&amp;usg=AFQjCNGwY3_7Tr4LHDvmEAW7jL69DJ-4OQ'>Aceitar convite</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#45506d;font-size:16px;line-height:1.5em;margin-top:0;text-align:left'>Saudações,<br>
                                                        Positus
                                                    </p>
                                                    <table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';border-top:1px solid #d1d3db;margin-top:25px;padding-top:25px'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#45506d;line-height:1.5em;margin-top:0;text-align:left;font-size:14px'>Se você estiver com problemas para clicar no botão 'Aceitar convite', copie e cole a URL a seguir no seu navegador: <span style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';word-break:break-all'><a href='https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#ffba6e' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9&amp;source=gmail&amp;ust=1592625966775000&amp;usg=AFQjCNGwY3_7Tr4LHDvmEAW7jL69DJ-4OQ'>https://studio.posit.us/<wbr>verify/workspace/<wbr>cf43bc589ea0fe201ee2d08645c88c<wbr>6ecb9e37c9</a></span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                    <table align='center' width='570' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';margin:0 auto;padding:0;text-align:center;width:570px'>
                                        <tbody>
                                            <tr>
                                                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';max-width:100vw;padding:32px'>
                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';line-height:1.5em;margin-top:0;color:#a2a7b6;font-size:12px;text-align:center'>Positus © 2020 - Todos os direitos reservados</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <div class='yj6qo'></div>
    <div class='adL'></div>
</div>
    ";
    return $body;
}

function getHtmlBody_RegistroAdd($correoSend, $user, $pwtmp, $nombre, $empresaName)
{
    $body = "CUENTA REGTISTRO EXITOSO". $nombre. " ". $empresaName. "<br> Contraseña:  ". $pwtmp ."   <br>user ".$user. " ".$correoSend;
    $body ="
    <div style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#ffffff;color:#45506d;height:100%;line-height:1.4;margin:0;padding:0;width:100%!important'>
    <table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#f8f8f9;margin:0;padding:0;width:100%'>
        <tbody>
            <tr>
                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                    <table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';margin:0;padding:0;width:100%'>
                        <tbody>
                            <tr>
                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';padding:45px 0 35px 0;text-align:center'>
                                    <a href='https://api.positus.global' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#3d4852;font-size:19px;font-weight:bold;text-decoration:none;display:inline-block' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://api.positus.global&amp;source=gmail&amp;ust=1592625966775000&amp;usg=AFQjCNEPExPnyh82o_lbVUFefYsdkgOGuQ'>
                                    <img src='https://ci5.googleusercontent.com/proxy/wGTSgcLYnOCgQ-peyjQ1rpSl0IaQfmAd4MdwbdZpiyTabZmvG8-Xu8fgjPiiWqB7AMI5usTJajaBKvrJXheC6RloNJZx=s0-d-e1-ft#https://api.positus.global/images/logo-positus.png' alt='Positus Logo' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';max-width:100%;border:none;width:175px;height:46px' class='CToWUd'></a>
                                </td>
                            </tr>
                            <tr>
                                <td width='100%' cellpadding='0' cellspacing='0' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#f8f8f9;border-bottom:1px solid #f8f8f9;border-top:1px solid #f8f8f9;margin:0;padding:0;width:100%'>
                                    <table align='center' width='570' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#ffffff;border-radius:6px;border-width:1px;border-style:solid;border-color:#d1d3db;margin:0 auto;padding:0;width:570px'>
                                        <tbody>
                                            <tr>
                                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';max-width:100vw;padding:32px'>
                                                    <h1 style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#172449;font-size:30px;font-weight:bold;margin-top:0;text-align:left'>Olá!</h1>
                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#45506d;font-size:16px;line-height:1.5em;margin-top:0;text-align:left'>Você foi convidade por Thiago Thamiel (thiago@robbu.global) para fazer parte do workspace Toledo Piza na Positus.</p>
                                                    <table align='center' width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';margin:30px auto;padding:0;text-align:center;width:100%'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                    <table width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                                    <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                                                    <a href='https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9' rel='noopener' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';border-radius:4px;color:#fff;font-size:16px;display:inline-block;overflow:hidden;text-decoration:none;background-color:#2e5ee9;border-bottom:11px solid #2e5ee9;border-left:20px solid #2e5ee9;border-right:20px solid #2e5ee9;border-top:11px solid #2e5ee9' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9&amp;source=gmail&amp;ust=1592625966775000&amp;usg=AFQjCNGwY3_7Tr4LHDvmEAW7jL69DJ-4OQ'>Aceitar convite</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#45506d;font-size:16px;line-height:1.5em;margin-top:0;text-align:left'>Saudações,<br>
                                                        Positus
                                                    </p>
                                                    <table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';border-top:1px solid #d1d3db;margin-top:25px;padding-top:25px'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#45506d;line-height:1.5em;margin-top:0;text-align:left;font-size:14px'>Se você estiver com problemas para clicar no botão 'Aceitar convite', copie e cole a URL a seguir no seu navegador: <span style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';word-break:break-all'><a href='https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#ffba6e' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9&amp;source=gmail&amp;ust=1592625966775000&amp;usg=AFQjCNGwY3_7Tr4LHDvmEAW7jL69DJ-4OQ'>https://studio.posit.us/<wbr>verify/workspace/<wbr>cf43bc589ea0fe201ee2d08645c88c<wbr>6ecb9e37c9</a></span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                    <table align='center' width='570' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';margin:0 auto;padding:0;text-align:center;width:570px'>
                                        <tbody>
                                            <tr>
                                                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';max-width:100vw;padding:32px'>
                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';line-height:1.5em;margin-top:0;color:#a2a7b6;font-size:12px;text-align:center'>Positus © 2020 - Todos os direitos reservados</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <div class='yj6qo'></div>
    <div class='adL'></div>
</div>
    ";
    return $body;
}

function getHtmlBody_Registro($nombre,$username,$empresaName)
{
    $body = 'Has creado una cuenta en Proyect Tracker'. $nombre ." ". $username." " . $empresaName;
    $body = "
    <div style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#ffffff;color:#45506d;height:100%;line-height:1.4;margin:0;padding:0;width:100%!important'>
    <table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#f8f8f9;margin:0;padding:0;width:100%'>
        <tbody>
            <tr>
                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                    <table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';margin:0;padding:0;width:100%'>
                        <tbody>
                            <tr>
                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';padding:45px 0 35px 0;text-align:center'>
                                    <a href='https://api.positus.global' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#3d4852;font-size:19px;font-weight:bold;text-decoration:none;display:inline-block' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://api.positus.global&amp;source=gmail&amp;ust=1592625966775000&amp;usg=AFQjCNEPExPnyh82o_lbVUFefYsdkgOGuQ'>
                                    <img src='https://ci5.googleusercontent.com/proxy/wGTSgcLYnOCgQ-peyjQ1rpSl0IaQfmAd4MdwbdZpiyTabZmvG8-Xu8fgjPiiWqB7AMI5usTJajaBKvrJXheC6RloNJZx=s0-d-e1-ft#https://api.positus.global/images/logo-positus.png' alt='Positus Logo' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';max-width:100%;border:none;width:175px;height:46px' class='CToWUd'></a>
                                </td>
                            </tr>
                            <tr>
                                <td width='100%' cellpadding='0' cellspacing='0' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#f8f8f9;border-bottom:1px solid #f8f8f9;border-top:1px solid #f8f8f9;margin:0;padding:0;width:100%'>
                                    <table align='center' width='570' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';background-color:#ffffff;border-radius:6px;border-width:1px;border-style:solid;border-color:#d1d3db;margin:0 auto;padding:0;width:570px'>
                                        <tbody>
                                            <tr>
                                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';max-width:100vw;padding:32px'>
                                                    <h1 style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#172449;font-size:30px;font-weight:bold;margin-top:0;text-align:left'>Olá!</h1>
                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#45506d;font-size:16px;line-height:1.5em;margin-top:0;text-align:left'>Você foi convidade por Thiago Thamiel (thiago@robbu.global) para fazer parte do workspace Toledo Piza na Positus.</p>
                                                    <table align='center' width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';margin:30px auto;padding:0;text-align:center;width:100%'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                    <table width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                                    <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                                                    <a href='https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9' rel='noopener' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';border-radius:4px;color:#fff;font-size:16px;display:inline-block;overflow:hidden;text-decoration:none;background-color:#2e5ee9;border-bottom:11px solid #2e5ee9;border-left:20px solid #2e5ee9;border-right:20px solid #2e5ee9;border-top:11px solid #2e5ee9' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9&amp;source=gmail&amp;ust=1592625966775000&amp;usg=AFQjCNGwY3_7Tr4LHDvmEAW7jL69DJ-4OQ'>Aceitar convite</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#45506d;font-size:16px;line-height:1.5em;margin-top:0;text-align:left'>Saudações,<br>
                                                        Positus
                                                    </p>
                                                    <table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';border-top:1px solid #d1d3db;margin-top:25px;padding-top:25px'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#45506d;line-height:1.5em;margin-top:0;text-align:left;font-size:14px'>Se você estiver com problemas para clicar no botão 'Aceitar convite', copie e cole a URL a seguir no seu navegador: <span style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';word-break:break-all'><a href='https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';color:#ffba6e' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://studio.posit.us/verify/workspace/cf43bc589ea0fe201ee2d08645c88c6ecb9e37c9&amp;source=gmail&amp;ust=1592625966775000&amp;usg=AFQjCNGwY3_7Tr4LHDvmEAW7jL69DJ-4OQ'>https://studio.posit.us/<wbr>verify/workspace/<wbr>cf43bc589ea0fe201ee2d08645c88c<wbr>6ecb9e37c9</a></span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol''>
                                    <table align='center' width='570' cellpadding='0' cellspacing='0' role='presentation' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';margin:0 auto;padding:0;text-align:center;width:570px'>
                                        <tbody>
                                            <tr>
                                                <td align='center' style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';max-width:100vw;padding:32px'>
                                                    <p style='box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';line-height:1.5em;margin-top:0;color:#a2a7b6;font-size:12px;text-align:center'>Positus © 2020 - Todos os direitos reservados</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <div class='yj6qo'></div>
    <div class='adL'></div>
</div>
    ";
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