<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 4, 2023 - 3:50 PM
# Inputs: KM (start), KM (end), Fuel Consumed (liters)
# Output: Average fuel consumption per liter
# Formula: KMr / FF

if (isset($_GET['start'], $_GET['end'], $_GET['consumed'])) {
    $start = intval($_GET['start']);
    $end = intval($_GET['end']);
    $consumed = intval($_GET['consumed']);
    $average = ($end - $start) / ($consumed);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odômetro</title>
    <style>
        form, form div {
            display: flex;
            flex-direction: column;
        }

        form {
            gap: 0.5rem;
        }
    </style>
</head>
<body>
    <?php if (isset($consumed)) { ?>
        <h1>Média de consumo: <?= $average ?> km/l</h1>
        <a href="./four.php">Calcular Novamente</a>
    <?php } else { ?>
        <form>
            <div>
                <label>Kilômetragem no inicio do dia</label>
                <input type="number" name="start">
            </div>
            <div>
                <label>Kilômetragem no final do dia</label>
                <input type="number" name="end">
            </div>
            <div>
                <label>Quantos Litros de combustível você gastou</label>
                <input type="number" name="consumed">
            </div>
            <input type="submit" value="Calcular">
        </form>
    <?php } ?>
</body>
</html>
