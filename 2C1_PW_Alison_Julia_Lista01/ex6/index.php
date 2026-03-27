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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Série de Fibonacci</title>
</head>
<body>
    <h1>Insira a quantidade de números da sequência de Fibonacci que deseja ver.</h1><br>
    <form action="ex6.php" method="POST">
        <label>Insira o número: </label>
        <input type="number" name="n1">
        <input type="submit" value="Mostrar">  
    </form>
</body>
</html>