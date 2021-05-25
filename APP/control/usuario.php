<?php
//Incluimos la clase usuario
include_once ("../model/USUARIO.php");

//instanciando un objeto de la clase usuario y llamo al metodo constructor
// la clase posee un consructor que tiene argumentos que deben ser definidos
//$id_usuario, $nombre, $apaterno, $amaterno, $user_name, $correo, $password, $nivel_acceso, $path_img, $estado
$user = new USUARIO("123","Juan","Perez","Hernández","juanito","correo@algo.com","12345","1","google.com","1");
/*
 * //No se puede crear un objeto asi porque con el metodo constructor, NECESITAS instanciar el objeto con sus atributos SI o SI.
$user2 = new USUARIO("","","");

$user2->setNombre("Maria");
$user2->setAmaterno("Martinez");
$user2->setApterno("Gonzalez");
*/
$nombreCompletoDelUsuario1 = $user->getNombreCompleto();
//$nombreCompletoDelUsuario2 = $user2->getCompleteName();
echo $nombreCompletoDelUsuario1. "<br>";
//echo $nombreCompletoDelUsuario2. "<br>";