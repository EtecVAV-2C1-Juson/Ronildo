<!--
Data: 12/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 1 - Intervalo entre 100 e 200
Faça um programa que receba um número e diga se este número está no intervalo entre 100 e 200.
-->
<?php

    $n1 = $_POST["n1"] ?? null;
    if ($n1 !== null) {
    if ($n1>=100 && $n1<=200){
        echo "O número $n1 está entre 100 e 200!";
    }
    else{
        echo "\nO número $n1 não está entre 100 e 200";
    }
    }
?>
