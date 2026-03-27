<!--
Data: 13/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 9 - Média Aritmética com Função
Crie uma função:

function media($v)

Que receba uma lista de números reais e retorne a média aritmética.
-->

<?php

function media($v)
{
    $soma = 0;

    foreach ($v as $num) {
        $soma += $num;
    }

    return $soma / count($v);
}

if (isset($_POST["btnGerar"])) {

    $qtd = $_POST["qtd"];

    echo "<form method='POST'>";

    for ($i = 0; $i < $qtd; $i++) {
        echo "Número " . ($i + 1) . ": ";
        echo "<input type='text' name='num[]'><br>";
    }

    echo "<input type='submit' name='btnCalcular' value='Calcular Média'>";
    echo "</form>";
}

if (isset($_POST["btnCalcular"])) {

    $valores = $_POST["num"];

    echo "Média: " . media($valores);
}

?>