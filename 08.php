<!DOCTYPE html>
<html>
<head>
    <title>Conversão Dólar para Real</title>
</head>
<body>

<h2>Conversão de Dólar para Real</h2>

<form method="post">
    Cotação do dólar:
    <input type="text" name="cotacao"><br><br>
    Quantidade de dólares: <input type="text" name="dolares"><br><br>
    <input type="submit" value="Converter">
</form>

<?php
if(isset($_POST['cotacao']) && isset($_POST['dolares'])){

    $cotacao = $_POST['cotacao'];
    $dolares = $_POST['dolares'];

    $reais = $cotacao * $dolares;

    echo "<h3>Valor em Reais: R$ $reais</h3>";
}
?>

</body>
</html>