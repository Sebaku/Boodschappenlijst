<?php
$query = require 'bootstrap.php';
require "Product.php";
require "functions.php";

$productsDB = []; 

$res = $query->selectAll('groceries');

foreach($res as $k=>$row) {
    array_push($productsDB,new Product($row->product, $row->quantity, $row->price));
}

require "index.view.php";
?>