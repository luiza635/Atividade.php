<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Rendimento Poupança</title>
</head>
<body>

<form action="" method="get">
    <label for="valor">Valor depositado:</label>
    <input type="text" name="valor" id="valor">

    <input type="submit" value="Calcular">
</form>

<?php
$valor = $_GET['valor'] ?? 0;

$juros = 0.007; // 0,70%

$rendimento = $valor * $juros;
$valor_final = $valor + $rendimento;

echo "Valor após 1 mês: R$ $valor_final";
?>

</body>
</html>