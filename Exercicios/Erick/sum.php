<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 8, 2023 - 5:21 PM
 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos Números</title>
</head>
<body>
<?php
$sum = 0;

for ($i = 0; $i <= 100; $i++) {
    $sum += $i;
}
?>
<h1>A soma dos números de 0 à 100 é: <?= $sum ?></h1>
</body>
</html>
