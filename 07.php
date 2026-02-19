<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="07.php" method="get">
        <label for="celsius">Digite a temperatura</label>
        <input type="number" name="celcius" id="celcius">

        <input type="submit" value="Enviar">
    </form>
    <?php

    $temperatura = $_GET["celcius"] ?? 0;

    $fah =  $temperatura * 1.8 + 32;

    echo "Temperatura em Celsius: " . $temperatura . "°C <br>";
    echo "Temperatura em Fahrenheit: " . $fah . " °F";

    ?>

    </body>
    </html>