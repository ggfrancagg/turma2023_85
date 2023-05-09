<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 8, 2023 - 3:58 PM
  -- Task: Take the first 100 odd numbers and calculate their average
-->
<?php
$oddNumbers = [];

foreach (range(0, 100) as $number) {
    if ($number % 2 !== 0 && $number % 3 === 0) {
        $oddNumbers []= $number;
    }
}

$sum = 0;

foreach ($oddNumbers as $number) {
    $sum += $number;
}

$average = $sum / count($oddNumbers);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Dos Números Ímpares</title>
</head>
<body>
    <h1>Media Dos Números Ímpares De 0 até 100 Divisiveis Por 3:</h1>
    <h2><?= $average ?></h2>
</body>
</html>
