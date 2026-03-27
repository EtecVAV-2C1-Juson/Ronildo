<!--
Data: 13/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 8 - Soma de 0 até N com Função
Crie uma função soma(n) que receba um número inteiro e retorne a soma de 0 até esse número.
-->

<?php

    
    $n1 = $_POST["n1"] ?? null;
    function soma($n1){
        $soma=0;
        for ($i=0; $i <= $n1; $i++) { 
            $soma += $i;
        }
        return $soma;
    }
    echo "A soma dos números antes de $n1 é: " . soma($n1);
?>