<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 10, 2023 - 4:10 PM
  -- Task: Output the area of a circle
 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área De Um Círculo</title>
</head>
<body>
    <form>
        <label>Digite o raio do círculo</label>
        <input type="number" name="radius" min="1" required>
        <input type="submit" value="Calcular">
    </form>
    <?php if (isset($_GET['radius'])) { 
        $radius = floatval($_GET['radius']);
        $area = M_PI * $radius * $radius;
    ?>
        <h1>A área de um círculo de raio <?= $radius ?> é: <?= number_format($area, 2,  ',', '.') ?></h1>
    <?php } ?>
</body>
</html>
