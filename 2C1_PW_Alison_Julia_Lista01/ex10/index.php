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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano Bissexto</title>
</head>
<body>
    <h1>Insira um ano para descobrir se ele é bissexto ou não.</h1>
    <form action="ex10.php" method="POST">
        <label>Insira o número: </label>
        <input type="number" name="ano">
        <input type="submit" value="Descobrir">
    </form>
</body>
</html>
