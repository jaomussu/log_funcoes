<?php

namespace matematica;{

    function Somar($a, $b, $c){
    return $a + $b + $c;
    }

    function Subtrair($a, $b){
    return $a - $b;
    }

    function Dividir ($a, $b){
    return $a / $b;
    }

    function Multiplicar ($a, $b){
    return $a * $b;
    }
}

namespace texto;{
    function concaternar($nome, $sobrenome){
        return $nome . " " . $sobrenome;
    
    } 
}

namespace logica;{
    function verificaIdade($idade){
        if ($idade >= 18){
            return "Maior de idade!";
        }
        else{
            return "Menor de idade!";
        }
    }

    function verificaExercito($sexo, $idade){
        if($idade >= 18 && $sexo == "masculino"){
            return "Você está apto a servir ao Exercito";
        }
        else{
            return "Você não cumpre os requisitos";
        }
    }
}

    
?>