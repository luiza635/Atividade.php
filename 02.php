<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 02</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Primeiro número</label>
        <input type="text" name="n1" id="n1">
        
        <label for="n2">Segundo número</label>
        <input type="text" name="n2" id="n2">

        <input type="submit" value="Enviar">
    </form>
<?php
$n1 = $_GET['n1'] ?? 0;
$n2 = $_GET['n2'] ?? 0;

echo "Soma: " . ($n1 + $n2) . "<br>";
echo "Subtração: " . ($n1 - $n2) . "<br>";
echo "Multiplicação: " . ($n1 * $n2) . "<br>";

if ($n2 != 0) {
    echo "Divisão: " . ($n1 / $n2);
} else {
    echo "Divisão: Não é possível dividir por zero";
}
?>

</body>
</html>