<?php

$routes = require basePath('routes.php');

function routeToController($routes, $uri)
{
    if (array_key_exists($uri, $routes)) {
        require basePath($routes[$uri]);
    } else {
        abort(404);
    }
}

routeToController($routes, $uri);
