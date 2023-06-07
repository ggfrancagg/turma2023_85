<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 25, 2023 - 3:09 PM
require __DIR__ . '../../../models/User.php';
require __DIR__ . '../../../persistence/User.php';


if (!\Models\User::isLoggedIn()) {
    header('Location: /petshop/login');
    exit;
}

\Persistence\User::connect();
$user = \Persistence\User::getUser(\Models\User::loggedUserName());

if (!$user) {
    die('Unable to retrieve logged user');
}

include __DIR__ . '../../head.inc.php';
?>
<style>
    html, body { height: 100%; }
    .dropdown:hover .dropdown-menu { display: block; margin-left: 0; }
</style>
<nav class="navbar-expand-lg bg-primary">
    <div class="d-flex align-items-center p-1 pe-3">
        <div class="dropdown">
            <button class="btn btn-sm btn-primary dropdown-toggle" type="button" aria-expanded="false">
                <?= $user->name() ?>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/petshop/logout">Sair</a></li>
            </ul>
        </div>

        <button class="navbar-toggler ms-auto me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto gap-4 pe-3 d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" aria-expanded="false">Usuários</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/petshop/usuario/listar">Listar</a></li>
                            <li><a class="dropdown-item" href="/petshop/usuario/cadastrar">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="/petshop/usuario/buscar">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" aria-expanded="false">Clientes</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/petshop/cliente/listar" target="frame">Listar</a></li>
                            <li><a class="dropdown-item" href="/petshop/cliente/cadastrar" target="frame">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="/petshop/cliente/cadastrar" target="frame">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" aria-expanded="false">Pets</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/petshop/pet/listar">Listar</a></li>
                            <li><a class="dropdown-item" href="/petshop/pet/cadastrar">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="/petshop/pet/buscar">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" aria-expanded="false">Serviços</a>
                        <ul class="dropdown-menu translate-middle-x">
                            <li><a class="dropdown-item" href="/petshop/servico/listar">Listar</a></li>
                            <li><a class="dropdown-item" href="/petshop/servico/cadastrar">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="/petshop/servico/buscar">Buscar</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav d-md-none">
                    <li class="nav-item fw-bold fs-4">Usuário</li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/usuario/listar">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/usuario/cadastrar">Cadastrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/usuario/buscar">Buscar</a></li>
                    
                    <li class="nav-item fw-bold fs-4 mt-3">Cliente</li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/cliente/listar">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/cliente/cadastrar">Cadastrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/cliente/buscar">Buscar</a></li>
                    
                    <li class="nav-item fw-bold fs-4 mt-3">Pet</li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/pet/listar">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/pet/cadastrar">Cadastrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/pet/buscar">Buscar</a></li>
                    
                    <li class="nav-item fw-bold fs-4 mt-3">Serviço</li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/servico/listar">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/servico/cadastrar">Cadastrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/petshop/servico/buscar">Buscar</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<iframe class="w-100" style="height: calc(100% - 54px);" name="frame" src="" frameborder="0"></iframe>
<script>

</script>
