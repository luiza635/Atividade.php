<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method="get">
    <label for="nome">Nome do vendedor</label>
    <input type="text" name="nome" id="nome">

    <label for="salario">Salário fixo</label>
    <input type="text" name="salario" id="salario">

    <label for="vendas">Total de vendas</label>
    <input type="text" name="vendas" id="vendas">

    <input type="submit" value="Calcular">
</form>

<?php

$nome = $_GET['nome'] ?? "";
$salario = $_GET['salario'] ?? 0;
$vendas = $_GET['vendas'] ?? 0;

$salariofinal = $salario + ($vendas * 0.15);

echo "Nome: ";
echo $nome;
echo "<br>";

echo "Salario fixo: ";
echo $salario;
echo "<br>";

echo "Salario final: ";
echo $salariofinal;

?>

</body>
</html>
