<?php

return [
  'database' => [
        'host' => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'name' => 'shoppinglist',
        'options' => [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
  ] 
];