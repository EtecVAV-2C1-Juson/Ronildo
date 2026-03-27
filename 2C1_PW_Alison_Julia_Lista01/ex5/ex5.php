<!--
Data: 12/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
-->

<?php
    $n1 = $_POST["n1"] ?? null;
    $n2 = $_POST["n2"] ?? null;
    $n3 = $_POST["n3"] ?? null;
    $n4 = $_POST["n4"] ?? null;
    $n5 = $_POST["n5"] ?? null;
    $soma = 0;
    $fat1 = 1;
    for ($i=1; $i <= $n1; $i++) { 
        $fat1 *= $i;
    }
    $fat2 = 1;
    for ($i=1; $i <= $n2; $i++) { 
        $fat2 *= $i;
    }
    $fat3 = 1;
    for ($i=1; $i <= $n3; $i++) { 
        $fat3 *= $i;
    }
    $fat4 = 1;
    for ($i=1; $i <= $n4; $i++) { 
        $fat4 *= $i;
    }
    $fat5 = 1;
    for ($i=1; $i <= $n5; $i++) { 
        $fat5 *= $i;
    }
    $soma = $fat1 + $fat2 + $fat3 + $fat4 + $fat5;
    echo "A soma dos fatorias de $n1, $n2, $n3, $n4 e $n5 é: $soma."
?>