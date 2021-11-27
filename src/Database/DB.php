<?php

namespace App\Database;

use Mix\Database\Database;

const DSN = 'mysql:host=ip;port=3306;charset=utf8;dbname=dtm';
const USERNAME = 'root';
const PASSWORD = 'pwd';

class DB extends Database
{

    static private $instance;

    public static function instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self(DSN, USERNAME, PASSWORD);
        }
        return self::$instance;
    }

}
