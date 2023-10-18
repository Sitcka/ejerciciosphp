<?php

class Profesor extends Persona
{
    private $codigoProfesor;

    public function __construct($nombre, $edad, $codigoProfesor)
    {
        parent :: __construct($nombre, $edad);
        $this -> codigoProfesor = $codigoProfesor;
    }

    public function getCodigoProfesor(){
        return $this -> codigoProfesor;
    }

    public function setCodigoProfesor($codigoProfesor){
        $this -> codigoProfesor = $codigoProfesor;
    }



    function __toString()
    {
        // De esta manera se llama la funcion toString de la clase padre que es Persona: parent :: __toString();
        return "Profesor con Codigo:  " . $this -> getCodigoProfesor();
    }
}
