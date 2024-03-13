<?php
$query = require 'bootstrap.php';
require "Product.php";
require "functions.php";

$productsDB = []; 

$res = $query->selectAll('products');

foreach($res as $k=>$row) {
    array_push($productsDB,new Product($row->name, $row->amount, $row->price));
}

require "index.view.php";
?>