<!--
Data: 12/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somatório de Fatoriais</title>
</head>
<body>
    <h1>Digite 5 números para realizar a soma de seus fatoriais.</h1><br>
    <form action="ex5.php" method="POST">
        <label>1º Número: </label>
        <input name="n1" type="number"><br>
        <label>2º Número: </label>
        <input name="n2" type="number"><br>
        <label>3º Número: </label>
        <input name="n3" type="number"><br>
        <label>4º Número: </label>
        <input name="n4" type="number"><br>
        <label>5º Número: </label>
        <input name="n5" type="number"><br>
        <input type="submit" value="Calcular.">
    </form>
</body>
</html>