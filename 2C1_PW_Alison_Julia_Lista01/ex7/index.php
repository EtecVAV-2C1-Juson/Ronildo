<!--
Data: 13/03/2026
Autor: Alison Gustavo Valli, Julia Furtado Polycarpo
Objetivo:

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Positivos e Negativos</title>
</head>
<body>
    <h1>Insira 8 valores positivos e negativos para serem separados.</h1>
    <form action="ex7.php" method="POST">
        <label>Digite o 1º número: </label>
        <input type="number" name="n[]">
        <br>
        <label>Digite o 2º número: </label>
        <input type="number" name="n[]">
        <br>
        <label>Digite o 3º número: </label>
        <input type="number" name="n[]">
        <br>
        <label>Digite o 4º número: </label>
        <input type="number" name="n[]">
        <br>
        <label>Digite o 5º número: </label>
        <input type="number" name="n[]">
        <br>
        <label>Digite o 6º número: </label>
        <input type="number" name="n[]">
        <br>
        <label>Digite o 7º número: </label>
        <input type="number" name="n[]">
        <br>
        <label>Digite o 8º número: </label>
        <input type="number" name="n[]">
        <br>
        <input type="submit" value="Separar">
    </form>
</body>
</html>