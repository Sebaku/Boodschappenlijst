<?php

class Connection
{
    public static function make($settings) {
        // Connect to the database
        try {
            //return new PDO("mysql:host=$databaseHost;dbname=$databaseName", $databaseUsername, $databasePassword);
            return new PDO(
                "mysql:host=".$settings['host'].";dbname=".$settings['name'],
                $settings['username'],
                $settings['password'],
                $settings['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

