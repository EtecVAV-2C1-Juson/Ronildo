<!--
Data: 12/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

Fórmula: C = 5/9 × (F − 32)
-->
<?php 
    $temp = $_POST["temp"] ?? null;
    $unidade = $_POST["unidade"] ?? null;
    if ($temp !== null && $unidade !== null){
        if ($unidade=="F" || $unidade == "f") {
            $nova_temp = (5/9) * ($temp-32);
            echo "A sua temperatura em Fahrenheit convertida para Celsius é $nova_temp.";
        }
        else if ($unidade=="C" || $unidade=="c") {
            $nova_temp = $temp * 1.8 + 32;
            echo "A sua temperatura em Celsius convertida para Fahrenheit é $nova_temp.";
        } 
        else {
            echo "Por favor, insira 'C' ou 'c' para Celsius e 'F' ou 'f' para Fahrenheit.";
        }
    }
?>