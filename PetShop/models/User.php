<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 26, 2023 - 2:44 PM

namespace Models;

class User {
    const IS_ADMIN = 1;
    const IS_EMPLOYEE = 2;
    const IS_CUSTOMER = 3;

    private $id;
    private $name;
    private $password;
    private $type;

    public function id() {
        return $this->id;
    }

    public function name() {
        return $this->name;
    }

    public function password() {
        return $this->password;
    }

    public function type() {
        return $this->type;
    }

    public function __construct($id, $name, $password, $type) {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->type = $type;
    }

    public static function login($user) {
        setcookie('user', $user->name(), time() + 172800);
    }

    public static function isLoggedIn() {
        return isset($_COOKIE['user']);
    }

    public static function logout() {
        setcookie('user', '');
    }

    public static function loggedUserName() {
        return $_COOKIE['user'];
    }
}
