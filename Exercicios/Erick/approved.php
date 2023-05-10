<!-- 
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 10, 2023 - 4:10 PM
  -- Task: Output if the student was approved or disapproved
  -- Input: 4 student's grades
 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovado ou Reprovado?</title>
</head>
<body>
    <form>
        <?php for ($i = 1; $i <= 4; $i++) { ?>
            <div>
                <label>Digite a nota do <?= $i ?>&ordm; bimestre:</label>
                <input type="number" name="grades[]" min="0" max="100" required>
            </div>
        <?php } ?>
        <input type="submit" value="Calcular">
    </form>
    <?php if (isset($_GET['grades'])) {
        $grades = array_map(function($g) { return floatval($g); }, $_GET['grades']);
        $average = array_sum($grades) / count($grades);
    ?>
    <h1>Média anual: <?= number_format($average, 2) ?></h1>
    <h1>Aluno <?= $average >= 60.0 ? 'Aprovado!' : 'Reprovado :(' ?></h1>
    <?php } ?>
</body>
</html>
