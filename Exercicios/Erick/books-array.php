<!--
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 11, 2023 - 4:50 PM
-->
<?php
$booksCount = isset($_GET['booksCount']) ? $_GET['booksCount'] : 0;

if (isset($_POST['authors'], $_POST['books'], $_POST['pages'])) {
    $authors = $_POST['authors'];
    $bookNames = $_POST['books'];
    $pages = array_map(function($p) { return intval($p); }, $_POST['pages']);
    $books = [];

    for ($i = 0; $i < count($_GET['authors']); $i++) {
        $books []= [
            'author' => $authors[$i],
            'title' => $bookNames[$i],
            'pages' => $pages[$i],
        ];
    }

    // TODO
}
?>
<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros em Vetores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
    <header class="bg-primary text-center">
        <h1>Livros</h1>
    </header>

    <form class="d-flex flex-column px-4 gap-3" method="post">
        <?php for ($i = 1; $i <= $booksCount; $i++) { ?>
            <fieldset>
                <legend class="text-center">Livro #<?= $i ?></legend>
                <div class="d-flex gap-2">
                    <input class="form-control" type="text" name="authors[]" placeholder="Nome do Autor" required>
                    <input class="form-control" type="text" name="books[]" placeholder="Nome do Livro" required>
                    <input class="form-control" type="number" name="pages[]" min="1" placeholder="Quandidade de Páginas" required>
                </div>
            </fieldset>
        <?php } ?>

        <a class="btn btn-primary rounded-circle mt-2 ms-auto" style="width: 42px; height: 42px;" href="?booksCount=<?= $booksCount + 1 ?>">
            <i class="bi bi-plus-lg"></i>
        </a>

        <?php if ($booksCount < 2) { ?>
            <p class="lead text-center">Adicione pelo menos 2 livros</p>
        <?php } else { ?>
            <input class="btn btn-success mt-2" type="submit" value="Cadastrar">
        <?php } ?>
    </form>
</body>
</html>
