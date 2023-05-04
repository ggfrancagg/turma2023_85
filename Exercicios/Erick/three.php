<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 4, 2023 - 3:36 PM

if (isset($_GET['author'], $_GET['book'])) {
    $author = $_GET['author'];
    $book = $_GET['book'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores e Livros</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
    </style>
</head>
<body>
    <?php if (isset($author, $book)) { ?>
        <div>
            <h1>O autor é <?= $author ?></h1>
            <h1>O livro é <?= $book ?></h1>
            <a href="./three.php">Voltar</a>
        </div>
    <?php } else { ?>
        <form>
            <input type="text" name="author" placeholder="Digite o nome de um Autor">
            <input type="text" name="book" placeholder="Digite o nome de um Livro deste Autor">
            <input type="submit" value="Enviar">
        </form>
    <?php } ?>
</body>
</html>
