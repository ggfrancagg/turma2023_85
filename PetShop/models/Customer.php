<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 30, 2023 - 2:15 PM

namespace Models;

class Customer {
    private $id;
    private $name;
    private $ssn;
    private $birth;
    private $street;
    private $hood;
    private $city;
    private $state;
    private $email;
    private $phone;

    public function id() {
        return $this->id;
    }

    public function name() {
        return $this->name;
    }

    public function ssn() {
        return $this->ssn;
    }

    public function birth() {
        return $this->birth;
    }

    public function street() {
        return $this->street;
    }

    public function hood() {
        return $this->hood;
    }

    public function city() {
        return $this->city;
    }

    public function state() {
        return $this->state;
    }

    public function email() {
        return $this->email;
    }

    public function phone() {
        return $this->phone;
    }

    public function __construct($id, $name, $ssn, $birth, $email, $phone, $street, $hood, $city, $state) {
        $this->id = $id;
        $this->name = $name;
        $this->ssn = $ssn;
        $this->birth = $birth;
        $this->street = $street;
        $this->hood = $hood;
        $this->city = $city;
        $this->state = $state;
        $this->email = $email;
        $this->phone = $phone;
    }
}
