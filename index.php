<?php

    // Basic connection settings
    $databaseHost = 'localhost';
    $databaseUsername = 'root';
    $databasePassword = 'root';
    $databaseName = 'sebas_boodschappenlijst';

    // Connect to the database
    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

    $sql = "SELECT name, amount, price FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["name"]. " - Name: " . $row["amount"]. " " . $row["price"]. "<br>";
        }
      } else {
        echo "0 results";
    }

    $product1 = array("naam"=>"Brood", "prijs"=>"1.00", "aantal"=>"3");
    $product2 = array("naam"=>"Ford", "prijs"=>"0.99", "aantal"=>"2");
    $products = [
        array("naam"=>"Ford", "prijs"=>"0.99", "aantal"=>"2"),
        array("naam"=>"Brood", "prijs"=>"1.00", "aantal"=>"3")
    ];
    require "index.view.php";
?>