<?php

class Calificacion
{
    private $idCalificacion;   
		private $nombre;
		private $parcial;
		private $nfinal;
		private $mejoramiento;
		private $promedio;
   
    
     function __construct($idCalificacion, $nombre, $parcial, $nfinal, $mejoramiento, $promedio) {
       self::setIdCalificacion($idCalificacion);
       self::setNombre($nombre);
			 self::setParcial($parcial);
			 self::setNfinal($nfinal);
			 self::setMejoramiento($mejoramiento);
			 self::setPromedio($promedio);
     }
    
     function setIdCalificacion($idCalificacion){
       $this->idCalificacion = $idCalificacion;
     } 
     function getIdCalificacion(){
       return $this->idCalificacion;
     }
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
		 function setParcial($parcial){
       $this->parcial = $parcial;
     } 
     function getParcial(){
       return $this->parcial;
     } 
		 function setNfinal($nfinal){
       $this-> nfinal = $nfinal;
     } 
     function getNfinal(){
       return $this->nfinal;
     } 
		 function setMejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getMejoramiento(){
       return $this->mejoramiento;
     }
		 function setPromedio($promedio){
       $this->promedio = $promedio;
     } 
     function getPromedio(){
       return $this->promedio;
     }   
   
}

?> 
