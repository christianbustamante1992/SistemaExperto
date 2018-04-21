<?php
$valort3 = $_POST['t3'];
$valortt4 = $_POST['t4'];
$valorttsh = $_POST['tsh'];
$valorteedad = $_POST['edad'];

$rango = "";
if(($valorteedad>0)&&($valorteedad<3)){
    $rango = "0_2";
}

if(($valorteedad>2)&&($valorteedad<6)){
    $rango = "3_5";
}

if(($valorteedad>5)&&($valorteedad<9)){
    $rango = "6_8";
}

if(($valorteedad>8)&&($valorteedad<13)){
    $rango = "9_12";
}

if($valorteedad>12){
    $rango = "12";
}

$query = "\"C:/Program Files (x86)/swipl/bin/swipl.exe\" -f laboratorioclinico.pl -g hipertiroidismo($rango,t3,$valort3),-t halt";
$resultadohipert3 = exec($query);
$query = "\"C:/Program Files (x86)/swipl/bin/swipl.exe\" -f laboratorioclinico.pl -g hipotiroidismo($rango,t3,$valort3),-t halt";
$resultadohipot3 = exec($query);

$query1 = "\"C:/Program Files (x86)/swipl/bin/swipl.exe\" -f laboratorioclinico.pl -g hipertiroidismo($rango,t4,$valortt4),-t halt";
$resultadohipert4 = exec($query1);
$query1 = "\"C:/Program Files (x86)/swipl/bin/swipl.exe\" -f laboratorioclinico.pl -g hipotiroidismo($rango,t4,$valortt4),-t halt";
$resultadohipot4 = exec($query1);

$query2 = "\"C:/Program Files (x86)/swipl/bin/swipl.exe\" -f laboratorioclinico.pl -g hipertiroidismo($rango,tsh,$valorttsh),-t halt";
$resultadohipertsh = exec($query2);
$query2 = "\"C:/Program Files (x86)/swipl/bin/swipl.exe\" -f laboratorioclinico.pl -g hipotiroidismo($rango,tsh,$valorttsh),-t halt";
$resultadohipotsh = exec($query2);

if((strlen($resultadohipot3)>0)||(strlen($resultadohipert3)>0)){
    echo $resultadohipert3." ".$resultadohipot3;
}else{
    if((strlen($resultadohipot4)>0)||(strlen($resultadohipert4)>0)){
        echo $resultadohipert4." ".$resultadohipot4;
    }else{
        if((strlen($resultadohipotsh)>0)||(strlen($resultadohipertsh)>0)){
            echo $resultadohipertsh." ".$resultadohipotsh;
        }else{
            echo "Usted no padece de ningun tipo de Tiroides";
        }
        
    }
}


?>

