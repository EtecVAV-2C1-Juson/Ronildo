<!--
Data: 12/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 6 - Série de Fibonacci
Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.

Exemplo:
n = 12
Resultado:
0 1 1 2 3 5 8 13 21 34 55 89
-->


<?php
    $n1 = $_POST["n1"] ?? null;
    $fbn1 = 0;
    $fbn2 = 0;
    $fbn3 = 1;
    for ($i=0; $i < $n1; $i++) { 
        echo "$fbn1 ";
        $fbn1 = $fbn2 + $fbn3;
        $fbn3 = $fbn2;
        $fbn2 = $fbn1;
    }
?>