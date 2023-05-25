<!--
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 25, 2023 - 3:01 PM
-->
<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    <title>Login | PetShop</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Senha</label>
            </div>

            <input class="btn btn-success w-100 mt-3" type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
