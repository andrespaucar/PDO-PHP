<?php

namespace App\Core;
use Pdo;

class Database{

    private static $_db;

    public static function connect(){
        if(!self::$_db) {
            $pdo = new Pdo(
                __DB_CONFIG__['db']['host'],
                __DB_CONFIG__['db']['user'],
                __DB_CONFIG__['db']['password']
            );
    
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            self::$_db = $pdo;
        }

        return self::$_db;
    }
}