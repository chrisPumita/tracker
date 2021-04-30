<?php
//Incluimos la clase usuario
include_once ("../model/USUARIO.php");

//instanciando un objeto de la clase usuario y llamo al metodo constructor
$user = new USUARIO("Juan","Perez","Hernández");

$user2 = new USUARIO("","","");

$user2->setNombre("Maria");
$user2->setAmaterno("Martinez");
$user2->setApterno("Gonzalez");

$nombreCompletoDelUsuario1 = $user->getCompleteName();
$nombreCompletoDelUsuario2 = $user2->getCompleteName();
echo $nombreCompletoDelUsuario1. "<br>";
echo $nombreCompletoDelUsuario2. "<br>";