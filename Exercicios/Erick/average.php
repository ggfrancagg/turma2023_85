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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #202020;
            color: white;
            font-family: Verdana;
            padding: 1em;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form div {
            display: flex;
            justify-content: space-between;
        }

        input[type=number] {
            padding: 0.4em;
            border-radius: 5px;
            border: none;
            text-align: center;
        }

        input[type=submit] {
            margin-top: 1em;
            padding: 0.5em;
            font-size: large;
            color: white;
            background: green;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        h2 {
            margin-bottom: 0.5em;
        }

        h1 {
            margin-top: 1em;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Média de 5 Números</h2>

    <form>
        <div>
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <input type="number" name="numbers[]" placeholder="Digite o <?= $i ?>&ordm; número" min="1" required>
            <?php } ?>
        </div>

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
