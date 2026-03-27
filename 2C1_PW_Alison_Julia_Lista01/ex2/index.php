<!--
Data: 12/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

Fórmula: C = 5/9 × (F − 32)
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
</head>
<body>
    <h1>Insira um valor e informe se é Celsius ou Fahrenheit com C ou F.</h1><br>
    <form action="ex2.php" method="POST">
        <label>Temperatura: </label>
        <input type="number" name="temp"><br>
        <label>Celsius(C) ou Fahrenheit(F): </label>
        <input type="text" name="unidade">
        <input type="submit" value="Converter.">
    </form>
</body>
</html>