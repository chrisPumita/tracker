<?php

function generaClaveSesion(){
    return 5555;
}


function genPwTmpInvitados($longitud){
//Carácteres para la contraseña
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $password = "";
//Reconstruimos la contraseña segun la longitud que se quiera
    for($i=0;$i<$longitud;$i++) {
        //obtenemos un caracter aleatorio escogido de la cadena de caracteres
        $password .= substr($str,rand(0,62),1);
    }
//Mostramos la contraseña generada
    return $password;
}


function genNoSegProyecto($longitud){
//Carácteres para la contraseña
    $str = "1234567890";
    $y = date("Y")*2;
    $m = date("m")*3;
    $password = $y.$m.date("d")."";
//Reconstruimos la contraseña segun la longitud que se quiera
    for($i=0;$i<$longitud;$i++) {
        //obtenemos un caracter aleatorio escogido de la cadena de caracteres
        $password .= substr($str,rand(0,9),1);
    }
//Mostramos la contraseña generada
    return $password;
}