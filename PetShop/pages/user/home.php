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

include __DIR__ . '/header.inc.php';
?>
<div class="container">
    <h1>Bem Vindo</h1>
</div>