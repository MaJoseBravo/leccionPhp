<?php

include_once('Calificacion.php');
include_once('Collector.php');

class CalificacionCollector extends Collector
{
  
  function showCalificacion() {
    $rows = self::$db->getRows("SELECT * FROM calificacion ");        
    $arrayCalificacion= array();        
    foreach ($rows as $c){
      $aux = new Calificacion($c{'idCalificacion'},$c{'nombre'},$c{'parcial'},$c{'nfinal'},$c{'mejoramiento'},$c{'promedio'});
      array_push($arrayCalificacion, $aux);
    }
    return $arrayCalificacion;        
  }

}
?>

