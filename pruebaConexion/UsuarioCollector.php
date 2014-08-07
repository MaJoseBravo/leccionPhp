<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idUsuario'},$c{'nombre'},$c{'contrasena'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

}
?>

