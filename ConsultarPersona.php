<?php
$resultado = $_POST['nombrepaciente'];

$nombres = split(" ", $resultado);
$nombre = strtolower($nombres[0]);
$apellido = strtolower($nombres[1]);
$resultado = $nombre."_".$apellido;
$cmd = "\"C:/Program Files (x86)/swipl/bin/swipl.exe\" -f laboratorioclinico.pl -g findall(X,sexo($resultado),L),-t halt";
       $output = exec($cmd);
       $output = strtoupper($output);
$cmd = "\"C:/Program Files (x86)/swipl/bin/swipl.exe\" -f laboratorioclinico.pl -g findall(X,edad($resultado),L),-t halt";
       $output1 = exec($cmd);


echo $output1.";".$output;
?>