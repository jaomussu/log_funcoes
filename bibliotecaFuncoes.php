<?php

namespace conversor;{

    function dolarParaReal ($valor, $cotacao){
        return $valor * $cotacao;
    }

    function euroParaReal ($valor, $cotacao){
        return $valor * $cotacao;
    }

    function pesoParaReal ($valor, $cotacao){
        return $valor * $cotacao;
    }

    function libraParaReal ($valor, $cotacao){
        return $valor * $cotacao;
    }

    function ieneParaReal ($valor, $cotacao){
        return $valor * $cotacao;
    }

}
namespace geometria;{

    function areaQuadrado($lado){
        return $lado * $lado;
    }

    function areaRetangulo($base, $altura){
        return $base * $altura;
    }

    function areaTriangulo($base, $altura){
        return ($base * $altura) / 2;
    }

    function areaCirculo($raio){
        return 3.14 * $raio ** 2;
    }

    function areaTrapezio($baseMaior, $baseMenor, $altura){
        return ($baseMaior + $baseMenor) * $altura / 2;
    }


}

namespace saude;{

    function calcularImc($peso, $altura){
        return $peso / ($altura * $altura);
    }

    function valorIdealAgua($peso){
        return $peso * 35;
    }

    function frequenciaCardiacaMaxima($idade){
        return 208 - 0.7 * $idade;
    }

    function converterLibrasParaQuilo($libras){
        return $libras * 0.4536;
    }

    function calcularCaloriasBasais($peso, $idade, $sexo, $altura){
        if ($sexo = "Homem"){
            return 66.5 + (13.75 * $peso) + (5.003 * $altura) - (6.75 * $idade);
        }
         else{
            return 655.1 + (9.56 * $peso) + (1.85 * $altura) - (4.68 * $idade);
         }
    }



}
?>
