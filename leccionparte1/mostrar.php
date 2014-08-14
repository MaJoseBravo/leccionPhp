<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>LeccionPHP</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap.css" rel="stylesheet">    
<body>  
<div class="col-md-12">
<table class ="table-bordered">  
   <tr>
		 <td width="157" align="center"><Strong>Id</td>     
     <td width="157" align="center"><Strong>Nombre</td>
     <td width="157" align="center"><Strong>Parcial</td>
		 <td width="157" align="center"><Strong>Final</td>
		 <td width="157" align="center"><Strong>Mejoramiento</td>
		 <td width="157" align="center"><Strong>Promedio</td>  
   </tr>
<?php
include_once("CalificacionCollector.php");
$calificacionCollectorObj = new CalificacionCollector();
foreach ($calificacionCollectorObj->showCalificacion() as $c){
  echo '<tr>';
  echo '<td width="157" align="center">'. $c->getIdCalificacion().'</td>';
  echo '<td width="157" align="center">'. $c->getNombre().'</td>';
	echo '<td width="157" align="center">'. $c->getParcial().'</td>';
	echo '<td width="157" align="center">'. $c->getNfinal().'</td>';
	echo '<td width="157" align="center">'. $c->getMejoramiento().'</td>';
  echo '<td width="157" align="center">'. $c->getPromedio().'</td>';
	echo '<tr>';
}
?>
</table>
</div>
</body>
</html>
