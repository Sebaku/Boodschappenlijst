<?php

class Connection
{
    public static function make() {
        // Basic connection settings
        $databaseHost = 'localhost';
        $databaseUsername = 'root';
        $databasePassword = 'root';
        $databaseName = 'sebas_boodschappenlijst';
        // Connect to the database
        try {
            return new PDO("mysql:host=$databaseHost;dbname=$databaseName", $databaseUsername, $databasePassword);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

