<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 8, 2023 - 4:11 PM
 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
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
            display: flex;
            flex-direction: column;
            gap: 1em;
            align-items: center;
            padding: 1em;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
            gap: 0.5em;
        }

        form div {
            display: flex;
            flex-direction: column;
            gap: 0.2em;
        }

        form label {
            font-size: large;
        }

        input[type=number] {
            width: 100%;
            padding: 0.3em;
            font-size: medium;
            border-radius: 5px;
            border: none;
        }

        input[type=submit] {
            padding: 0.5em;
            font-size: large;
            color: white;
            background: #198754;
            border: none;
            border-radius: 5px;
            margin-top: 1em;
        }

        .multiplication-table {
            border: 1px solid whitesmoke;
            border-radius: 10px;
            padding: 0.5rem;
        }
    </style>
</head>
<body>
    <h1>Tabuada</h1>
    <form>
        <div>
            <label for="table">Tabuada</label>
            <input id="table" type="number" name="table" min="1" value="1">
        </div>
        <div>
            <label for="from">De</label>
            <input id="from" type="number" name="from" min="1" value="1">
        </div>
        <div>
            <label for="to">A</label>
            <input id="to" type="number" name="to" min="1" value="10">
        </div>

        <input type="submit" value="Gerar">
    </form>
<?php if (isset($_GET['table'], $_GET['from'], $_GET['to'])) {
    $table = intval($_GET['table']);
    $from = intval($_GET['from']);
    $to = intval($_GET['to']);
?>
    <div class="multiplication-table">
        <?php for ($i = $from; $i <= $to; $i++) { ?>
            <p><?= $table ?> &times; <?= $i ?> &equals; <?= $table * $i ?></p>
        <?php } ?>
    </div> 
<?php } ?>
</body>
</html>
