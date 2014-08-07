<?php
include_once("UsuarioCollector.php");

$id =1;

$UsuarioCollectorObj = new UsuarioCollector();

foreach ($UsuarioCollectorObj->showUsuarios() as $c){
  echo "<div>";
  echo $c->getIdUsuario() . "  && " . $c->getNombre() . "  && " . $c->getContrasena();                                     
  echo "</div>"; 
}


?>
