<?php

// $router->define( [
//     '' => 'controllers/index.php',
//     'poep' => 'controllers/create.php',
//     'created' => 'controllers/created.php'
// ]);

$router->get('', 'controllers/index.php');
$router->get('poep', 'controllers/create.php');
$router->post('created', 'controllers/created.php');