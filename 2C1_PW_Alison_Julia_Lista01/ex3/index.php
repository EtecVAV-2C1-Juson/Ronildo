<!--
Data: 12/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Aritmética</title>
</head>
<body>
    <h1>Insira dois valores e um operador(+, -, * ou /) para realizar o cálculo.</h1><br>
    <form action="ex3.php" method="POST">
        <label>Primerio número: </label>
        <input name="n1" type="number" step="any" required><br>
        <label>Operação(+, -, *, /): </label>
        <input name="op" type="text"><br>
        <label>Segundo número: </label>
        <input name="n2" type="number" step="any" required><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
