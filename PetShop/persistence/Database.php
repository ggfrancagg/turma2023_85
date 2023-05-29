<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 25, 2023 - 4:59 PM

namespace Persistence;

class Database {
    private $connection;

    function __construct($user, $password, $database) {
        $this->connection = new \PDO("mysql:host=localhost;dbname=$database", $user, $password);
    }

    function exec($sql, $params = []) {
        $stmt = $this->connection->prepare($sql);
        
        if ($stmt->execute($params)) {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }
}