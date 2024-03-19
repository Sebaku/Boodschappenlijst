<?php
require "Product.php";

$productsDB = []; 

$res = $query->selectAll('groceries');

foreach($res as $k=>$row) {
    array_push($productsDB,new Product($row->product, $row->quantity, $row->price));
}

require "views/index.view.php";
?>