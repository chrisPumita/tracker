<?php

class USUARIO
{
    private $nombre;
    private $apterno;
    private $amaterno;

    /**
     * USUARIO constructor.
     * @param $nombre
     * @param $apterno
     * @param $amaterno
     */
    public function __construct($nombre, $apterno, $amaterno)
    {
        $this->nombre = $nombre;
        $this->apterno = $apterno;
        $this->amaterno = $amaterno;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApterno()
    {
        return $this->apterno;
    }

    /**
     * @param mixed $apterno
     */
    public function setApterno($apterno): void
    {
        $this->apterno = $apterno;
    }

    /**
     * @return mixed
     */
    public function getAmaterno()
    {
        return $this->amaterno;
    }

    /**
     * @param mixed $amaterno
     */
    public function setAmaterno($amaterno): void
    {
        $this->amaterno = $amaterno;
    }

    public function getCompleteName(){
        $nombreCompleto = $this->getNombre()." ".$this->getApterno()." ".$this->getAmaterno();
        return $nombreCompleto;
    }
}