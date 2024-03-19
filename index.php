<?php
$query = require 'core/bootstrap.php';
require "Product.php";
require "core/Router.php";

$router = new Router;
require 'core/routes.php';
$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);

$productsDB = []; 

$res = $query->selectAll('groceries');

foreach($res as $k=>$row) {
    array_push($productsDB,new Product($row->product, $row->quantity, $row->price));
}

require "views/index.view.php";
?>