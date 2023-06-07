<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 25, 2023 - 2:58 PM

$request = substr($_SERVER['REQUEST_URI'], 8);
$routes = [
    '^/cliente/listar/?$'                => 'pages/customer/index.php',
    '^/cliente/listar\?de\=(?P<de>\d+)' => 'pages/customer/index.php',
    '^/cliente/cadastrar/?$'             => 'pages/customer/create.php',
    '^/cliente/buscar/?$'                => 'pages/customer/search.php',
    '^/cliente/(?P<id>\d+)/?$'           => 'pages/customer/show.php',
    '^/cliente/alterar/(?P<id>\d+)/?$'   => 'pages/customer/modify.php',
    '^/cliente/apagar/(?P<id>\d+)/?$'    => 'pages/customer/destroy.php',

    '/login'                      => 'pages/user/login.php',
    '/logout'                     => 'pages/user/logout.php',
    '^/$'                           => 'pages/user/home.php',
];

$foundRoute = false;

foreach ($routes as $route => $path) {
    $route = str_replace('/', '\/', $route);

    if (preg_match("/$route/", $request, $matches)) {
        foreach (array_keys($matches) as $param) {
            $_GET[$param] = $matches[$param];
        }

        require "$path";
        $foundRoute = true;
        break;
    }
}

if (!$foundRoute) {
    require 'pages/404.php';
}

?>
