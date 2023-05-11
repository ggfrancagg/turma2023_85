<!--
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 11, 2023 - 3:17 PM
-->
<?php
$candidateCount = isset($_GET['candidateCount']) ? $_GET['candidateCount'] : 0;

if (isset($_GET['names'], $_GET['heights'])) {
    $names = $_GET['names'];
    $heights = array_map(function($h) { return floatval($h); }, $_GET['heights']);
    $tallestHeight = max($heights);
    $tallestName = $names[array_search($tallestHeight, $heights)];
    $smallestHeight = min($heights);
    $smallestName = $names[array_search($smallestHeight, $heights)];
}
?>
<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Maior e Menor Altura com Array</title>
    <style>
        :root {
            --bs-body-color: 'white';
        }

        .bi {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <header class="bg-primary p-1 text-white text-center mb-3">
        <h1 class="mb-1">Concurso de Alturas</h1>
    </header>

    <?php if (isset($tallestName)) { ?>
        <div class="mx-3">
            <h2>O candidato mais alto é: <?= $tallestName ?>, medindo <?= number_format($tallestHeight, 2, ',') ?> de altura</h2>
            <h2>O candidato mais baixo é: <?= $smallestName ?>, medindo <?= number_format($smallestHeight, 2, ',') ?> de altura</h2>
            <a class="btn btn-primary mt-2" href="./heights-array.php">
                <i class="bi bi-arrow-clockwise" style="vertical-align: text-top;"></i>
                <span>Competir Novamente</span>
            </a>
        </div>
    <?php } else { ?>
        <form class="d-flex flex-column mx-2">
            <?php for ($i = 1; $i <= $candidateCount; $i++) { ?>
                <fieldset class="mb-3">
                    <legend class="text-center">Candidato #<?= $i ?></legend>
                    <div class="d-flex gap-2">
                        <input class="form-control" type="text" name="names[]" placeholder="Nome do <?= $i ?>&ordm; Candidato" required>
                        <input class="form-control" type="number" name="heights[]" step="0.01" placeholder="Altura do <?= $i ?>&ordm; Candidato" required>
                    </div>
                </fieldset>
            <?php }?>

            <a class="btn btn-primary mt-2 ms-auto rounded-circle" style="width: 42px; height: 42px;" href="?candidateCount=<?= $candidateCount + 1 ?>">
                <i class="bi bi-plus-lg"></i>
            </a>
            <?php if ($candidateCount < 2) { ?>
                <p class="lead ms-2 text-center">Adicione pelo menos dois candidatos</p>
            <?php } else { ?>
                <input class="btn btn-success mt-4" type="submit" value="Verificar">
            <?php } ?>
        </form>
    <?php } ?>
</body>
</html>
