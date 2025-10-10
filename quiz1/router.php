<?php

$root_path = __DIR__;
$routes = [
    "/" => "controllers/home.controller.php",
    "/about" => "controllers/about.controller.php",
    "/contact" => "controllers/contact.controller.php"
];

function routeToController($routes, $uri)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

routeToController($routes,$uri);