<?php

$a = 10;
$b = 20;

echo "A é igual a $a";
echo "<br>";
echo "B é igual a $b";
echo "<br>";

$c = $a;
$a = $b;
$b = $c;

echo "A é igual a $a";
echo "<br>";
echo "B é igual a $b";