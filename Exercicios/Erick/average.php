<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 8, 2023 - 5:13 PM
 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de 5 Números</title>
    <style>
        input[type=submit] {
            margin-top: 1em;
        }
    </style>
</head>
<body>
    <form>
        <input type="number" name="numbers[]" placeholder="Digite um Número" min="1" required>
        <input type="number" name="numbers[]" placeholder="Digite um Número" min="1" required>
        <input type="number" name="numbers[]" placeholder="Digite um Número" min="1" required>
        <input type="number" name="numbers[]" placeholder="Digite um Número" min="1" required>
        <input type="number" name="numbers[]" placeholder="Digite um Número" min="1" required>

        <input type="submit" value="Calcular Média">
    </form>
<?php if (isset($_GET['numbers'])) {
    $numbers = array_map(fn($num) => intval($num), $_GET['numbers']);
    $average = array_sum($numbers) / count($numbers);
?>
    <h1>A média é <?= $average ?></h1>
<?php } ?>
</body>
</html>
