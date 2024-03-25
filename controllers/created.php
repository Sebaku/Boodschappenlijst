<?php
var_dump($_POST);

$res = $query->insert('groceries', [
    'product' => $_POST['product'],
    'quantity' => $_POST['quantity'],
    'price' => $_POST['price']
]);