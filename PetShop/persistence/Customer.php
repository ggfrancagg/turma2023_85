<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 30, 2023 - 4:07 PM

namespace Persistence;

require_once __DIR__ . '/Persistent.php';
require_once __DIR__ . '../../models/Customer.php';

class Customer extends Persistent {
    const PAGINATE_COUNT = 2;

    public static function create($customer) {
        $sql = 'INSERT INTO customer (name, ssn, birth, email, phone, street, hood, city, state) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        
        self::$database->exec($sql, [
            $customer->name(),
            $customer->ssn(),
            $customer->birth(),
            $customer->email(),
            $customer->phone(),
            $customer->street(),
            $customer->hood(),
            $customer->city(),
            $customer->state()
        ]);
    }

    public static function paginate($from = 0, $limit = self::PAGINATE_COUNT) {
        $sql = "SELECT * FROM customer LIMIT $from,$limit";
        $result = self::$database->exec($sql);
        $customers = [];
        
        foreach ($result as $row) {
            $customers []= new \Models\Customer(
                $row['id'],
                $row['name'],
                $row['ssn'],
                $row['birth'],
                $row['email'],
                $row['phone'],
                $row['street'],
                $row['hood'],
                $row['city'],
                $row['state']
            );
        }

        return $customers;
    }

    public static function get($id) {
        $sql = 'SELECT * FROM customer WHERE id=?';
        
        if ($res = self::$database->exec($sql, [$id])) {
            return new \Models\Customer(
                $res[0]['id'],
                $res[0]['name'],
                $res[0]['ssn'],
                $res[0]['birth'],
                $res[0]['email'],
                $res[0]['phone'],
                $res[0]['street'],
                $res[0]['hood'],
                $res[0]['city'],
                $res[0]['state']
            );
        }

        return false;
    }

    public static function getCustomerCount() {
        $sql = 'SELECT COUNT(*) FROM customer';
        self::$database->exec($sql)[0]['COUNT(*)'];
    }

    public static function modify($id, $data) {
        $sql = 'UPDATE customer SET `name`=?, ssn=?, birth=?, email=?, phone=?, street=?, hood=?, city=?, `state`=? WHERE id=?';
        
        if (self::$database->exec($sql, [
            $data['name'],
            $data['ssn'],
            $data['birth'],
            $data['email'],
            $data['phone'],
            $data['street'],
            $data['hood'],
            $data['city'],
            $data['state'],
            $data['id']
        ]) !== false) {
            return true;
        }

        return false;
    }
}