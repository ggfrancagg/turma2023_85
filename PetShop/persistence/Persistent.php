<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 30, 2023 - 4:09 PM

namespace Persistence;

class Persistent {
    protected static $database = null;

    public static function connect() {
        self::$database = new Database('root', '', 'petshop');
    }
}
