<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 10, 2023 - 4:10 PM
  -- Task: Get an indeterminated number of ages and output their count and average
 -->
<?php
$agesCount = isset($_GET['agesCount']) ? intval($_GET['agesCount']) : 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de Idades</title>
</head>
<body>
    <form>
        <?php for ($i = 0; $i < $agesCount; $i++) { ?>
            <div>
                <label>Digite a <?= $i + 1 ?>&ordf; idade:</label>
                <input type="number" name="ages[]" min="0" max="100" required>
            </div>
        <?php } ?>
        <a href="?agesCount=<?= $agesCount + 1 ?>">Adicionar Idade</a>  <br>
        <input type="submit" value="Calcular">
    </form>
    <?php if (isset($_GET['ages'])) {
        $ages = array_map(function($a) { return intval($a); }, $_GET['ages']);
        $average = array_sum($ages) / count($ages);
    ?>
        <h1>Você digitou <?= count($ages) ?> idades e a média é: <?= number_format($average, 2) ?></h1>
    <?php } ?>
</body>
</html>
