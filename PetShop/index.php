<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 25, 2023 - 2:58 PM

$request = substr($_SERVER['REQUEST_URI'], 8);
$routes = [
    '/cadastrar/cliente' => 'pages/customer/create.php',
    '/cadastrar/pet'     => 'pages/pet/create.php',
    '/cadastrar/servico' => 'pages/service/create.php',
    '/listar/cliente'    => 'pages/customer/index.php',
    '/listar/pet'        => 'pages/pet/index.php',
    '/listar/servico'    => 'pages/service/index.php',
    '/buscar'            => 'pages/search/search.php',
    '/buscar/resultado'  => 'pages/search/results.php',
    '/alterar'           => 'pages/modify/modify.php',
    '/alterar/resultado' => 'pages/modify/confirm.php',
    '/usuario'           => 'pages/user/index.php',
    '/usuario/cadastrar' => 'pages/user/create.php',
    '/usuario/alterar'   => 'pages/user/edit.php',
    '/login'             => 'pages/user/login.php',
    '/logout'            => 'pages/user/logout.php',
    '/'                  => 'pages/user/home.php',
];

if (isset($routes[$request])) {
    require "$routes[$request]";
} else {
    require 'pages/404.php';
}

?>
