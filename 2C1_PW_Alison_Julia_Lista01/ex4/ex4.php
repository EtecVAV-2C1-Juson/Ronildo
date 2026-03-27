<!--
Data: 12/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 4 - Triângulo Numérico
Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6
-->

<?php
    $n1 = $_POST["n1"] ?? null;
    for($i = 0; $i <= $n1; $i++){
        echo "<p>\n</p>";
        for($j = 1; $j <= $i; $j++){
            echo "$j ";
        }
    }
?>