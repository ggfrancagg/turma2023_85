<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 4, 2023 - 3:28 PM
if (isset($_GET['numbers'])) {
    $numbers = $_GET['numbers'];
    $max = max($numbers);
    $min = min($numbers);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual é o maior e o menor?</title>
</head>
<body>
    <form>
        <input type="number" name="numbers[]" placeholder="Digite um Número" autofocus required>
        <input type="number" name="numbers[]" placeholder="Digite um Número" required>
        <input type="number" name="numbers[]" placeholder="Digite um Número" required>
        <input type="submit" value="Verificar">
    </form>

    <?php if (isset($min, $max)) { ?>
        <h1>O menor número é <?= $min ?></h1>
        <h1>O mair número é <?= $max ?></h1>
    <?php } ?>
</body>
</html>
