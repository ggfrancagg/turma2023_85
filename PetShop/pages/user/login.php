<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 25, 2023 - 3:01 PM

if (isset($_POST['name'], $_POST['password'])) {
    require_once __DIR__ . '../../../models/User.php';
    require_once __DIR__ . '../../../persistence/User.php';
    \Persistence\User::connect();
    $name = $_POST['name'];
    $password = $_POST['password'];
    $user = new \Models\User(0, $name, $password, 0);
    
    if (\Persistence\User::login($user)) {
        header('Location: /petshop/');
        exit;
    } else {
        $loginError = true;
    }
}

include_once __DIR__ . '../../head.inc.php';
?>
<div class="container mt-3">
    <form action="/petshop/login" method="post">
        <div class="form-floating mb-2">
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required autofocus>
            <label for="name">Nome</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            <label for="password">Senha</label>
        </div>
        <?php if (isset($loginError)) { ?>
            <div class="alert alert-danger text-center p-2 mt-3">
                <i class="bi bi-person-fill-exclamation me-2 fs-5"></i>
                <span>Nome ou Senha Incorretos</span>
            </div>
        <?php } ?>

        <input class="btn btn-success w-100 mt-2" type="submit" value="Entrar">
    </form>
</div>
