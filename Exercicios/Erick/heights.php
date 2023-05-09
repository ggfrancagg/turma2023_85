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
</head>
<body>
    <h1>Menor Altura</h1>
    <form>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <input type="number" name="heights[]" placeholder="Digite a <?= $i + 1?>&ordf; altura" required>
        <?php } ?>

        <input type="submit" value="Calcular">
    </form>
<?php if (isset($smallest)) { ?>
    <h2>A menor altura é <?= $smallest ?></h2>
<?php } ?>
</body>
</html>
