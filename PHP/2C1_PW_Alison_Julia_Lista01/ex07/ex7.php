<!--
Data: 12/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos
-->

<?php
    $vetorn = $_POST["n"] ?? null;
    $positivos = [];
    $negativos = [];
    foreach ($vetorn as $numero) {
        if ($numero >= 0) {
            $positivos[] = $numero;
        }
        else {
            $negativos[] = $numero;
        }
    }
    echo "Os positivos são: ";
    foreach ($positivos as $p) {
        echo "$p ";
    }
    echo "<br>Os negativos são: ";
    foreach ($negativos as $n) {
        echo "$n ";
    }
?>