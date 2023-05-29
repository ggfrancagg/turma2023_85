<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 26, 2023 - 3:07 PM

namespace Persistence;

require_once 'Database.php';
require_once __DIR__ . '../../models/User.php';

class User {
    private static $database = null;

    public static function connect() {
        self::$database = new Database('root', '', 'petshop');
    }

    public static function create($user) {
        $sql = "INSERT INTO `user` VALUES (?, ?, ?, ?)";
        self::$database->exec($sql, [
            $user->id(),
            $user->name(),
            $user->password(),
            $user->type()
        ]);
    }

    public static function login($user) {
        $sql = 'SELECT password FROM `user` where name=?';
        
        if ($res = self::$database->exec($sql, [$user->name()])) {
            if (password_verify($user->password(), $res[0]['password'])) {
                \Models\User::login($user);
                return true;
            }
        }

        return false;
    }

    public static function getUser($name) {
        $sql = "SELECT * FROM user WHERE name=?";

        if ($res = self::$database->exec($sql, [$name])) {
            return new \Models\User(
                $res[0]['id'],
                $res[0]['name'],
                $res[0]['password'],
                $res[0]['type']
            );
        }
    }
}
