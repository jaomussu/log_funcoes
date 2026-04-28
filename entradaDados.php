<?php

require_once "bibliotecaFuncoes.php";

use function conversor\dolarParaReal;
use function conversor\euroParaReal;
use function conversor\pesoParaReal;
use function conversor\libraParaReal;
use function conversor\ieneParaReal;

echo "\nDolar para Real: ", dolarParaReal(5, 5.00);

echo "\nEuro para Real: ", euroParaReal(10, 5.84);

echo "\nPeso para Real: ", pesoParaReal(300, 0.0035);

echo "\nLibra para Real: ", libraParaReal(20, 6.71);

echo "\nIene para Real: ", ieneParaReal(100, 0.031);

?>