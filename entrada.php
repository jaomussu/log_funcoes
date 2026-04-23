<?php

require_once "biblioteca.php";

use function matematica\Somar;
use function texto\concaternar;
use function logica\verificaIdade;
use function logica\verificaExercito;

echo "Soma: ", Somar(1,1,1); "\n";
echo "Nome Completo: ", concaternar("João", "Silva");

echo "Status: ", verificaIdade(19);
echo "Exercito: ", verificaExercito(19, "masculino");

?>