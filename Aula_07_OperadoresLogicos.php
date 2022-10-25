<?php

$valor1 = true;
$valor2 = false;

$result1 = $valor1 && $valor2;
echo $result1, "<br>";

$valor3 = true;
$valor4 = false;

$result2 = $valor3 || $valor4;
echo $result2, "<br>";

$valor5 = true;
$valor6 = false;

$result3 = !$valor5;
echo $result3;