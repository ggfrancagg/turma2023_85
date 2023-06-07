<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: June 07, 2023 - 15:01
if (!isset($_GET['id'])) {
    die('No ID Specified');
}

require_once __DIR__ . '/../../models/Customer.php';
require_once __DIR__ . '/../../persistence/Customer.php';

\Persistence\Customer::connect();

if (isset($_POST['name'], $_POST['ssn'], $_POST['birth'], $_POST['email'], $_POST['phone'], $_POST['name'], $_POST['street'], $_POST['hood'], $_POST['city'], $_POST['state'])) {
    $success = \Persistence\Customer::modify($_GET['id'], $_POST);
}

$customer = \Persistence\Customer::get($_GET['id']);


require_once __DIR__ . '/../head.inc.php';
?>
<header class="bg-primary mb-2 p-1 px-2 d-flex justify-content-between align-items-center">
    <a class="btn btn-sm" href="/petshop/cliente/<?= $customer->id() ?>">
        <i class="bi bi-arrow-left fs-5"></i>
    </a>

    <h3 class="m-0 text-center w-100">Alterar Cliente</h3>
</header>
<div class="container">
    <?php if (isset($success) && $success) { ?>
        <div class="alert alert-success">
            <h3 class="text-center m-0">Cliente Alterado Com Sucesso!</h3>
        </div>
    <?php } else if (isset($success) && !$success) { ?>
        <div class="alert alert-danger">
            <h3 class="text-center m-0">Erro ao alterar cliente</h3>
            <span><?= \Persistence\Customer::error() ?></span>
        </div>
    <?php } else { ?>
        <form action="/petshop/cliente/alterar/<?= $customer->id() ?>" method="post">
            <fieldset>
                <legend class="m-0">Cliente</legend>
                <input type="hidden" name="id" value="<?= $customer->id() ?>">
                <div class="row g-2">
                    <div class="col-md-9">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="name" id="nameField" placeholder="Nome" value="<?= $customer->name() ?>">
                            <label for="nameField">Nome</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="ssn" id="ssnField" placeholder="CPF" value="<?= $customer->ssn() ?>">
                            <label for="ssnField">CPF</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-2">
                    <input type="date" class="form-control" name="birth" id="birthField" placeholder="Nascimento" value="<?= $customer->birth() ?>">
                    <label for="birthField">Nascimento</label>
                </div>
            </fieldset>

            <fieldset>
                <legend class="m-0">Contato</legend>
                <div class="row g-2">
                    <div class="col-md-9">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="email" id="emailField" placeholder="Email" value="<?= $customer->email() ?>">
                            <label for="emailField">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="phone" id="phoneField" placeholder="Telefone" value="<?= $customer->phone() ?>">
                            <label for="phoneField">Telefone</label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend class="m-0">Endereço</legend>
                <div class="row g-2">
                    <div class="col-md-8">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="street" id="streetField" placeholder="Rua" value="<?= $customer->street() ?>">
                            <label for="streetField">Rua</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="hood" id="hoodField" placeholder="Bairro" value="<?= $customer->hood() ?>">
                            <label for="hoodField">Bairro</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-9">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="city" id="cityField" placeholder="Cidade" value="<?= $customer->city() ?>">
                            <label for="cityField">Cidade</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="state" id="stateField" placeholder="Estado" value="<?= $customer->state() ?>">
                            <label for="stateField">Estado</label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <input class="btn btn-success w-100 mt-3" type="submit" value="Alterar">
        </form>
    <?php } ?>
</div>