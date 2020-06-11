<?php
class Especialidad extends BaseModel
{
    private $cod_especialidad;
    private $nombre;
    private $descripcion;

    public  function __construct($_cod = null, $_nom = null, $_desc = null){
        $this->table = "especialidad";
        $this->cod_especialidad = $_cod;
        $this->nombre= $_nom;
        $this->descripcion = $_desc;
        parent::__construct();
    }

    /**
     * Get the value of cod_especialidad
     */ 
    public function getCod_especialidad()
    {
        return $this->cod_especialidad;
    }

    /**
     * Set the value of cod_especialidad
     *
     * @return  self
     */ 
    public function setCod_especialidad($cod_especialidad)
    {
        $this->cod_especialidad = $cod_especialidad;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}
?>