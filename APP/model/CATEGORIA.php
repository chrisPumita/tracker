<?php

include_once "CONEXION.php";
class CATEGORIA extends CONEXION
{
    function consultaCategorias(){
        $query = "SELECT `id_categoria`, `nombre_categoria`, `imagen_url` FROM `categoria` ORDER BY `categoria`.`nombre_categoria` ASC";
         $this->connect();
         $result = $this->getData($query);
         $this->close();
         return $result;
    }
}