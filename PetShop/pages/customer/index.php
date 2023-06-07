<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: June 01, 2023 - 3:07 PM
require_once __DIR__ . '../../../persistence/Customer.php';
$from = isset($_GET['de']) ? $_GET['de'] : 0;
\Persistence\Customer::connect();
$customers = \Persistence\Customer::paginate($from);

require_once __DIR__ . '../../head.inc.php';
?>
<style>tbody tr:hover { cursor: pointer; background: var(--bs-blue); }</style>
<div class="container mt-2">
    <h1 class="text-center mb-3">Clientes Cadastrados</h1>
    
    <div class="table-responsive">
        <table class="table table-hover text-nowrap user-select-none">
            <thead>
                <tr class="text-center">
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Rua</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($customers as $customer) { ?>
                    <tr data-id="<?= $customer->id() ?>">
                        <td><?= $customer->name() ?></td>
                        <td><?= $customer->ssn() ?></td>
                        <td><?= $customer->birth() ?></td>
                        <td><?= $customer->email() ?></td>
                        <td><?= $customer->phone() ?></td>
                        <td><?= $customer->street() ?></td>
                        <td><?= $customer->hood() ?></td>
                        <td><?= $customer->city() ?></td>
                        <td><?= $customer->state() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <div class="d-flex align-items-center justify-content-between mt-3">
        <?php if ($from > 1) { ?>
            <a class="btn btn-primary" href="?de=<?= $from - \Persistence\Customer::PAGINATE_COUNT ?>">
                <i class="bi bi-arrow-left"></i>
                <span>Anterior</span>
            </a>
        <?php } ?>

        <!-- TODO: FIX THIS SHIT! -->
        <?php if ($from + \Persistence\Customer::PAGINATE_COUNT > \Persistence\Customer::getCustomerCount()) { ?>
            <a class="btn btn-primary ms-auto" href="?de=<?= $from + \Persistence\Customer::PAGINATE_COUNT ?>">
                <i class="bi bi-arrow-right"></i>
                <span>Próximo</span>
            </a>
        <?php } ?>
    </div>
</div>
<script>
    document.querySelectorAll('tbody tr').forEach(tr => {
        tr.addEventListener('click', () => {
            let id = tr.dataset.id;
            window.location.assign(`/petshop/cliente/${id}`);
        });
    });
</script>
