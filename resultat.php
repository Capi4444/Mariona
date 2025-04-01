<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pedra,paper o tisores</title>
</head>
<body>

<?php

$usuari = $_GET["opcio"];
echo "Has escollit ". $usuari;

echo "<br><br>";


$maquina = array("pedra", "paper", "tisores");
$aleatori = rand(0,2);
$opcio_maquina=$maquina[$aleatori];

echo "La màquina ha escollit ". $opcio_maquina . "<br><br>";

if($usuari == "pedra" && $opcio_maquina == "pedra")
{
echo "Empat";
}

elseif($usuari == "pedra" && $opcio_maquina == "paper")
{
    echo "Guanya la maquina";
}

elseif($usuari == "pedra" && $opcio_maquina == "tisora")
{
    echo "Guanya l'usuari";
}

elseif($usuari == "paper" && $opcio_maquina == "pedra")
{
    echo "Guanya l'usuari";
}

elseif($usuari == "paper" && $opcio_maquina == "paper")
{
    echo "Empat";
}

elseif($usuari == "paper" && $opcio_maquina == "tisora")
{
    echo "Guanya la maquina";
}

elseif($usuari == "tisora" && $opcio_maquina == "pedra")
{
    echo "Guanya la maquina";
}

elseif($usuari == "tisora" && $opcio_maquina == "tisora")
{
    echo "Empat";
}

elseif($usuari == "tisora" && $opcio_maquina == "paper")
{
    echo "Guanya l'usuari";
}

 ?> 

</body>
</html>
