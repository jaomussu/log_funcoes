<?php

require_once "bibliotecaFuncoes.php";

use function conversor\dolarParaReal;
use function conversor\euroParaReal;
use function conversor\pesoParaReal;
use function conversor\libraParaReal;
use function conversor\ieneParaReal;
use function geometria\areaQuadrado;
use function geometria\areaRetangulo;
use function geometria\areaTriangulo;
use function geometria\areaCirculo;
use function geometria\areaTrapezio;
use function saude\calcularImc;
use function saude\valorIdealAgua;
use function saude\frequenciaCardiacaMaxima;
use function saude\converterLibrasParaQuilo;
use function saude\calcularCaloriasBasais;

//echo "\nDolar para Real: ", dolarParaReal(5, 5.00);

//echo "\nEuro para Real: ", euroParaReal(10, 5.84);

//echo "\nPeso para Real: ", pesoParaReal(300, 0.0035);

//echo "\nLibra para Real: ", libraParaReal(20, 6.71);

//echo "\nIene para Real: ", ieneParaReal(100, 0.031);


//echo "\nArea do quadrado: ", areaQuadrado(2);

//echo "\nArea do retangulo: ", areaRetangulo(4, 8);

//echo "\nArea do triangulo: ", areaTriangulo(3, 6);

//echo "\nArea do circulo: ", areaCirculo(2);

//echo "\nArea do trapezio: ", areaTrapezio(10, 6, 4);


echo "\nCalcular IMC: ", calcularImc(81, 1.84);

echo "\nValor ideal agua: ", valorIdealAgua(81);

echo "\nFrequencia cardiaca Maxima: ", frequenciaCardiacaMaxima(17);

echo "\nConverter libras para kilo: ", converterLibrasParaQuilo(30);

echo "\nCalculcar calorias basais: ", calcularCaloriasBasais(81, 17, "Homem", 184);

?>