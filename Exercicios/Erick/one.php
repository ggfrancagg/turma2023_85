<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 4, 2023 - 3:13 PM

if (isset($_GET['number'])) {
    $number = intval($_GET['number']);
    $isEven = $number % 2 === 0;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar?</title>
</head>
<body>
    <form>
        <input type="number" name="number" placeholder="Digite um Número" value="<?= isset($number) ? $number : '0' ?>" required>
        <input type="submit" value="Verificar">
    </form>
    <?php if (isset($isEven)) { ?>
        <h1>
            <?= $isEven ? 'Par' : 'Impar' ?>
        </h1>
    <?php } ?>
</body>
</html>
