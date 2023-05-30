<?php require_once __DIR__ . "../../head.inc.php" ?>
<header class="bg-primary d-flex align-items-center justify-content-between p-2 mb-2">
    <button class="btn btn-outline-light p-0" style="--size: 35px; width: var(--size); height: var(--size);" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="bi bi-list fs-5"></i>
    </button>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"><?= $user->name() ?></h5>
            <a class="btn btn-sm btn-danger ms-auto" href="/petshop/logout">
                <i class="bi bi-box-arrow-left"></i>
                <span>Sair</span>
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <?php if ($user->type() === \Models\User::IS_ADMIN) { ?>
                <fieldset class="mb-3">
                    <legend>
                        <i class="bi bi-plus-lg"></i>
                        <span>Cadastrar</span>
                    </legend>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-center gap-3">
                            <i class="bi bi-person-plus-fill fs-5"></i>
                            <span class="lead">Usuário</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-center gap-3">
                            <i class="bi bi-person-vcard-fill fs-5"></i>
                            <span class="lead">Cliente</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-center gap-3">
                            <i class="bi bi-gear-fill fs-5"></i>
                            <span class="lead">Serviço</span>
                        </a>
                    </div>
                </fieldset>
            <?php } ?>
            <fieldset class="mb-3">
                <legend>
                    <i class="bi bi-eye-fill"></i>
                    <span>Listar</span>
                </legend>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-center gap-3">
                        <i class="bi bi-person-lines-fill fs-5"></i>
                        <span class="lead">Usuários</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-center gap-3">
                        <i class="bi bi-person-vcard-fill fs-5"></i>
                        <span class="lead">Clientes</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-center gap-3">
                        <i class="bi bi-gear-fill fs-5"></i>
                        <span class="lead">Serviços</span>
                    </a>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    <i class="bi bi-search"></i>
                    <span>Buscar</span>
                </legend>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-center gap-3">
                        <i class="bi bi-person-lines-fill fs-5"></i>
                        <span class="lead">Usuários</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-center gap-3">
                        <i class="bi bi-person-vcard-fill fs-5"></i>
                        <span class="lead">Clientes</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-center gap-3">
                        <i class="bi bi-gear-fill fs-5"></i>
                        <span class="lead">Serviços</span>
                    </a>
                </div>
            </fieldset>
        </div>
    </div>
</header>