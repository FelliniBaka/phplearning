<?php

spl_autoload_register(function (string $className)
{
    require_once __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.str_replace('\\','/',$className).'.php' ;
});

$route = $_GET['route'];
$routes = require __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'routes.php';

foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
    if (!empty($matches)){
        unset ($matches[0]);
        $isRouteFound = true;
        break;
    }
}

if (!$isRouteFound) {
    echo '<h1>Page not found</h1><br>Go to <a href="/">main</a>.';
    return;
}

$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];

$controller = new $controllerName();
$controller -> $actionName(...$matches);
