<?php

if (filter_has_var(INPUT_POST, "nombre")){
$nombre = filter_input(INPUT_POST, "nombre");
print "Nombre: $nombre </br>";
} 
if (filter_has_var(INPUT_POST, "parcial")){
$parcial = filter_input(INPUT_POST, "parcial");
print "Parcial: $parcial </br>";
}
if (filter_has_var(INPUT_POST, "final")){
$final = filter_input(INPUT_POST, "final");
print "Final: $final </br>";
}
if (filter_has_var(INPUT_POST, "mejoramiento")){
$mejoramiento = filter_input(INPUT_POST, "mejoramiento");
print "Mejoramiento: $mejoramiento";
}
if ($parcial > $final or $parcial > $mejoramiento){
	$aux1 = $parcial;
} else{
		$aux1 = 0;	
	}
if ($final > $parcial or $final > $mejoramiento){
		$aux2 = $final;	
} else{
		$aux2 = 0;	
	}
if ($mejoramiento > $parcial or $mejoramiento > $final){
		$aux3 = $mejoramiento;	
} else{
		$aux3 = 0;	
	}
$promedio = ($aux1 + $aux2 + $aux3)/2;
print "Promedio: $promedio";
?>
