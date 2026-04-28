<?php

require_once "bibliotecaFuncoes.php";

use function conversor\dolarParaReal;
use function conversor\euroParaReal;
use function conversor\pesoParaReal;
use function conversor\libraParaReal;
use function conversor\ieneParaReal;

echo "Dolar para Real: ", dolarParaReal(5, 5.00); 
"\n";
echo "Euro para Real: ", euroParaReal(10, 5.84); 
"\n";
echo "Peso para Real: ", pesoParaReal(300, 0.0035); 
"\n";
echo "Libra para Real: ", libraParaReal(20, 6.71); 
"\n";
echo "Iene para Real: ", ieneParaReal(100, 0.031); 
"\n";

?>