<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 25, 2023 - 4:59 PM

namespace Persistence;

class Database {
    private $connection;
    private $error;

    public function error() {
        return $this->error;
    }

    function __construct($user, $password, $database) {
        $this->connection = new \PDO("mysql:host=localhost;dbname=$database", $user, $password);
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    function exec($sql, $params = []) {
        $stmt = $this->connection->prepare($sql);
        
        try {
            if ($stmt->execute($params))
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $err) {
            $error = $err->getMessage();
        }

        return false;
    }
}