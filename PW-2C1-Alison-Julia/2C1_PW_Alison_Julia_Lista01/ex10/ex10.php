<!--
Data: 15/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto.

Um ano é bissexto se:

É múltiplo de 400
ou
É múltiplo de 4 e não é múltiplo de 100
-->

<?php
    $ano = $_POST["ano"] ?? null;
    if ($ano%400==0 || $ano%4==0 && $ano%100!==0){
        echo "O ano $ano é bissexto.";
    }
    else{
        echo "O ano $ano não é bissexto.";
    }
?>