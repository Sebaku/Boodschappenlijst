<?php
$query = require 'core/bootstrap.php';

//$router = new Router;
//require 'core/routes.php';
//$uri = trim($_SERVER['REQUEST_URI'], '/');

//require $router->direct($uri);

require Router::load('routes.php')
    ->direct(Request::uri());
?>