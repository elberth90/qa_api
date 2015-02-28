<?php

namespace Config;

class Database
{
    private $db;

    public function __construct()
    {
        $pdo = new \PDO('sqlite:sqlite/test.sqlite3');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->db = new \NotORM($pdo);
    }

    public function getDb()
    {
        return $this->db;
    }

}
