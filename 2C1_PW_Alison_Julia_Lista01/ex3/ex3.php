<!--
Data: 12/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->

<?php
    $n1 = $_POST["n1"] ?? null;
    $n2 = $_POST["n2"] ?? null;
    $op = $_POST["op"] ?? null;
    if ($n1 !== null || $n2 !== null || $op !== null) {
        if ($op == "+") {
            $res = $n1 + $n2; 
            echo "A soma de $n1 e $n2 é: $res.";
        }
        else if ($op == "-") {
            $res = $n1 - $n2;
            echo "A subtração de $n1 e $n2 é: $res.";
        }
        else if ($op == "*") {
            $res = $n1 * $n2;
            echo "A multiplicação de $n1 e $n2 é: $res.";
        }
        else if ($op == "/") {
            $res = $n1 / $n2;
            echo "A divisão de $n1 por $n2 é: $res.";
        }
        else {
            echo "Insira uma operação válida.";
        }
    }
?>