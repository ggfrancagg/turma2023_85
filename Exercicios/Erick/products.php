<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 9, 2023 - 2:58 PM
  -- Task: Get 5 products with their name, price and quantity and output their totals
 -->
<?php
if (isset($_GET['names'], $_GET['quantities'], $_GET['prices'])) {
    $names = $_GET['names'];
    $quantities = $_GET['quantities'];
    $prices = $_GET['prices'];
    $products = [];

    for ($i = 0; $i < count($names); $i++) {
        $products []= [
            'name' => $names[$i],
            'price' => floatval($prices[$i]),
            'quantity' => intval($quantities[$i]),
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
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

        header {
            background: #0d6efd;
            padding: 0.5em;
            text-align: center;
            margin-bottom: 1em;
        }

        table tbody td:nth-child(2),
        table tbody td:nth-child(3),
        table tbody td:nth-child(4) {
            text-align: right;
        }

        form {
            display: flex;
            flex-direction: column;
            margin: 1em;
            gap: 0.8em;
        }

        form fieldset {
            display: flex;
            gap: 0.5rem;
            border-radius: 5px;
            padding: 10px;
        }

        form fieldset legend {
            font-size: large;
            text-align: center;
            padding: 0 10px;
        }

        form fieldset input {
            display: block;
            padding: 0.5em;
            font-size: medium;
            background-color: #212529;
            color: white;
            border: 1px solid #AAAAAA;
            border-radius: 0.375rem;
            width: 100%;
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

        table {
            border: 1px solid white;
            margin: 0 10px;
            overflow-x: scroll;
            max-width: 99vw;
        }

        table thead td {
            font-weight: bold;
            text-align: center;
            padding: 5px;
        }

        table tbody td {
            padding: 2px;
        }

        a {
            display: block;
            width: fit-content;
            margin: 10px;
            background: #0d6efd;
            padding: 0.8rem;
            border-radius: 5px;
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
<?php if (isset($products)) { ?>
    <header>
        <h1>Nota Fiscal</h1>
    </header>

    <table border="1">
        <thead>
            <tr>
                <td>Produto</td>
                <td>Preço Unitário</td>
                <td>Quantidade</td>
                <td>Total</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['quantity'] ?></td>
                    <td>R$ <?= number_format($product['price'] * $product['quantity'], 2, ',', '.') ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
    <a href="./products.php">&LeftArrow; Comprar Novamente</a>
<?php } else { ?>
    <header>
        <h1>Carrinho de Compras</h1>
    </header>
    <form>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <fieldset>
                <legend>Produto #<?= $i + 1 ?></legend>
                <input type="text" name="names[]" placeholder="Nome" required>
                <input type="number" name="prices[]" min="0" step="0.01" placeholder="Preço Unitário" required>
                <input type="number" name="quantities[]" min="1" placeholder="Quantidade" required>
            </fieldset>
        <?php } ?>

        <input type="submit" value="Comprar">
    </form>
<?php } ?>
</body>
</html>
