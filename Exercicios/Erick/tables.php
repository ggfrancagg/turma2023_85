<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 8, 2023 - 5:06 PM
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuadas de 1 à 5</title>
    <style>
        body {
            display: flex;
            justify-content: space-around;
            background: #202020;
            color: white;
            font-family: Helvetica;
            font-size: larger;
        }
    </style>
</head>
<body>
<?php
for ($table = 1; $table <= 5; $table++) {
?>
<table>
    <?php for ($j = 1; $j <= 10; $j++) { ?>
        <tr>
            <td><?= $table ?></td>
            <td>&times;</td>
            <td><?= $j ?></td>
            <td>&equals;</td>
            <td><?= $table * $j ?></td>
        </tr>
    <?php } ?>
</table>
<?php } ?>
</body>
</html>