<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 25, 2023 - 5:05 PM

$fields = ['name', 'ssn', 'birth', 'email', 'phone', 'street', 'hood', 'city', 'state'];
$values = [];

foreach ($fields as $field) {
    if (isset($_POST[$field])) {
        $values[] = $_POST[$field];
    }
}

if (count($values) > 0) {
    $data = array_combine($fields, $values);
    require_once __DIR__ . '../../../persistence/Customer.php';
    require_once __DIR__ . '../../../models/Customer.php';
    \Persistence\Customer::connect();
    $customer = new \Models\Customer(0, ...$data);

    if (\Persistence\Customer::create($customer) !== false) {
        $successfullyRegistered = true;
    } else {
        $successfullyRegistered = false;
    }
}

require_once __DIR__ . '../../head.inc.php';
?>
<div class="container-fluid mt-2">
    <?php if (isset($successfullyRegistered) && $successfullyRegistered) { ?>
        <div class="alert alert-success d-flex align-items-center justify-content-center p-1">
            <i class="bi bi-check-lg fs-2 me-2"></i>
            <h5 class="text-center m-0">Cliente cadastrado com sucesso!</h5>
        </div>
    <?php } else { ?>
        <h1 class="text-center">Cadastrar Cliente</h1>
        <form action="/petshop/cliente/cadastrar" method="post">
            <fieldset>
                <legend class="m-0">Cliente</legend>
                <div class="row g-2">
                    <div class="col-md-9">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="name" id="nameField" placeholder="Nome">
                            <label for="nameField">Nome</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="ssn" id="ssnField" placeholder="CPF">
                            <label for="ssnField">CPF</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-2">
                    <input type="date" class="form-control" name="birth" id="birthField" placeholder="Nascimento">
                    <label for="birthField">Nascimento</label>
                </div>
            </fieldset>

            <fieldset>
                <legend class="m-0">Contato</legend>
                <div class="row g-2">
                    <div class="col-md-9">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="email" id="emailField" placeholder="Email">
                            <label for="emailField">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="phone" id="phoneField" placeholder="Telefone">
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
                            <input type="text" class="form-control" name="street" id="streetField" placeholder="Rua">
                            <label for="streetField">Rua</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="hood" id="hoodField" placeholder="Bairro">
                            <label for="hoodField">Bairro</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-9">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="city" id="cityField" placeholder="Cidade">
                            <label for="cityField">Cidade</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="state" id="stateField" placeholder="Estado">
                            <label for="stateField">Estado</label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <input class="btn btn-success w-100 mt-3" type="submit" value="Cadastrar">
        </form>
    <?php } ?>
</div>