<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 30, 2023 - 4:09 PM

namespace Persistence;

require_once __DIR__ . '/Database.php';

class Persistent {
    protected static $database = null;

    public static function connect() {
        self::$database = new Database('root', '', 'petshop');
    }

    public static function error() {
        return self::$database->error();
    }
}
