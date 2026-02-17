<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 03</title>
</head>
<body>
    <form action="" method="get">
        <label for="distancia">Distância percorrida (km)</label>
        <input type="text" name="distancia" id="distancia">
        
        <label for="combustivel">Combustível gasto (litros)</label>
        <input type="text" name="combustivel" id="combustivel">

        <input type="submit" value="Calcular Consumo">
    </form>
<?php

$distancia = $_GET['distancia'] ?? 0;
$combustivel = $_GET['combustivel'] ?? 0;


echo "Distância: ";
echo $distancia;
echo " km";
echo "<br>";

echo "Combustível: ";
echo $combustivel;
echo " litros";
echo "<br>";

echo "Consumo Médio: ";

if ($combustivel > 0) {
    echo $distancia / $combustivel;
    echo " km/l";
} else {
    echo "0 (Aguardando dados)";
}
?>

</body>
</html>