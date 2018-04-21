<?php
$nombre = $_POST['nombres'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];

$myfile = fopen("laboratorioclinico.pl", "a") or die("Unable to open file!");
$linea = "tiene_edad(".$nombre.", "."".$genero.", ".$edad.")."."\n";
fwrite($myfile, $linea);
fclose($myfile);
echo "Se ha registrado correctamente el paciente.";
?>

