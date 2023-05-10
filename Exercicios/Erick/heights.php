<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 9, 2023 - 3:32 PM
 -->
<?php
if (isset($_GET['heights'])) {
    $smallest = $_GET['heights'][0];

    foreach ($_GET['heights'] as $height) {
        if ($height < $smallest) {
            $smallest = $height;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alturas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            max-width: 100%;
            max-height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            font-family: Verdana;
            background: #212529;
            color: white;
        }

        body > div {
            padding: 0.5rem 1rem;
        }

        header {
            background: #0d6efd;
            padding: 0.5em;
            text-align: center;
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
            padding: 0.3rem;
            border-radius: 5px;
            border: none;
        }

        form input[type=submit] {
            margin-top: 1em;
            width: 100%;
            font-size: larger;
            background: #198754;
            color: white;
            cursor: pointer;
            border: none;
            transition: background 100ms linear;
            border-radius: 5px;
            padding: 0.3rem;
        }

        form input[type=submit]:hover {
            background: #39AA60;
        }

        h2 {
            margin-top: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Menor Altura</h1>
    </header>
    <div>
        <form>
            <div>
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <input type="number" name="heights[]" placeholder="Digite a <?= $i + 1?>&ordf; altura" required>
                <?php } ?>
            </div>

            <input type="submit" value="Calcular">
        </form>
        <?php if (isset($smallest)) { ?>
            <h2>A menor altura é <?= $smallest ?></h2>
        <?php } ?>
    </div>
</body>
</html>
