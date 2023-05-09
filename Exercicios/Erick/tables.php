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
        * {
            margin: 0;
        }

        html, body {
            height: 100%;
        }

        body {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background: #202020;
            color: white;
            font-family: Verdana;
            font-size: larger;
        }
    </style>
</head>
<body>
<?php for ($table = 1; $table <= 5; $table++) { ?>
    <table>
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <tr>
                <td><?= $table ?></td>
                <td>&times;</td>
                <td><?= $i ?></td>
                <td>&equals;</td>
                <td><?= $table * $i ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>
</body>
</html>