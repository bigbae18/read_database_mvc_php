<?php

namespace App;
use PDO;
use PDOException;

class Database {

    public $mysql;

    public function __construct() {
        try {
            $this->mysql = $this->getConnection();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    private function getConnection() {

        $host = "localhost";
        $user = "root";
        $database = "date_consultory";
        $password = "";
        $port = "3306";

        $charset = "utf8";

        $connectionString = "mysql:host=$host;dbname=$database;charset=$charset";
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new PDO($connectionString, $user, $password, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}

?>