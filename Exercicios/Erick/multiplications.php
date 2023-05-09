<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 9, 2023 - 3:51 PM
 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outra Tabuada</title>
</head>
<body>
    <form>
        <input type="number" name="number" placeholder="Digite um número">
        <input type="submit" value="Calcular">
    </form>
<?php if (isset($_GET['number'])) {
    $num = $_GET['number'];
?>
    <?php for ($i = 1; $i <= 100; $i++) { ?> 
        <span><?= $num ?> &times; <?= $i ?> &equals; <?= $num * $i ?></span><br>
    <?php } ?>
<?php } ?>
</body>
</html>
