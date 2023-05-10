<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 10, 2023 - 4:19 PM
  -- Task: Convert fahrenheit to celcius
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrenheit para Celcius</title>
</head>
<body>
    <form>
        <label>Digite a temperatura em Fahrenheit:</label>
        <input type="number" name="fahrenheit" require>
        <input type="submit" value="Calcular">
    </form>
    <?php if (isset($_GET['fahrenheit'])) {
        $fahrenheit = $_GET['fahrenheit'];
        $celcius = (($fahrenheit - 32) * 5) / 9;
    ?>
        <h1><?= $fahrenheit ?>&ordm; Fahrenheit são <?= number_format($celcius) ?>&ordm; Celcius</h1>
    <?php } ?>
</body>
</html>
