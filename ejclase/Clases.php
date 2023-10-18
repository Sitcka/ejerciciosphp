<?php
class Persona{
    private $nombre;
    private $edad;
    static $contadorPersonas;

    public function __construct($nombre, $edad){
        $this -> nombre = $nombre;
        $this -> edad = $edad;
        //Self es para llamar el atributo estatico de la clase dentro de la clase
        self::$contadorPersonas++;
    }

    public function getNombre(){
        return $this -> nombre;
    }

    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }


    public function getEdad(){
        return $this -> edad;
    }

    public function setEdad($edad){
        $this -> edad = $edad;
    }


    function __toString()
    {
        return "Persona con Nombre: " . $this -> getNombre() . ", Edad: " . $this -> getEdad();
    }
}