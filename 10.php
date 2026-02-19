<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja Mamão com Açúcar</title>
</head>
<body>

<form action="" method="get">
    <label for="valor">Valor da compra:</label>
    <input type="text" name="valor" id="valor">

    <input type="submit" value="Calcular">
</form>

<?php
$valor = $_GET['valor'] ?? 0;

$prestacao = $valor / 5;

echo "Valor de cada prestação: R$ $prestacao";
?>

</body>
</html>