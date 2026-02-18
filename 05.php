<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method="get">
    <label for="nome">Nome do aluno</label>
    <input type="text" name="nome" id="nome">

    <label for="n1">Primeira nota</label>
    <input type="text" name="n1" id="n1">

    <label for="n2">Segunda nota</label>
    <input type="text" name="n2" id="n2">

    <label for="n3">Terceira nota</label>
    <input type="text" name="n3" id="n3">

    <input type="submit" value="Calcular">
</form>

<?php

$nome = $_GET['nome'] ?? "";
$n1 = $_GET['n1'] ?? 0;
$n2 = $_GET['n2'] ?? 0;
$n3 = $_GET['n3'] ?? 0;

$media = ($n1 + $n2 + $n3) / 3;

echo "Nome: ";
echo $nome;
echo "<br>";

echo "Média: ";
echo $media;

?>

</body>
</html>
