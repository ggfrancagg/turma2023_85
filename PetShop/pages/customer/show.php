<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: June 07, 2023 - 2:36 PM
require_once __DIR__ . '/../../persistence/Customer.php';
require_once __DIR__ . '/../../models/Customer.php';

\Persistence\Customer::connect();
$customer = \Persistence\Customer::get($_GET['id']);

require_once __DIR__ . '/../head.inc.php';
?>
<header class="bg-primary mb-2 d-flex justify-content-between p-1 px-2 align-items-center">
    <a class="btn btn-sm" href="/petshop/cliente/listar" title="Voltar"><i class="bi bi-arrow-left fs-5"></i></a>

    <h3 class="m-0">Informações de Cliente</h3>

    <div>
        <a class="btn btn-sm" href="/petshop/cliente/alterar/<?= $customer->id() ?>" title="Editar Cliente"><i class="bi bi-pencil-fill"></i></a>
        <a class="btn btn-sm" href="/petshop/cliente/apagar/<?= $customer->id() ?>" title="Apagar Cliente"><i class="bi bi-trash-fill"></i></a>
    </div>
</header>
<div class="container">
    <fieldset>
        <div class="row g-2">
            <div class="col-md-9">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="name" id="nameField" placeholder="Nome" value="<?= $customer->name() ?>" readonly value="<?= $customer->name() ?>" readonly>
                    <label for="nameField">Nome</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="ssn" id="ssnField" placeholder="CPF" value="<?= $customer->ssn() ?>" readonly>
                    <label for="ssnField">CPF</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-2">
            <input type="date" class="form-control" name="birth" id="birthField" placeholder="Nascimento" value="<?= $customer->birth() ?>" readonly>
            <label for="birthField">Nascimento</label>
        </div>
    </fieldset>

    <fieldset>
        <legend class="m-0">Contato</legend>
        <div class="row g-2">
            <div class="col-md-9">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="email" id="emailField" placeholder="Email" value="<?= $customer->email() ?>" readonly>
                    <label for="emailField">Email</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="phone" id="phoneField" placeholder="Telefone" value="<?= $customer->phone() ?>" readonly>
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
                    <input type="text" class="form-control" name="street" id="streetField" placeholder="Rua" value="<?= $customer->street() ?>" readonly>
                    <label for="streetField">Rua</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="hood" id="hoodField" placeholder="Bairro" value="<?= $customer->hood() ?>" readonly>
                    <label for="hoodField">Bairro</label>
                </div>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-md-9">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="city" id="cityField" placeholder="Cidade" value="<?= $customer->city() ?>" readonly>
                    <label for="cityField">Cidade</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="state" id="stateField" placeholder="Estado" value="<?= $customer->state() ?>" readonly>
                    <label for="stateField">Estado</label>
                </div>
            </div>
        </div>
    </fieldset>
</div>