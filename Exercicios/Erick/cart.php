<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: 2:54 PM
 -->
<?php
$products = [
    ['id' => 1, 'name' => 'Minecraft', 'price' => 2.99],
    ['id' => 2, 'name' => 'GTA', 'price' => 5.60],
    ['id' => 3, 'name' => 'Resident Evil', 'price' => 10.99],
    ['id' => 4, 'name' => 'The Walking Dead', 'price' => 22.63],
];

session_start();

if (!isset($_SESSION['cart']))
    $_SESSION['cart'] = ['products' => [], 'total' => 0.0];

if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $product = getProduct($id);
    
    if (productInCart($id)) {
        // TODO
    } else {
        $newProduct = array_merge($product, ['quantity' => 1]);
        $_SESSION['cart']['products'] []= $newProduct;
    }
}

function productInCart($id) {
    foreach ($_SESSION['cart']['products'] as $product) {
        if ($product['id'] == $id)
            return true;
    }

    return false;
}

function getProduct($id) {
    global $products;
    foreach ($products as $product) {
        if ($product['id'] == $id)
            return $product;
    }
}

function getCartProduct($id) {
    foreach ($_SESSION['cart']['products'] as $product) {
        if ($product['id'] == $id)
            return $product;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>
    <ul>
        <?php foreach ($products as $product) { ?>
            <li>
                <span><?= $product['name'] ?></span>
                <span>R$ <?= $product['price'] ?></span>
                <a href="?add=<?= $product['id'] ?>">Adicionar</a>
            </li>
        <?php } ?>
    </ul>
    <h1>Carrinho:</h1>
    <ul>
        <?php foreach ($_SESSION['cart']['products'] as $product) { ?>
            <li>
                <span><?= $product['name'] ?></span>
                <span> - </span>
                <span><?= $product['quantity'] ?></span>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
