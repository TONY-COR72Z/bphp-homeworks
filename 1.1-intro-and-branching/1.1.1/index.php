<?php
    $var = "null"; // null is string XD
    $type;
    $info;
    $styleRed = "style = 'color: red;'";

    if (is_bool($var)) {
        $type = "<span $styleRed>$var</span> is boolean. <br>";
        $info = "Это простейший тип, он выражает истинность значения и может быть либо TRUE, либо FALSE.";
    } elseif (is_int($var)) {
        $type = "<span $styleRed>$var</span> is integer. <br>";
        $info = "Integer - это число из множества ℤ = {..., -2, -1, 0, 1, 2, ...}. <br>
        Размер типа integer зависит от платформы, хотя, как правило, <br>
        максимальное значение примерно равно 2 миллиардам (это 32-битное знаковое). <br>
        64-битные платформы обычно имеют максимальное значение около 9E18, кроме Windows, <br>
        которая всегда 32-битная.";
    } elseif (is_float($var)) {
        $type = "<span $styleRed>$var</span> is float. <br>";
        $info = "Числа с плавающей точкой (также известные как float, double или real) <br>
        Размер числа с плавающей точкой зависит от платформы, хотя максимум, как правило, составляет 1.8e308 <br>
        с точностью около 14 десятичных цифр (64-битный формат IEEE).";
    } elseif (is_string($var)) {
        $type = "<span $styleRed>$var</span> is string. <br>";
        $info ="Строка (тип string) - это набор символов, где символ - это то же самое, что и байт.";
    } elseif (is_null($var)) {
        $type = "Type is NULL. <br>";
        $info ="Специальное значение NULL представляет собой переменную без значения. <br>
        NULL - это единственно возможное значение типа null.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$type?></p>
    <hr>
    <p><?=$info?></p>
</body>
</html>