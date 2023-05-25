<!--
  -- Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
  -- Date: May 25, 2023 - 4:59 PM
-->
<?php
class Database {
    private $connection;

    function __construct($user, $password, $database) {
        $this->connection = new PDO("mysql:localhost; database=$database", $user, $password);
    }

    function exec($sql) {
        $result = $this->connection->query($sql);
    }
}