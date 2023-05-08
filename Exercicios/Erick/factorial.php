<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 8, 2023 - 4:34 PM
 -->
<?php
if (isset($_GET['number'])) {
    $number = intval($_GET['number']);
    $factorial = $number;

    while ($number > 1) {
        $factorial *= --$number;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <h1>Fatorial</h1>
    <form>
        <label for="number">Digite um número</label>
        <input type="number" name="number" id="number" min="1" required>
        <input type="submit" value="Gerar">
    </form>

<?php if (isset($factorial)) { ?>
    <h1>Resultado: <?= number_format($factorial, thousands_separator: '.') ?></h1>
<?php } ?>
</body>
</html>
