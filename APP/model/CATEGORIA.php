<?php


class CATEGORIA
{
    private $id_categoria;
    private $nombre_categoria;

    /**
     * @return mixed
     */
    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    /**
     * @param mixed $id_categoria
     */
    public function setIdCategoria($id_categoria): void
    {
        $this->id_categoria = $id_categoria;
    }

    /**
     * @return mixed
     */
    public function getNombreCategoria()
    {
        return $this->nombre_categoria;
    }

    /**
     * @param mixed $nombre_categoria
     */
    public function setNombreCategoria($nombre_categoria): void
    {
        $this->nombre_categoria = $nombre_categoria;
    }


}